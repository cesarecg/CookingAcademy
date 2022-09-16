<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Escuela de artes culinarias, dedicada a la capacitación de profesionales en el área de cocina. Empresa en constante crecimiento.
    Contactos e inscripciones al 0412-7049340 (Llamadas, mensajes y WhatsApp)"/>
    <title>Newsletter - Le Concassé</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png"/>
    <!-- Core theme CSS (includes Bootstrap)--> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/newsletter.css" rel="stylesheet" />
    <link href="css/main2.css" rel="stylesheet" />
    
</head>
<main>
<body>
     <!-- Navigation-->
     <nav class="navbar navbar-expand-sm" id="mainNav">
            <h2 class="texto-navbar">
                ESCUELA DE COCINA - <strong>LE CONCASSÉ</strong>
            </h2>
            <h2 class="texto-navbar-mobile text-center">
                ESCUELA DE COCINA <br><p class="sub-texto-navbar text-center">LE CONCASSÉ</p>
            <h2>
            <button class=" ml-auto openbtn" id="abrirMenu" onclick="openNav()">☰</button>  
        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href="index.php">Volver a Inicio</a>
            <a href="login.php">Iniciar Sesión</a> 
            <a href="cursos.php">Cursos Y Pensum</a>
            <a href="recetas.php">Recetas Paso a Paso</a>
            <a href="#inscrip" data-toggle="modal" data-target="#inscrip">Inscripciones</a>
            <a href="#contacto" data-toggle="modal" data-target="#contacto">Mensajería Directa</a>
        </div> 
        </nav>
        <a href="index.php">
        <img src="./assets/img/favicon.png" class="navbar-logoC">
        </a>

        <hr class="breaker">
    <div class="newsletter-div">
        <img src="assets/img/favicon.png" alt="Logo Leconcasse Academia de cocina" class="newsletter-img">
        <br>
        <p class="paragraph-news text-center">¿Quieres tener noticias sobre cuando estén disponibles los cursos y recibir ofertas exclusivas?</p>
        <p class="paragraph-news text-center">Únete a nuestro Newsletter por correo</p>
       <a target="_blank" href="https://leconcasse.substack.com/subscribe"><button class="btn btn-block login-btn mb-4">Suscríbete</button></a>
    </div>



           
   <!-- Modals -->

<!-- Modal de Inscripción-->

<div class="modal fade" id="inscrip" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="true" aria-hidden="true">
             <div class="modal-dialog" role="document">
               <div class="modal-content-2">
                 <div class="modal-header text-center">
                   <h4 class="modal-title w-100 font-weight-bold">Formulario de inscripción</h4>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                </div>
              <form method="POST" action="mails/inscripcion.php" enctype="multipart/form-data">
                  
                <div class="form-group">
                    <input class="form-control" id="name-i" name="name-i" placeholder="Nombre y apellido* " required="required" data-validation-required-message="Indique su Nombre y apellido"></input>
                    <p class="help-block text-danger"></p>
                </div>
                 <div class="form-group ">
                    <input class="form-control" id="email-i" name="email-i" placeholder="Email* " required="required" data-validation-required-message="Indique su email"></input>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="form-group ">
                    <input class="form-control" id="curso-i" name="curso-i" placeholder="Curso a tomar* " required="required" data-validation-required-message="Indique curso a tomar"></input>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="form-group ">
                    <input class="form-control" id="cedula-i" name="cedula-i" placeholder="Cédula* " required="required" data-validation-required-message="Indique su cédula"></input>
                    <p class="help-block text-danger"></p>
                </div>
                 <div class="form-group ">
                    <input class="form-control" id="phone-i" name="phone-i" placeholder="Teléfono* " required="required" data-validation-required-message="Indique su teléfono"></input>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="form-group" id="turno-i" name="turno-i"required="required" data-validation-required-message="Indique su turno" >
                <select class="form-control">
                    <option data-display="">Turno de preferencia *</option>
                    <option value="Mañana">Turno mañana</option>
                    <option value="Tarde">Turno tarde</option>
                </select>
                </div>
                <div class="form-group ">
                    <input class="form-control" id="fecha-i" name="fecha-i" placeholder="Fecha de nacimiento* " required="required" data-validation-required-message="Indique su fecha de nacimiento"></input>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="text-center">
                    <div id="success"></div>
                <input type="submit"class="btn btn-primary text-center" name="submit" value="Enviar"></submit>
                    </div>
               </div>  
          
            </div>  
        </div>
           
        </form>
         </div>
    </div>

    <!-- /Modal de Inscripción-->
 <!-- Modal de Reclutamiento -->
 <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="true" aria-hidden="true">
             <div class="modal-dialog" role="document">
               <div class="modal-content-1">
                 <div class="modal-header text-center">
                   <h4 class="modal-title w-100 font-weight-bold">Formulario de solicitud de trabajo</h4>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                </div>
              <form method="POST" action="mails/job.php" enctype="multipart/form-data">
                  
                <div class="form-group ">
                    <input class="form-control" id="name" name="name" placeholder="Nombre y apellido* " required="required" data-validation-required-message="Indique su nombre y apellido"></input>
                    <p class="help-block text-danger"></p>
                </div>
                 <div class="form-group ">
                    <input class="form-control" id="email" name="email" placeholder="Email* " required="required" data-validation-required-message="Indique su email"></input>
                    <p class="help-block text-danger"></p>
                </div>
                 <div class="form-group ">
                    <input class="form-control" id="telefono" name="telefono" placeholder="Teléfono* " required="required" data-validation-required-message="Indique su teléfono"></input>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="form-group ">
                    <input class="form-control" id="fecha" name="fecha" placeholder="Fecha de nacimiento* " required="required" data-validation-required-message="Indique su fecha de nacimiento"></input>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="form-group ">
                    <input class="form-control" id="area" name="area" placeholder="Área de experiencia* " required="required" data-validation-required-message="Indique su área"></input>
                    <p class="help-block text-danger"></p>
                </div>
                   <div class="text-center modal-title"> Envíanos tu Currículum </div>
                   <img src="assets/img/pdf.png" class="icon">
                <input type="file" class="text-center modal-title" name="resume" id="resume" accept=".pdf"/>

                <div class="text-center">
                    <div id="success"></div>
                <input type="submit"class="btn btn-primary text-center" name="submit" value="Enviar"></submit>
                    </div>
               </div>  
          
            </div>  
        </div>
           
        </form>
         </div>
    </div>

    <!-- Modal de Contacto -->
    <div class="modal fade" id="contacto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="true" aria-hidden="true">
             <div class="modal-dialog" role="document">
               <div class="modal-content-3">
                 <div class="modal-header text-center">
                   <h4 class="modal-title title">Habla con nosotros</h4>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                </div>
              <form method="POST" action="mails/contacto.php" enctype="multipart/form-data">
                  
               
                <div class="form-group ">
                    <input class="form-control" id="email-c" name="email-c" placeholder="Escribe tu email* " required="required" data-validation-required-message="Escriba su correo electrónico"></input>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                <textarea class="form-control" id="mensaje-c" name="mensaje-c" placeholder="Escribe tu mensaje*" required="required" data-validation-required-message="Escriba su mensaje" rows="3"  ></textarea>
                <p class="help-block text-danger"></p>
                </div>
                <div class="text-center">
                    <div id="success"></div>
                <input type="submit"class="btn btn-primary text-center" name="submit" value="Enviar"></submit>
                    </div>
               </div>  
          
            </div>  
        </div>
           
        </form>
         </div>
    </div>
    <!-- /Modal de Contacto -->
</body>
</main>

            
        <script>
            function openNav() {
            document.getElementById("mySidebar").style.width = "270px";
            document.getElementById("abrirMenu").style.marginRight = "270px";
            $("#abrirMenu").css("display", "none") 
            }

            function closeNav() {
            document.getElementById("mySidebar").style.width = "0px";
            document.getElementById("abrirMenu").style.marginRight= "0px";
            $("#abrirMenu").css("display", "block") 
            }
        </script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</html>