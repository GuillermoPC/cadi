<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kid extends Model
{   
    protected $guarded = [];
    protected $table = 'kids';
    protected $fillable =  ['name',
                            'father_last_name',
                            'mother_last_name',
                            'birthdate',
                            'genre',
                            'age',
                            'img'];
    
    protected $hidden   =  ['status', 
                            'created_by', 
                            'updated_by', 
                            'canceled_by', 
                            'canceled_at', 
                            'created_at', 
                            'updated_at'];
}