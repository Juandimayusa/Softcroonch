<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Softcronnch</title>
        <link rel="stylesheet" type="text/css" 
        href="{{asset('css/estilos-index2.css')}}">
        <link rel="stylesheet" type="text/css" 
        href="{{asset('css/nicepage.css')}}">
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
            
            
            <script type="application/ld+json">{
                "@context": "http://schema.org",
                "@type": "Organization",
                "name": ""
        }</script>
            <meta name="theme-color" content="#478ac9">
            <meta property="og:title" content="Casa">
            <meta property="og:type" content="website">


         <!--
        CONTACTENOS---------------------------------------------------------
        -->
    </head>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <body>
        <!--SCRIPTS BOOTSRAP-->
        <!--
        <script src="./frameworks/bootstrap/js/bootstrap.bundle.js"></script>
        <script src="./frameworks/bootstrap/js/popper.js"></script>
        <script src="./frameworks/bootstrap/js/bootstrap.js"></script>-->
        

        <!--CREACION NAVEGADOR
        nav=barra de navegacion
        -->

        <nav>
            <div class="borde-nav logo">
                <img src="{{asset('img/logos/Logo Final Cronnch.png')}}" alt="imagen logo"
                title="Logo Empanadas Cronnch">
            </div>
            <div class="borde-nav navegacion">
                <ul>
                    <li><a href="/">INICIO</a></li>
                    
                    <li><a href="#PORTAFOLIO">PRODUCTOS</a>
                    </li>

                    <li><a href="#PTV">QUIENES SOMOS</a></li>
                    <li><a href="#CONTACTO">CONTACTENOS</a></li>
                </ul>
            </div>
            <div class="borde-nav ingreso">
                <ul>
                    <li>
                      <!--VENTANA INGRESO-->
                      <input type="checkbox" id="btn-modal">
                      <li><a href="login" ><i ></i> Ingreso </a></i>
                      <!--PARA CREAR FORMULARIO ES CON LA ETIQUETA FORM-->
                            <!--ACTION Y METHOD SON TERMINOS DE PHP-->

                            
                          </div>
                        </div>
                      </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!--CREACION ENCABEZADO-->
        <!--La clase borde ya esta en css y arriba-->
        <!--<header class="borde"> </header>-->
        <!--SLIDER-->
        <section class="section">
          <div class="slider">
              <div class="slide">
                  <input type="radio" name="radio-btn" id="radio1">
                  <input type="radio" name="radio-btn" id="radio2">
                  <input type="radio" name="radio-btn" id="radio3">
                  <input type="radio" name="radio-btn" id="radio4">

                  <div class="st first">
                      <img src="{{asset('img/prueba-verde2.png')}}" alt="Slider slider-oficial">
                  </div>

                  <div class="st">
                      <img src="{{asset('img/slider-empanada.png')}}" alt="slider-empanada">
                  </div>

                  <div class="st">
                      <img src="{{asset('img/slider-chorizo.png')}}" alt="slider-choripan">
                  </div>

                  <div class="st">
                    <img src="{{asset('img/slider-siguenos.png')}}" alt="slider-siguenos>
                  </div>

                  <div class="nav-auto">
                      <div class="a-b1"></div>
                      <div class="a-b2"></div>
                      <div class="a-b3"></div>
                      <div class="a-b4"></div>
                  </div>
              </div>

              <div class="nav-m">
                  <label for="radio1" class="m-btn"></label>
                  <label for="radio1" class="m-btn"></label>
                  <label for="radio1" class="m-btn"></label>
                  <label for="radio1" class="m-btn"></label>
              </div>
          </div>
      </section>
      <!--SCRIPT PARA FUNCIONAMIENTO SLIDER-->
      <script type="text/javascript">
          var counter=1;
          setInterval(function(){
              document.getElementById('radio' + counter).checked=true;
              counter++;
              if(counter > 4){
                  counter = 1;
              }
          },5000);
      </script>

        <!--CREACION PORTAFOLIO-->
        <!--La clase borde ya esta en css y arriba-->
        
        <div class="borde titulo">
            
            <h1>PORTAFOLIO DE PRODUCTOS</h1>
            <a name="PORTAFOLIO">
        </div>
        <!--la etiqueta main significa que estamos poniendo algo
        muy IMPORTANTE-->
        <main id="portafolio">
            <div class="borde div-porta">
                <h2>Maíz</h2>
                <img src="{{asset('img/portafolio-empanada-maiz.JPG')}}" alt="maiz-servicios"
                title="Empanada Maiz">
            </div>
            <div class="borde div-porta">
                <h2>Choripan</h2>
                <img src="{{asset('img/portafolio-choripan.JPG')}}" alt="choripan_servicios"
                title="Choripan">
            </div>
            <div class="borde div-porta">
                <h2>Super Combos</h2>
                <img src="{{asset('img/combo_empanada_servicios.png')}}" alt="combo_empanada_servicios"
                title="Combo Empanada">
            </div>
            <div class="borde div-porta">
              <h2>Bebidas</h2>
              <img src="{{asset('img/bebidas_postobon_servicios.png')}}" alt="bebidas_postobon_servicios"
              title="Bebidas Postobon">
          </div>
        </main>
        <!--Quienes Somos-->
        <div class="borde-ptv titulo">
            <a name="PTV"></a>
            <h1>QUIENES SOMOS</h1>
        </div>
        <div class="borde-container">
            <div class="borde div-pie-blanco"></div>
            <div class="borde div-foot-nosotros">
              <img src="{{asset('img/logos/quienes-somos.png')}}">
              <p>Somos un empresa dedicada a la producción y venta de comidas rápidas, caracterizándonos 
                  por tener el mejor sabor en nuestras empanadas, contamos 
                  con una trayectoria de más de 2 años en el 
                  mercado. Nos encontramos ubicados en dos sectores: Campín con dirección Calle 53 B # 28 A - 66 y Chapinero 
                  con dirección  Calle 69 BIS  # 14 - 74.  Velamos por la satisfacción de cada uno de nuestros clientes con el fin 
                  de que tengan una experiencia única e inolvidable.
              </p>
            </div>
              <div class="borde div-local">
              <img src="{{asset('img/local_cronnch.png')}}" alt="">
              </div>
            </div>
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
            <img src="{{asset('img/logos/whatsapp.png')}}" alt=""><h3>+57-321-928-9765</h3>
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
    (function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
     })
    })()
</script>
    </body>
</html>
