<?php

include_once '../conexion.php';

$con = retornarConexion();

//Queries para crear los posts, de Eventos

  // Create a new post event
  if(isset($_REQUEST['new_post_event'])){
    $title = $_REQUEST['title_event'];
    $content = $_REQUEST['content_event'];
    $file_name = $_FILES['file_event']['name'];
    
    $path = './img/img_events/' .  $_FILES["file_event"]["name"];
    move_uploaded_file($_FILES["file_event"]["tmp_name"], $path);
    $new_name_file = $path;

    if($title != '' or $content != '' or $ingredient != '') {

    $sql = "INSERT INTO events(event_name, event_descrip, img_url) VALUES('$title', '$content','$new_name_file')";
    mysqli_query($con, $sql);

    if($sql){
    header("Location: events_admin.php?info=added");
    exit();
    
     } else {
      header("Location: events_admin.php?info=error");
      exit();
    }
}
}
  //Create a new post News
      if(isset($_REQUEST['new_post_new'])){
        $title = $_REQUEST['title_new'];
        $content = $_REQUEST['content_new'];
        $file_name = $_FILES['file_new']['name'];
    
        $path = './img/img_news/' .  $_FILES["file_new"]["name"];
        move_uploaded_file($_FILES["file_new"]["tmp_name"], $path);
        $new_name_file = $path;

        if($title != '' or $content != '' or $ingredient != '') {

        $sql = "INSERT INTO news(news_name, news_descrip,img_url) VALUES('$title', '$content','$new_name_file')";
        mysqli_query($con, $sql);
        }
        if($sql){
        header("Location:news_admin.php?info=added");
        exit();
    
     } else {
      header("Location: news_admin.php?info=error");
      exit();
    }
       }


//Queries para mostrar los posts de eventos y noticias //

 $sql_events = "SELECT * FROM events";
 $query_events = mysqli_query($con, $sql_events);
        
    $sql_news = "SELECT * FROM news";
    $query_news = mysqli_query($con, $sql_news);


// Querie para buscar la información mediante el id

    if(isset($_REQUEST['id'])){
      $id = $_REQUEST['id'];
      $sql_events = "SELECT * FROM events WHERE id = $id";
      $query_events = mysqli_query($con, $sql_events);
  }
        if(isset($_REQUEST['id'])){
          $id = $_REQUEST['id'];
          $sql_news = "SELECT * FROM news WHERE id = $id";
          $query_news = mysqli_query($con, $sql_news);
      }

// Update a post
if(isset($_REQUEST['update_event'])){

  $id = $_REQUEST['id'];
    
  $sql_1 = mysqli_query($con, "SELECT img_url FROM events WHERE id = $id");

  if($sql_1){
  $data = mysqli_fetch_array($sql_1);// will return the result
  $url_to_delete = $data['img_url'];
  unlink($url_to_delete);
  }

  $title = $_REQUEST['title_event'];
  $content = $_REQUEST['content_event'];
  $file_name = $_FILES['file_event']['name'];
    
    $path = './img/img_events/' .  $_FILES["file_event"]["name"];
    move_uploaded_file($_FILES["file_event"]["tmp_name"], $path);
    $new_name_file = $path;

  if($title != '' or $content != '' or $ingredient != '') {

  $sql= " UPDATE events SET event_name ='$title', event_descrip ='$content', img_url = '$new_name_file' WHERE id ='$id'";  
  mysqli_query($con, $sql); 

   if( $sql ){
    header("Location: events_admin.php?info=updated");
    exit();

  } else {
    header("Location: events_admin.php?info=error");
    exit();
  }
  
}
}
    if(isset($_REQUEST['update_news'])){
    
    $id = $_REQUEST['id'];
        
    $sql_1 = mysqli_query($con, "SELECT img_url FROM news WHERE id = $id");

    if($sql_1){
    $data = mysqli_fetch_array($sql_1);// will return the result
    $url_to_delete = $data['img_url'];
    unlink($url_to_delete);
    }

    $title = $_REQUEST['title_new'];
    $content = $_REQUEST['content_new'];
    $file_name = $_FILES['file_new']['name'];
        
    $path = './img/img_news/' .  $_FILES["file_new"]["name"];
    move_uploaded_file($_FILES["file_new"]["tmp_name"], $path);
    $new_name_file = $path;

  if($title != '' or $content != '' or $ingredient != '') {

  $sql= " UPDATE news SET news_name ='$title', news_descrip ='$content', img_url = '$new_name_file' WHERE id ='$id'";  
  mysqli_query($con, $sql); 

   if( $sql ){
    header("Location: news_admin.php?info=updated");
    exit();

  } else {
    header("Location: news_admin.php?info=error");
    exit();
  }
  
}
    }

  // Delete a post events
  if(isset($_REQUEST['delete_event'])){

    $id = $_REQUEST['id'];
    $url = $_REQUEST['img_url'];
    unlink($url);
    $sql = "DELETE FROM events WHERE id = $id";
    mysqli_query($con, $sql);

    if( $sql ){
      header("Location: events_admin.php?info=deleted");
      exit();
      }
}
      if(isset($_REQUEST['delete_news'])){

        $id = $_REQUEST['id'];
        $url = $_REQUEST['img_url'];
        unlink($url);
        $sql = "DELETE FROM news WHERE id = $id";
        mysqli_query($con, $sql);

        if( $sql ){
          header("Location: news_admin.php?info=deleted");
          exit();
          }
      }
       

?>
