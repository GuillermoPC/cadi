@extends('layouts.plantilla')

@section('title', 'CADI EMAÚS | Contacto')

@section('css')


@endsection

{{-- PÁGINA INICIO --}}

@section('content')

    {{-- CONTENIDO INICIO --}}

    <section id="CONTENIDO-INICIO" class="px-5 pt-3">
        <div class="w-100">

            <div class="row ">
                <div class="col-md-12">
                    <div class="shadow-lg bg-body rounded">
                        <div class="pb-3 pt-3 px-4 mb-2 text-white" style="background-color: #ED633B; font-weight: bold;">
                            Centro de Atención y Desarrollo Infantil (CADI) | CONTACTO
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Section>

    <section class="mbr-section form1 cid-qv5ApHdm7c mbr-parallax-background" id="form1-2w" data-rv-view="9851">
        <div class="container-fluid px-5 p-3">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="card border-0 rounded-3 shadow-lg overflow-hidden">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-sm-6 d-sm-block bg-image">
                                    <img src="https://images.pexels.com/photos/1148998/pexels-photo-1148998.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        class="img-fluid" style="object-fit: cover;" alt="">
                                </div>
                                <div class="col-sm-6 p-4">
                                    <div class="text-center">
                                        <div class="h3 fw-light">!Contactanos!</div>
                                        <p class="mb-4 text-muted">Para mas información rellena el siguiente formulario.</p>
                                    </div>

                                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">

                                        <!-- Name Input -->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="name" type="text" placeholder="Nombre"
                                                data-sb-validations="required" />
                                            <label for="name">Nombre</label>
                                            <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.
                                            </div>
                                        </div>

                                        <!-- Email Input -->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="emailAddress" type="email"
                                                placeholder="Correo Electronico" data-sb-validations="required,email" />
                                            <label for="emailAddress">Correo Electronico</label>
                                            <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email
                                                Address is required.</div>
                                            <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email
                                                Address Email is not valid.</div>
                                        </div>

                                        <!-- Message Input -->
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" id="message" type="text" placeholder="Mensaje" style="height: 10rem;"
                                                data-sb-validations="required"></textarea>
                                            <label for="message">Mensaje</label>
                                            <div class="invalid-feedback" data-sb-feedback="message:required">Message is
                                                required.</div>
                                        </div>

                                        <!-- Submit success message -->
                                        <div class="d-none" id="submitSuccessMessage">
                                            <div class="text-center mb-3">
                                                <div class="fw-bolder">Form submission successful!</div>
                                                <p>To activate this form, sign up at</p>
                                                <a
                                                    href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                            </div>
                                        </div>

                                        <!-- Submit error message -->
                                        <div class="d-none" id="submitErrorMessage">
                                            <div class="text-center text-danger mb-3">Error sending message!</div>
                                        </div>

                                        <!-- Submit button -->
                                        <div class="d-grid">
                                            <button class="btn btn-primary btn-lg disabled" id="submitButton"
                                                type="submit">Enviar</button>
                                        </div>
                                    </form>
                                    <!-- End of contact form -->

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    {{-- CONTENIDO INICIO --}}

@endsection
{{-- PÁGINA INICIO --}}
