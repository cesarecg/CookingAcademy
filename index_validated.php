<!-- César Cordero - Le Concasse, 2021 -->
<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "index.php";
    header("Location: $url");
}
if($_SESSION["username"] != "admin"){
    $url = "index.php";
    header("Location: $url");
  }

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes"/>
        <meta name="description" content="Escuela de artes culinarias, dedicada a la capacitación de profesionales en el área de cocina. Empresa en constante crecimiento.
        Contactos e inscripciones al 0412-7049340 (Llamadas, mensajes y WhatsApp) "/>
        <title>Escuela de Cocina - Le Concassé</title>
        <link rel="icon" type="image/x-icon" href="assets/images/favicon.png"/>
        <!-- Core theme CSS (includes Bootstrap)--> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="css/main2.css" rel="stylesheet" />
      
    </head>
    <body id="page-top">
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
            <a href="logout.php">Cerrar Sesión</a>
            <a href="./calendarios/calendar_admin.php">Panel</a>
            <a href="cursos.php">Cursos y Pensum</a>    
            <a href="recetas.php">Recetas Paso a Paso</a>   
            <a href="eventos.php">Eventos y Noticias</a>          
            <a href="#inscrip" data-toggle="modal" data-target="#inscrip">Inscripciones</a>
            <a href="#contacto" data-toggle="modal" data-target="#contacto">Mensajería Directa</a>
            <a href="newsletter.php">Newsletter</a>   
        </div> 
        </nav>
        <!-- Masthead-->
        <a href="index_validated.php" >
        <img src="./assets/img/favicon.png" class="navbar-logoC" alt="favicon">
        </a>
        <header class="masthead">
        </header>
   <br>
   
        

<!--Main-->
<main>
     <!-- Tarjetas de Contenido -->
<section id="tarjetas">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12">
                <div class="row" style="border-bottom: 1px solid grey;">
                    <div class="col" style="max-width: 25%; ">
                    <a href="recetas.php">
                    <h2 class="text-left text-uppercase title-box" >Recetas paso a paso</h2>
                    </a>
                    <p class= "paragraph text-left tablet-paragraph">Nuevas recetas cada semana, desde panadería y pastelería hasta recetas de alta cocina internacional.</p>
                    </div>
             
                    <div class="col" style="max-width:25%; border-right: 1px solid grey;">
                    <img class="box-img" src="assets/images/imgBox1.jpg" alt="Espacio Publicitario">
                    </img>
                     <br>
                    </div>
                   
                    <div class="col" style="max-width: 25%;">   
                    <a href="cursos.php">
                    <h2 class="text-left text-uppercase title-box" >Cursos y pensum</h2>
                    </a>                 
                    <p class= "paragraph text-left tablet-paragraph">Conoce los diferentes cursos y talleres que ofrecemos, así como nuestros planes educativos y contenidos.</p>
                    </div>
                  
                    <div class="col" style="max-width: 25%; ">
                    <img class="box-img" src="assets/images/imgBox2.jpeg" alt="Espacio Publicitario">
                    </img>
                    </div>             
                </div>
                </div>

<br>
<br>
                <div class="col-md-12">
                <div class="row">
                    <div class="col" style="max-width: 25%;">
                    <br>
                    <a href="eventos.php">
                    <h2 class="text-left text-uppercase title-box" >Eventos y Noticias</h2>
                    </a>
                    <p class= "paragraph text-left tablet-paragraph">Entérate de todos los acontecimientos culinarios de la gran Caracas en nuestra sección de noticias.</p>
                    </div>
              
                    <div class="col" style="max-width:25%; border-right: 1px solid grey;">
                    <img class="box-img" src="assets/images/imgBox3.png" alt="Espacio Publicitario">
                    </img>
                    </div>
               
                    <div class="col" style="max-width: 50%;"> 
                    <br>
                   <h2 class="text-left text-uppercase title-box" >Conoce nuestros aliados</h2>
                   <div class="col">
                    <ul class="multi-column">
                        <a target="_blank" href="https://instagram.com/salicornia.ve?utm_medium=copy_link"> <li>SALICORNIA.VE </li></a>
                        <a target="_blank" href="https://instagram.com/ilvecchio.ccs?utm_medium=copy_link"><li>SALSAS IL VECCHIO</li></a>
                        <a target="_blank" href="https://instagram.com/alimentoscasanarito?utm_medium=copy_link"><li>ALIMENTOS CASANARITOS</li></a>
                        <a target="_blank" href="https://instagram.com/decarnespremium?utm_medium=copy_link"><li>DE CARNES PREMIUM</li></a>
                        <a target="_blank" href="https://instagram.com/iberitosvzla?utm_medium=copy_link"><li>IBERITOS</li></a>
                        <a target="_blank" href="https://instagram.com/2tasty_2fit?utm_medium=copy_link"><li>2 TASTY 2 FIT</li></a>
                    </ul>
                 
                                              
                </div>
                </div>
        </div>
        <br>
</section>

<section id="tarjetas-mobile" >
            <div class="container-fluid" >
            <div class="row"  >
                <div class="col-md-12">
                <div class="row" style="max-height: 100px; ">
                    <div class="col">
                    <a href="recetas.php">
                    <h2 class="text-left text-uppercase title-box" >Recetas Paso a paso</h2>
                    </a>
                  <p class="text-left paragraph-tarjetas">Nuevas recetas cada semana, desde panadería y pastelería hasta recetas de alta cocina internacional.</p><br>
                    </div><a href="recetas.php"class="link">Ver más...</a>
                    <div class="col" style="max-width: 33%; padding:0px;">                
                    <img class="imagen-mobile" src="assets/images/imgBox1.jpg" alt="Espacio Publicitario">                 
                    </img>              
                    </div>
            </div><hr>
            
            </div>

            <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="row" style="max-height: 100px;">
                    <div class="col" style="max-width: 33%;margin-left:2.5%; padding:0px;">
                        <img class= "imagen-mobile" src="assets/images/imgBox2.jpeg" alt="Espacio Publicitario">
                        </img>
                    </div>
                    <hr>
                    <div class="col" style="margin-left: -1%;">
                    <a href="cursos.php">
                    <h2 class="text-left text-uppercase title-box">Cursos y Pensum</h2>
                    </a>
                    <p class="text-left paragraph-tarjetas">Conoce los diferentes cursos y talleres que ofrecemos, así como nuestros planes educativos y contenidos.</p><br>
                    </div> <a href="cursos.php"class="link-right">Ver más...</a>
                </div><hr>
                </div>
            </div>
            </div>
            <hr>

            <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="row" style="max-height: 100px;">
                    <div class="col">
                    <a href="eventos.php">
                    <h2 class="text-left text-uppercase title-box" >Eventos y noticias</h2>
                    </a>
                  <p class="text-left paragraph-tarjetas">Entérate de todos los acontecimientos culinarios de la gran Caracas en nuestra sección de noticias.</p><br>
                    </div><a href="eventos.php"class="link">Ver más...</a>
                    <div class="col" style="max-width: 33%; padding:0px;">
                    <img class="imagen-mobile" src="assets/images/imgBox3.png" alt="Espacio Publicitario">
                    </img> 
                    </div>
            </div><hr>
            </div>
            <br>
           
            <div class="row" style="max-width: 100%; margin-left:5px;"> 
         
                   <div class="col">
                   <h2 class="text-left text-uppercase title-box" >Conoce nuestros Aliados</h2>
                    <ul class="multi-column">
                    <a target="_blank" href="https://instagram.com/salicornia.ve?utm_medium=copy_link"> <li>SALICORNIA.VE </li></a>
                        <a target="_blank" href="https://instagram.com/ilvecchio.ccs?utm_medium=copy_link"><li>SALSAS IL VECCHIO</li></a>
                        <a target="_blank" href="https://instagram.com/alimentoscasanarito?utm_medium=copy_link"><li>ALIM. CASANARITOS</li></a>
                        <a target="_blank" href="https://instagram.com/decarnespremium?utm_medium=copy_link"><li>DE CARNES PREMIUM</li></a>
                        <a target="_blank" href="https://instagram.com/iberitosvzla?utm_medium=copy_link"><li>IBERITOS</li></a>
                        <a target="_blank" href="https://instagram.com/2tasty_2fit?utm_medium=copy_link"><li>2 TASTY 2 FIT</li></a>
                    </ul>
                 
                                              
                </div>
                </div>
        
</section>
<hr>


<section id ="mainPage">
<!--Mision-->

 <section id="mision">
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="row">
                    <div class="col" style="display:block; padding:1px; margin-left: 6%; max-width: 66%;">
                    <h2 class="title text-left text-uppercase" >Misión de la Empresa</h2>
                  <p class="text-left paragraph">Crear una escuela de cocina en Caracas en la que podamos formar a cocineros, ayudantes de cocina,
                    panaderos, meseros, pasteleros y otros profesionales del área de la hospitalidad y la restauración, a través de metodologías y recursos didácticos, con un enfoque práctico; tomando como base
                    un firme código ético, a fin de elevar la profesión y el arte del servicio en el territorio nacional, con miras a un panorama global.</p><br>
                    </div>
                    <div class="col" style="max-width: 33%;display:block; margin-right:auto; margin-left:5%;padding:0px;">
                    <div class="comercial text-center"> Espacio publicitario
                    <br>
                    <img class="imagenP" src="assets/images/publicidad1.jpg" alt="Espacio Publicitario">
                    </img>
                    <a target="_blank"href="https://instagram.com/liriospanaderia?utm_medium=copy_link"><p class="subtitle text-center"> Visítalos en Instagram </p></a>
                        </div>
                    </div>
                </div>
                </div>
        </section>

<hr>
        <!--Vision-->
        <section  id="vision">
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="row">
                    <div class="col" style="max-width: 33%; margin-left:auto; margin-right:5%; padding:0px;">
                    <div class="comercial text-center"> Espacio publicitario
                                <br>
                                <img class= "imagenP" src="assets/images/publicidad2.jpg" alt="Espacio Publicitario">
                                </img>
                                <a target="_blank" href="https://instagram.com/decarnespremium?utm_medium=copy_link"><p class="subtitle text-center"> Visítalos en Instagram </p></a>
                            </div>                                   
                    </div>
                    <div class="col" style="display:block; margin-right:7%; padding:1px; max-width:66%; ">
                    <h2 class="text-right text-uppercase title">VISIÓN DE LA EMPRESA</h2>
                    <p class="text-right paragraph"> Creemos que en Venezuela existe la necesidad de potenciar e impulsar la calidad
                  del servicio al cliente y de modernizar el pensamiento que guía la corriente gastronómica en nuestro país. Nos dirige un intenso deseo de crear la mejor experiencia formativa,
                  a la vez que moldeamos el panorama gastronómico para mejor.</p><br>
                    </div>
                    </div>
                </div>
                </div>
        </section>
     
        <hr>
           
        <section id="personal">
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="row">
                    <div class="col" style="max-width: 66%; display:block;padding:1px; margin-left:6%;">
                    <h2 class="text-left text-uppercase title" >Personal Profesional de la Empresa</h2>
                  <p class="text-left paragraph">Siempre nos aseguramos de trabajar con personal altamente calificado,
                      nuestro equipo se compone de docentes certíficados, asistentes capacitados en cada aula, asi como todos aquellos
                      que trabajan con nosotros en áreas como fabricación de uniformes, material digital, material P.O.P, administración y contabilidad,
                      asesoría legal, community management y más.</p><br>
                    </div>
                    <div class="col "style="max-width: 33%;display:block; margin-right:auto; margin-left:5%;padding:0px;">
                    <div class="comercial text-center"> Espacio publicitario
                    <br>
                    <img class="imagenP" src="assets/images/publicidad3.jpg" alt="Espacio Publicitario">
                    </img>
                   <a target="_blank" href="https://instagram.com/alimentoscasanarito?utm_medium=copy_link"> <p class="subtitle text-center"> Visítalos en Instagram </p></a>
                        </div>
                    </div>
                </div>
                </div>
        </section>

      <br>
      <hr>

          <!--Proyectos-->
        <section  id="proyectos">
            <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12">
                <div class="row">
                    <div class="col" style="max-width: 33%; margin-left:auto; margin-right:5%; padding:0px;">
                    <div class="comercial text-center "> Espacio Publicitario
                                <br>
                                <img class= "imagenP" src="assets/images/publicidad4.jpg" alt="Espacio Publicitario">
                                </img>
                           <a target="_blank" href="https://instagram.com/iberitosvzla?utm_medium=copy_link"> <p class="subtitle text-center"> Visítalos en Instagram </p></a>
                            </div>
                    </div>
                    <div class="col" style="display:block; margin-right:7%; padding:1px; max-width:66%;  ">
                    <h2 class="text-right text-uppercase title">PROYECTOS EN LOS QUE ESTAMOS TRABAJANDO</h2>
                            <p class="text-right paragraph">Nuestro proyecto más ambicioso en la actualidad
                                es la expansión de nuestra presencia online,
                                a través de la creación de contenido en redes como Youtube,
                                Instagram, Facebook y Tik Tok, donde nos enfocamos en la producción
                                de videos educativos, sencillos, de fácil acceso y con la mayor calidad,
                                para el disfrute y beneficio del público.</p><br>
                        </div>
                    </div>
                </div>
                </div> <hr>
        </section>
</section>


<section id="mobileMain">

<section id="mision-mobile">
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="row">
                    <div class="col" style="display:block; padding:1px; margin-left: 6%; max-width: 66%;">
                    <h2 class="title text-left text-uppercase" >Misión de la Empresa</h2>
                  <p class="text-left paragraph">Crear una escuela de cocina en Caracas en la que podamos formar a cocineros, ayudantes de cocina,
                    panaderos, meseros, pasteleros y otros profesionales del área de la hospitalidad y la restauración, a través de metodologías y recursos didácticos, con un enfoque práctico; tomando como base
                    un firme código ético, a fin de elevar la profesión y el arte del servicio en el territorio nacional, con miras a un panorama global.</p><br>
                    </div>
                    <div class="col" style="max-width: 33%; margin-right:6%; margin-left:5%;padding:0px;">
                    <div class="comercial text-center"> Espacio publicitario
                    <br>
                    <img class="imagenP" src="assets/images/publicidad1.jpg" alt="Espacio Publicitario">
                    </img>
                    <a target="_blank"href="https://instagram.com/liriospanaderia?utm_medium=copy_link"><p class="subtitle text-center"> Visítalos en Instagram </p></a>
                        </div>
                    </div>
                </div>
                </div>
        </section>

<hr>
        <!--Vision-->
        <section  id="vision-mobile">
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="row">
                    <div class="col" style="max-width: 33%;  margin-right:6%; margin-left:5%; padding:0px;">
                    <div class="comercial text-center"> Espacio publicitario
                                <br>
                                <img class= "imagenP" src="assets/images/publicidad2.jpg" alt="Espacio Publicitario">
                                </img>
                                <a target="_blank" href="https://instagram.com/decarnespremium?utm_medium=copy_link"><p class="subtitle text-center"> Visítalos en Instagram </p></a>
                            </div>                                   
                    </div>
                    <div class="col" style="max-width:66%; margin-right:6%; padding:1px; ">
                    <h2 class="text-right text-uppercase title">VISIÓN DE LA EMPRESA</h2>
                    <p class="text-right paragraph"> Creemos que en Venezuela existe la necesidad de potenciar e impulsar la calidad
                  del servicio al cliente y de modernizar el pensamiento que guía la corriente gastronómica en nuestro país. Nos dirige un intenso deseo de crear la mejor experiencia formativa,
                  a la vez que moldeamos el panorama gastronómico para mejor.</p><br>
                    </div>
                    </div>
                </div>
                </div>
        </section>
     
        <hr>
            
        <section id="personal-mobile">
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="row">
                    <div class="col" style="max-width: 66%; display:block;padding:1px; margin-left:6%;">
                    <h2 class="text-left text-uppercase title" >Personal Profesional de la Empresa</h2>
                  <p class="text-left paragraph">Siempre nos aseguramos de trabajar con personal altamente calificado,
                      nuestro equipo se compone de docentes certíficados, asistentes capacitados en cada aula, asi como todos aquellos
                      que trabajan con nosotros en áreas como fabricación de uniformes, material digital, material P.O.P, administración y contabilidad,
                      asesoría legal, community management y más.</p><br>
                    </div>
                    <div class="col "style="max-width: 33%; margin-right:6%; padding:0px; ">
                    <div class="comercial text-center"> Espacio publicitario
                    <br>
                    <img class="imagenP" src="assets/images/publicidad3.jpg" alt="Espacio Publicitario">
                    </img>
                   <a target="_blank" href="https://instagram.com/alimentoscasanarito?utm_medium=copy_link"> <p class="subtitle text-center"> Visítalos en Instagram </p></a>
                        </div>
                    </div>
                </div>
                </div>
        </section>
     
        <hr>   
          <!--Proyectos-->
        <section  id="proyectos-mobile">
            <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12">
                <div class="row">
                    <div class="col" style="max-width: 33%;  margin-right:6%; margin-left:5%; padding:0px;">
                    <div class="comercial text-center "> Espacio Publicitario
                                <br>
                                <img class= "imagenP" src="assets/images/publicidad4.jpg" alt="Espacio Publicitario">
                                </img>
                           <a target="_blank" href="https://instagram.com/iberitosvzla?utm_medium=copy_link"> <p class="subtitle text-center"> Visítalos en Instagram </p></a>
                            </div>
                    </div>
                    <div class="col" style="max-width: 66%; display:block;padding:1px; margin-right:6%; ">
                    <h2 class="text-right text-uppercase title">PROYECTOS EN LOS QUE ESTAMOS TRABAJANDO</h2>
                            <p class="text-right paragraph">Nuestro proyecto más ambicioso en la actualidad
                                es la expansión de nuestra presencia online,
                                a través de la creación de contenido en redes como Youtube,
                                Instagram, Facebook y Tik Tok, donde nos enfocamos en la producción
                                de videos educativos, sencillos, de fácil acceso y con la mayor calidad,
                                para el disfrute y beneficio del público.</p><br>
                        </div>
                    </div>
                </div>
                </div>
        </section>
</section>

        </main>

        <!-- Modals -->

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
                    <input class="form-control" id="telefono" name="telefono" placeholder="Teléfono * " required="required" data-validation-required-message="Indique su télefono"></input>
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
                   <div class="text-center modal-title"> Envíanos tu currículum </div>
                   <img src="assets/img/pdf.png" class="icon">
                <input type="file" class="text-center" name="resume" id="resume" accept=".pdf"/>

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
 <!-- /Modal de Reclutamiento-->

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
                    <input class="form-control" id="name-i" name="name-i" placeholder="Nombre y apellido* " required="required" data-validation-required-message="Indique su nombre y apellido"></input>
                    <p class="help-block text-danger"></p>
                </div>
                 <div class="form-group ">
                    <input class="form-control" id="email-i" name="email-i" placeholder="Email* " required="required" data-validation-required-message="Indique su email"></input>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="form-group ">
                    <input class="form-control" id="curso-i" name="curso-i" placeholder="Curso a tomar* " required="required" data-validation-required-message="Indique curso a Tomar"></input>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="form-group ">
                    <input class="form-control" id="cedula-i" name="cedula-i" placeholder="Cédula* " required="required" data-validation-required-message="Indique su cédula"></input>
                    <p class="help-block text-danger"></p>
                </div>
                 <div class="form-group ">
                    <input class="form-control" id="phone-i" name="phone-i" placeholder="Teléfono * " required="required" data-validation-required-message="Indique su teléfono"></input>
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

           <!-- Footer-->
         <!-- Footer-->
         <footer id="footerMain">
            <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12">
                <div class="row">
                <div class="col contact-field" style="max-width: 33%;">
                    <h2 class="text-center title-footer">CONTÁCTANOS</h2>
                     <div class="container-fluid text-center">
                        <a target="_blank" href="https://www.youtube.com/channel/UCee1hSA83WLMnSVG5WRNmHQ"><img class="icon-y" src="assets/img/yt.png"></a>
                        <a target="_blank" href="https://www.instagram.com/leconcasse/?hl=es-la"><img class="icon" src="assets/img/ig.png"></a>
                        <a target="_blank" href="https://www.facebook.com/Escuela-de-Artes-Culinarias-Le-Concass%C3%A9-112393556820868"> <img class="icon" src="assets/img/fb.png"></a>
                        <a target="_blank" href="https://vm.tiktok.com/ZSqPXvPL/"> <img class="icon" src="assets/img/tk.png"></a>
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=584127049340&text=&source=&data="><img class="icon" src="assets/img/ws.png"></a>
                      </div>
                    </div>
                    <div class="col" style="max-width: 33%;">
                    <div class="col-sm footer-text text-center">
                        <h2 class="text-center title-footer">ENVÍA TU CV</h2>
                        <button class="btn btn-primary btn-xl btn-footer" data-toggle="modal" data-target="#modalContactForm"> Enviar solicitud </button>
                        </div>
                    </div>
                    <div class="col" style="max-width: 33%;">
                    <div class="col-sm footer-text text-center">
                    <h2 class="text-center title-footer">INSCRIPCIONES</h2>
                    <button class="btn btn-primary btn-xl btn-footer" data-toggle="modal" data-target="#inscrip"> Llenar formulario </button>
                    </div>
                    </div>
                    <hr>
            
                </div>
                </div>
            </div>
</footer>


            <div class="container-fluid" id="bottomFooter">
            <div class="row">
                <div class="col-md-12">
                <div class="row">

                    <div class="col" style="max-width: 50%;">
                   
                    <h2 class="text-center title-footer">ENVÍA TU CV</h2>
                    <button class="btn btn-primary btn-xl btn-footer text-center" data-toggle="modal" data-target="#modalContactForm" id="modalReclutamiento"> Enviar solicitud </button>
                    </div>
    
                    <div class="col" style="max-width: 50%;" >
                    <h2 class="text-center title-footer text-center">INSCRIPCIONES</h2>
                    <button class="btn btn-primary btn-xl btn-footer text-center" data-toggle="modal" data-target="#inscrip" > Llenar formulario </button>
                    </div>
                
                </div>
                </div>
            </div>
            </div>      
      
        <hr class="breaker">
        <div class="row contact-iconsMobile">
                    <div class="container-fluid text-center">
                        <a target="_blank" href="https://www.youtube.com/channel/UCee1hSA83WLMnSVG5WRNmHQ"><img class="icon-y" src="assets/img/yt.png"></a>
                        <a target="_blank" href="https://www.instagram.com/leconcasse/?hl=es-la"><img class="icon" src="assets/img/ig.png"></a>
                        <a target="_blank" href="https://www.facebook.com/Escuela-de-Artes-Culinarias-Le-Concass%C3%A9-112393556820868"> <img class="icon" src="assets/img/fb.png"></a>
                        <a target="_blank" href="https://vm.tiktok.com/ZSqPXvPL/"> <img class="icon" src="assets/img/tk.png"></a>
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=584127049340&text=&source=&data="><img class="icon" src="assets/img/ws.png"></a>
                      </div>
        </div>

            
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
    </body>
</html>
