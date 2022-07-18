<?php


namespace App\Utils;


use http\Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use App\Utils\CustomException;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class MessageResponse
{
    public static function sendResponse( Request $request, $msg = '', $data = null, $exception = null, $codified = true){
        try {
            $message = $msg;
            $code = 200;
            //revisaremos que la excepción sea diferente a nulo
            if($exception){ //existe y aquí iremos agregando los errores que vayamos teniendo
                Log::error($exception->getMessage(),[
                    'request' => $request,
                    'action' => $request->route()->getActionName(),
                    'exception' => $exception,
                ]);
                if($exception instanceof ModelNotFoundException){ //Usada cuando no se encuentran los errores
                    $message = 'No encontramos el registro solicitado para '.$exception->getModel();
                    $code = 404;
                }else{ //Mensaje generico
                    $code = 500;
                    $message = 'Tuvimos un error desconocido, por favor comuníquese con su administrador';
                }
                switch(true) {
                    case $exception instanceof ModelNotFoundException :
                        $code = 404;
                        $message = ($msg === '') ? 'No se encontró el registro solicitado' : $msg;
                        break;
                    case $exception instanceof ValidationException :
                        $code = 422;
                        $message = ($msg === '') ? 'La información recibida no es válida' : $msg;
                        $data = $exception->errors();
                        break;
                    case $exception instanceof  QueryException :
                        switch($exception->getCode()){
                            case 23505:
                                $code = 23505;
                                $message = ($msg === '') ? 'Registro duplicado, por favor verifique la información ingresada': $msg;
                                break;
                            case 22001 : //Registro Truncado
                                $code = 22001;
                                $message = ($msg === '') ? 'La información ingresada es demasiado larga para ser guardada': $msg;
                                break;
                            case '22P02' : //Tipo de dato incorrecto
                                $code = '22P02';
                                $message = ($msg === '') ? 'Se recibió información no compatible, por favor verifique': $msg;
                                break;
                            case 23502 : //Recibió datos nulos
                                $code = 23502;
                                $message = ($msg === '') ? 'No se recibió la información completa, por favor verifique lo datos enviados' : $msg;
                                break;
                            case 23503: //Se quiere eliminar un registro que está relacionado a otros
                                $code = 23503;
                                $message = ($msg === '') ? 'El registro que desea eliminar tiene datos relacionados, no se puede eliminar' : $msg;
                                break;
                            case 23514 : //Se puso una opción diferente en un enum
                                $code = 23514;
                                $message = ($msg === '') ? 'La opción ingresada es incorrecta, por favor verifique' : $msg;
                                break;
                            case 42703 : //La columna no existe
                                $code = 42703;
                                $message = ($msg === '') ? 'Está intentando acceder a información que no existe, verifique' : $msg;
                                break;
                            default : //Error sin código aparente
                                $code = 500;
                                $message = ($msg === '') ? 'Hemos experimentado una situación desconocida, por favor comuniquese con su administrador' : $msg;
                                break;
                        }
                        break;
                    case $exception instanceof CustomException:
                        $customMsg = $exception->getMessage();
                        switch($exception->getCode()){
                            case 404:
                                $code = 404;
                                $message = $customMsg === '' ? 'No se encontró el registro solicitado' : $customMsg;
                                break;
                            default: $message = $customMsg === '' ? 'Hemos experimentado una situación desconocida, por favor comuniquese con su administrador' : $customMsg;
                                break;
                        }
                        #$message = ($exception->getMessage() !== '') ? $exception->getMessage() : $exception->unknownError();
                        break;

                    default : // Excepciones no conocidas o sin código aparente
                        $code = 500;
                        $message = ($msg === '') ? 'Hemos experimentado una situación desconocida, por favor comuniquese con su administrador' : $msg;
                        break;
                }
            }
            if(App::environment('test')){
                return Response::json([
                    "code" => $code,
                    "message" => $message,
                    "data" => $data,
                ]);
            }
            return Response::json([
                "code" => $code,
                "message" => $message,
                // "data" => ($codified) ? base64_encode(json_encode($data)) : json_encode($data),
                "data" => ($codified) ? base64_encode(json_encode($data)) : $data,
            ]);
        } catch (Exception $e) {
            //Aquí tronó manejando los errores, colocamos un error general
            Log::critical($e,[
                'controller' => $request->route()->getController(),
                'action' => $request->route()->getAction(),
                'exception' => $e
            ]);

            return Response::json([
                "code" => 500,
                "message" => "Tuvimos un error desconocido, por favor comuníquese con su administrador",
                "data" => null,
            ]);
        }
    }

    public static function sendCustomMessage($code, $msg)
    {
        return Response::json([
            "code" => $code,
            "message" => $msg,
            "data" => null,
        ]);
    }
}
