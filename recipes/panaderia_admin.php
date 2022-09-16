<?php

include "logic_recipes.php";
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
    $url = "./index.php";
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
<title>Recetas Panadería Admin - Le Concassé</title>
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
        <a href="#inscrip" data-toggle="modal" data-target="#inscrip">Inscripciones</a>
        <a href="#contacto" data-toggle="modal" data-target="#contacto">Mensajería Directa</a>
        <a href="../newsletter.php">Newsletter</a>    
    </div> 
    </nav>
    <a href="../index.php" >
    <img src="../assets/img/favicon.png" class="navbar-logoC" alt="favicon">
    </a>
<main>
<br>
  <!-- Display any info -->
  <?php if(isset($_REQUEST['info'])){ ?>
            <?php if($_REQUEST['info'] == "added"){?>
                <div class="alert alert-success" role="alert">
                    Receta añadida con éxito
                </div>
            <?php }?>
            <?php if($_REQUEST['info'] == "updated"){?>
                <div class="alert alert-success" role="alert">
                    Receta editada con éxito
                </div>
            <?php }?>
            <?php if($_REQUEST['info'] == "error"){?>
                <div class="alert alert-danger" role="alert">
                    No puedes guardar una receta vacia
                </div>
            <?php }?>
            <?php if($_REQUEST['info'] == "deleted"){?>
                <div class="alert alert-success" role="alert">
                    Receta Borrada con exito
                </div>
            <?php }?>
        <?php } ?>

        <!-- Create a new Post button -->
        <div class="text-center">
            <a href="create_panaderia.php" class="btn btn-success">+ Crear una receta nueva de panadería</a>
        </div>

<div class="row">
            <?php foreach($query_pan as $q){ ?>
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                    <div class="card text-white bg-dark mt-5" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $q['recipe_name'];?></h5>
                            <p class="card-text"><?php echo substr($q['recipe_descrip'], 0, 50);?>...</p>
                            <div class="d-flex mt-2 justify-content-center align-items-center">
                            <a href="edit_panaderia.php?id=<?php echo $q['id']?>" class="btn btn-light btn-sm" name="edit">Editar</a>
                            <form method="POST">
                            <input type="text" hidden value='<?php echo $q['id']?>' name="id">
                            <input type="text" hidden value='<?php echo $q['img_url']?>' name="img_url">
                            <button class="btn btn-danger btn-sm ml-2" onclick="return confirm('Estás seguro de borrar esta receta? No habrá manera de recuperarla');" name="delete_pan">Borrar</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>


<br>
</div>

    </div>
    <div class="text-center">
    <a href="../app/nexus.php" class="btn btn-success">Volver al nexo</a>
    </div>
</main>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
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
</body>
</html>