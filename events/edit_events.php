<?php
    include "logic.php";
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
        $url = "../index.php";
        header("Location: $url");
    }
    if($_SESSION["username"] != "admin"){
      $url = "../index.php";
      header("Location: $url");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Evento- Le Concassé</title>
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
            <a href="../logout.php">Cerrar Sesión</a>
            <a href="../calendarios/calendar_admin.php">Panel</a>
            <a href="../index_validated.php">Volver a Inicio</a>
            <a href="../cursos.php">Cursos Y Pensum</a>
            <a href="../recetas.php">Recetas Paso a Paso</a>
            <a href="../eventos.php">Eventos y noticias</a>
            <a href="../newsletter.php">Newsletter</a>    
         
        </div> 
        </nav>
        <a href="../index.php" >
        <img src="../assets/img/favicon.png" class="navbar-logoC" alt="favicon">
        </a>
    
        <main>
        <h2 class="text-center title" style= "margin-bottom: -10px;"> Editar Evento</h2>
<div class="container mt-5 text-center">
        <?php foreach($query_events as $q){ ?>
            <form enctype="multipart/form-data" method="POST">
            <label for="file">Imagen del evento</label>
            <input type="file" required="required" accept="image/*" id= "file_event" name="file_event">
                <input type="text" hidden value='<?php echo $q['id']?>' name="id">
                <input type="text" placeholder="Titulo del evento" class="form-control my-3 bg-dark text-white text-center" name="title_event" value="<?php echo $q['event_name']?>">
                <textarea name="content_event" class="form-control my-3 bg-dark text-white" cols="30" rows="10"><?php echo $q['event_descrip']?></textarea>
                <button class="btn btn-success" name="update_event">Guardar Cambios</button>
            </form>
            <br>
            <div class="text-center">
            <a href="../app/nexus.php" class="btn btn-success">Volver al nexo</a>
            </div>
        <?php } ?>    
   </div>

</main>



</body>


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
