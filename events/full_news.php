<?php
    include "logic.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias - Le Concassé</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.png"/>
    <!-- Core theme CSS (includes Bootstrap)--> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="../css/main2.css" rel="stylesheet" />
</head>
<body>
     <!-- Navigation-->
     <nav class="navbar navbar-expand-sm" id="mainNav">
            <h2 class="texto-navbar">
                ESCUELA DE COCINA - <strong>LE CONCASSÉ</strong>
            </h2>
            <h2 class="texto-navbar-mobile text-center">
                ESCUELA DE COCINA <br><div class="sub-texto-navbar text-center">LE CONCASSÉ</div>
            </h2>
            <button class=" ml-auto openbtn" id="abrirMenu" onclick="openNav()">☰</button>  
        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href="../index.php">Volver a Inicio</a>
            <a href="../login.php">Iniciar Sesión</a> 
            <a href="../cursos.php">Cursos Y Pensum</a>
            <a href="../recetas.php">Recetas Paso a Paso</a>
            <a href="../eventos.php">Eventos y noticias</a>
            <a href="#inscrip" data-toggle="modal" data-target="#inscrip">Inscripciones</a>
            <a href="#contacto" data-toggle="modal" data-target="#contacto">Mensajería Directa</a>
            <a href="../newsletter.php">Newsletter</a>    
           
        </div> 
        </nav>
        <a href="../index.php" >
        <img src="../assets/img/favicon.png" class="navbar-logoC" alt="favicon">
        </a>
        <main>
<section id=Noticias">
            <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12">
                <br>
                <h2 class="text-left title"> Noticias</h2>
                <br>
                </div>               
            </div>
            </div>
                    <!-- Display posts from database -->
        <div class="row">
            <?php foreach ($query_news as $q){ ?>
                <div class="col-4 d-flex justify-content-center">
                <div class="card recetas-div">
                <img src=" <?php echo $q['img_url']?>" class="imagen-recetas" alt="...">
                        <div class="card-body">
                        <a href="new.php?id=<?php echo $q['id']?>"> <h5 class="title text-center"><?php echo $q['news_name'];?></h5></a>                   
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
             
               
                
                 
</main>


</body>



        <!-- Modal de Inscripción-->

    <div class="modal fade" id="inscrip" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="true" aria-hidden="true">
             <div class="modal-dialog" role="document">
               <div class="modal-content-2">
                 <div class="modal-header text-center">
                   <h4 class="modal-title w-100 font-weight-bold">Formulario de Inscripción</h4>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                </div>
              <form method="POST" action="mails/inscripcion.php" enctype="multipart/form-data">
                  
                <div class="form-group">
                    <input class="form-control" id="name-i" name="name-i" placeholder="Nombre y Apellido* " required="required" data-validation-required-message="Indique su Nombre y Apellido"></input>
                    <p class="help-block text-danger"></p>
                </div>
                 <div class="form-group ">
                    <input class="form-control" id="email-i" name="email-i" placeholder="Email* " required="required" data-validation-required-message="Indique su Email"></input>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="form-group ">
                    <input class="form-control" id="curso-i" name="curso-i" placeholder="Curso a Tomar* " required="required" data-validation-required-message="Indique Curso a Tomar"></input>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="form-group ">
                    <input class="form-control" id="ubicacion-i" name="ubicacion-i" placeholder="Ubicacion* " required="required" data-validation-required-message="Indique su Ubicación"></input>
                    <p class="help-block text-danger"></p>
                </div>
                 <div class="form-group ">
                    <input class="form-control" id="telefono-i" name="telefono-i" placeholder="Telefono * " required="required" data-validation-required-message="Indique su Teléfono"></input>
                    <p class="help-block text-danger"></p>
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
                    <input class="form-control" id="email-c" name="email-c" placeholder="Escribe tu Email* " required="required" data-validation-required-message="Escriba su correo Electrónico"></input>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                <textarea class="form-control" id="mensaje-c" name="mensaje-c" placeholder="Escribe tu Mensaje*" required="required" data-validation-required-message="Escriba su mensaje" rows="3"  ></textarea>
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

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>
        <!-- Open Side Menu -->
        <script>
            function openNav() {
            document.getElementById("mySidebar").style.width = "270px";
            document.getElementById("abrirMenu").style.marginRight = "270px";
            }

            function closeNav() {
            document.getElementById("mySidebar").style.width = "0px";
            document.getElementById("abrirMenu").style.marginRight= "0px";
            }
        </script>
