<?php

include_once 'conexion.php';
$con = retornarConexion();


//Queries para mostrar los posts de eventos //

$sql_events = "SELECT * FROM events ORDER BY id ASC LIMIT 3";
$query_events_main = mysqli_query($con, $sql_events);

//Queries para mostrar los posts de noticias //
$sql_news = "SELECT * FROM news ORDER BY id ASC LIMIT 3";
$query_news_main = mysqli_query($con, $sql_news);
 ?>