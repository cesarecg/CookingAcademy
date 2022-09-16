<?php

include_once 'conexion.php';
$con = retornarConexion();


//Queries para mostrar los posts de recetas //

$sql_pan = "SELECT * FROM recetas_panaderia ORDER BY id ASC LIMIT 3";
$query_pan_main = mysqli_query($con, $sql_pan);
       
   $sql_sal = "SELECT * FROM recetas_saladas ORDER BY id ASC LIMIT 3";
   $query_sal_main = mysqli_query($con, $sql_sal);

     $sql_rep = "SELECT * FROM recetas_reposteria ORDER BY id ASC LIMIT 3";
     $query_rep_main = mysqli_query($con, $sql_rep);
     
 ?>