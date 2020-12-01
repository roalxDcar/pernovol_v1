@extends('layouts.principal')

@section('content')
<div class="app-content content">
    <div class="content-header row">
    </div>
    <div class="content-overlay">
    </div>
    <div class="content-wrapper">
        <div class="content-body">
            <section class="row flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 m-0">
                            <div class="border-0 mr-3 ml-3 mt-3 pt-10">
                                <div class="card-title text-center">
                                    <div class="p-3">
                                        <img alt="branding logo" src="{!! asset('assets/app-assets/images/logo/logo-dark.png') !!}"/>
                                    </div>
                                </div>
                                <h3 class="card-subtitle line-on-side text-center m-3">
                                    <span>
                                        <b>
                                            Ingresar al Sistema
                                        </b>
                                    </span>
                                </h3>
                            </div>
                            <div class="card-content">
                                <div class="card-body m-3">
                                    <form id="form" action="#" class="form-horizontal form-simple">
                                        @csrf
                                        <fieldset class="position-relative has-icon-left pb-3">
                                            <input class="form-control" id="email" name="email" placeholder="Email" required="" type="text" style="margin-bottom:1px;">
                                                <div class="form-control-position">
                                                    <i class="la la-user"></i>
                                                </div>
                                            </input>
                                        </fieldset>
                                        <fieldset class="position-relative has-icon-left pb-3">
                                            <input class="form-control" id="password" name="password" placeholder="Contraseña" required="" type="password" style="margin-bottom:1px;">
                                                <div class="form-control-position">
                                                    <i class="la la-key">
                                                    </i>
                                                </div>
                                            </input>
                                        </fieldset>
                                        <button class="btn btn-primary btn-block" type="submit" id="load">
                                                INGRESAR
                                        </button>
                                    </form>
                                    <br>
                                    <span id="error-back"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<script>   
    {{-- Validación de campos de formulario Login --}}
    $("#form").validate({
        rules: {
            // Se selecciona la etiqueta según el nombre (name)
            email: {
                required: true,
                email: true
            },
            password:{
                required: true,
                minlength: 6,
                maxlength: 15
            }
        },
        messages: {
            // Se cambia el texto de ingles a español(personalizado)
            email: {
                required: "Este campo es requerido",
                email: "Por favor, introduce una dirección de correo electrónico válida."
            },
            password: {
                required: "Este campo es requerido",
                minlength: "Por favor, ingrese al menos 6 caracteres.",
                maxlength: "Por favor, ingrese no más de 15 caracteres."
            }
        },
        // Se aplicara el error del campo dentro de un span.
        errorElement : 'span',
        // Transferencia de información y validación de credenciales con la base de datos
        // logica backend
        submitHandler: function(){
            $(".btn-block")
                .html(`<i class="spinner-border spinner-border-sm" style="margin:2px;"></i> INGRESANDO`)
                .attr("disabled",true);

            let email = $('#email').val();
            let password = $('#password').val();

            $.ajax({
                url:     "{{ route('login_attemps') }}",
                headers: {'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
                method:  "POST",
                data:{
                    email:email,
                    password:password
                },
                success:function(data){
                    
                    if(data.state == "success"){

                        location.href = "{{ route('home') }}";

                    }else{
                        
                        $('#error-back')
                            .html(`<div class="alert alert-danger bg-danger text-white text-center">${data.msg}</div>`);
                        
                        $(".btn-block")
                            .html(`INGRESAR`)
                            .attr("disabled",false);
                    }
                }
            });
        },
        // Personalización de clase para los inputs validados
        highlight: function(element) {
           $(element).addClass('is-invalid');
        },
        unhighlight: function(element) {
           $(element).removeClass('is-invalid');
       }
    });
</script>

<style>
    {{-- Estilo de la etiqueta span de error --}}
    span.error{ 
        color: red; 
        font-size: 1em;  
    }
</style>

@endsection
