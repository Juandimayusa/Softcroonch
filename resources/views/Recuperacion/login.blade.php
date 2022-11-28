<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Softcronnch</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/estilos-index2.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/nicepage.css')}}">
    <!--PONER EL LOGO ARRIBA EN LA PESTAÑA NAVEGADOR-->
    <link rel="shourtcut icon" href="{{asset('img/logos/Logo_Final_Cronnch.png')}}">
    <!--IMPORTACION FUENTE-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap');
    </style>
    <!--CONFIGURACION BOOTSTRAP-->
    <!-- JavaScript Bundle with Popper -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--<link rel="stylesheet" href="./frameworks/bootstrap/css/bootstrap.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <!--
        CONTACTENOS---------------------------------------------------------
        -->
    <link rel="stylesheet" href="{{asset('css/nicepage.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('css/Casa.css')}}" media="screen">
    <script class="u-script" type="text/javascript" src="{{asset('js/jquery.js')}}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{asset('js/nicepage.js')}}" defer=""></script>
    <meta name="generator" content="Nicepage 4.7.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": ""
        }
    </script>

    <!--
        CONTACTENOS---------------------------------------------------------
        -->
</head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

            <div class="borde-nav logo">
            <img src="{{asset('img/logos/Logo_Final_Cronnch.png')}}" alt="imagen logo" class="img-responsive center-box" style="width:55%;"
                title="Logo Empanadas Cronnch">
            </div>
            <div class="borde-nav navegacion">
                <ul>
                    <h2 class="form-titulo">INICIAR SESION</h2>
                    
                    
                </ul>
            </div>
    
<br>
<br>
<br>
<br>
<br>
<body>


    <form class="needs-validation" method="" action="Siute" novalidate>
    
       
        <!--CUANDO SE DICE INPUT ES PORQUE VAMOS A RECOGER DATOS-->
        <div class="contenedor-inputs">
            <!--SON LAS CAJISTA DE LA INFORMACION
                                PLACEHOLDER= ES LA INFORMACION QUE VEMOS DENTRO DE LAS CAJAS-->
            <input type="email" name="Correo Electronico" placeholder="Direccion de correo electrónico" class="input-tam100" required="" id="validationCustom01">
            <div class="valid-feedback">Completado ✓</div>
            <div class="invalid-feedback">Ingrese un correo valido</div>
        </div>
        <div class="contenedor-inputs">
            <input type="password" name="Contraseña" placeholder="Contraseña" class="input-tam50" required="">
            <div class="valid-feedback">Completado ✓</div>
            <div class="invalid-feedback">Ingrese una contraseña valida</div>
            <!--BOTONES DE FORMULARIO-->
            <!--Type=submit es de php pata concetar la BD-->
            <!--BOTON ENVIAR-->

            <input type="submit" value="Ingresar" class="btn-enviar">
            <!--BOTON CANCELAR-->
            <input type="reset" value="Cancelar" class="btn-enviar">
            <!--AVISO O LINK QUE DICE YA TIENES UNA CUENTA-->
            <p class="form-link">¿Olvidaste la contraseña?
                <a class="registro" target="blank" href="{{asset('recovery')}}">Recuperar Contraseña</a>


            </p>
        </div>
    </form>
    



    <!--CONTACTENOS-->
    <div class="borde-ptq titulo">
        <a name="PTV"></a>
        <h1>CONTÁCTENOS</h1>
    </div>
    <section id="form-width">

        <form id="form-container" method="post" action="">
            <div class="row">
                <!-- form input -->
                <div class="col-lg-6 col-md-12 col-sm-12">

                    <!-- inputs -->
                    <div class="inputs-form form-group">
                        <label for="username" class="ubuntu">Nombre y apellido:</label>
                        <input type="text" name="username" id="username" class="form-control mb-4" required>

                        <label for="email_form" class="ubuntu">Correo Electrónico:</label>
                        <input type="email" name="email_form" id="email_form" class="form-control mb-4" required>

                        <div class="form-group mt-2">
                            <input type="checkbox" name="accept_terms" value="" required>
                            <label for="accept_terms">Acepto términos y condiciones.</label>
                        </div>

                        <button type="submit" class="btn mt-1 ubuntu" id="send-form">Enviar</button>

                    </div>

                </div>

                <!-- form img -->
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <figure class="w-100 img-form">
                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.7205770359724!2d-74.08011778620816!3d4.643850043443286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bcb25ac93f3%3A0x467fae5ad2a4d736!2sEmpanadas%20Cronnch%20Sede%20Campin!5e0!3m2!1ses!2sco!4v1637878386285!5m2!1ses!2sco"></iframe>
                    </figure>

                </div>

            </div>
        </form>

    </section>

    <!--PIE DE PAGINA-->

    <footer>
        <div class="borde titulo">
            <a name="CONTACTO"></a>
            <h1></h1>
        </div>
        <div class="borde div-pie-horario">
            <h2>Horarios</h2>
            <h4>LUN-SAB:</h4>
            <h4>12:00pm - 10:00pm </h4>
        </div>
        <div class="borde div-pie-social">
            <h2>Linea Whatsapp</h2>
            <img src="{{asset('img/logos/whatsapp.png')}}" alt="">
            <h3>+57-321-928-9765</h3>
        </div>
        <div class="borde div-pie-social">
            <h2>Síguenos</h2>
            <img src="{{asset('img/logos/instagram.png')}}">
            <img src="{{asset('img/logos/facebook.png')}}" alt="">
            <h3>@empanadas.cronnch</h3>
        </div>
        <div class="borde div-pie-social">
            <h2>Cobertura</h2>
            <img src="{{asset('img/logos/rappi.png')}}" alt="">
        </div>
        </div>


    </footer>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>

</html>