<?php

include_once '../conexion.php';

$con = retornarConexion();

//Queries para crear los posts, de recetas nuevas

  // Create a new post Panaderia
  if(isset($_REQUEST['new_post_pan'])){
    $title = $_REQUEST['title_pan'];
    $content = $_REQUEST['content_pan'];
    $ingredients= $_REQUEST['ingredients_pan'];
    $file_name = $_FILES['file_pan']['name'];
    
    $path = './recipes_img/img_panaderia/' .  $_FILES["file_pan"]["name"];
    move_uploaded_file($_FILES["file_pan"]["tmp_name"], $path);
    $new_name_file = $path;

    if($title != '' or $content != '' or $ingredient != '') {

    $sql = "INSERT INTO recetas_panaderia(recipe_name, recipe_descrip, recipe_ingredients,img_url) VALUES('$title', '$content','$ingredients','$new_name_file')";
    mysqli_query($con, $sql);

    if($sql){
    header("Location: panaderia_admin.php?info=added");
    exit();
    
     } else {
      header("Location: panaderia_admin.php?info=error");
      exit();
    }
}
}
  //Create a new post Saladas
      if(isset($_REQUEST['new_post_sal'])){
        $title = $_REQUEST['title_sal'];
        $content = $_REQUEST['content_sal'];
        $ingredients= $_REQUEST['ingredients_sal'];
        $file_name = $_FILES['file_sal']['name'];
    
        $path = './recipes_img/img_saladas/' .  $_FILES["file_sal"]["name"];
        move_uploaded_file($_FILES["file_sal"]["tmp_name"], $path);
        $new_name_file = $path;

        if($title != '' or $content != '' or $ingredient != '') {

        $sql = "INSERT INTO recetas_saladas(recipe_name, recipe_descrip, recipe_ingredients,img_url) VALUES('$title', '$content','$ingredients','$new_name_file')";
        mysqli_query($con, $sql);
        }
        if($sql){
        header("Location:saladas_admin.php?info=added");
        exit();
    
     } else {
      header("Location: saladas_admin.php?info=error");
      exit();
    }
       }
       
   //Create a new post Reposteria
          if(isset($_REQUEST['new_post_rep'])){
            $title = $_REQUEST['title_rep'];
            $content = $_REQUEST['content_rep'];
            $ingredients= $_REQUEST['ingredients_rep'];
            $file_name = $_FILES['file_rep']['name'];
    
            $path = './recipes_img/img_reposteria/' .  $_FILES["file_rep"]["name"];
            move_uploaded_file($_FILES["file_rep"]["tmp_name"], $path);
            $new_name_file = $path;

            if($title != '' or $content != '' or $ingredient != '') {
        
            $sql = "INSERT INTO recetas_reposteria(recipe_name, recipe_descrip, recipe_ingredients,img_url) VALUES('$title', '$content','$ingredients','$new_name_file')";
            mysqli_query($con, $sql);
            }
            if($sql){
            header("Location: reposteria_admin.php?info=added");
            exit();
          
        
         } else {
          header("Location: reposteria_admin.php?info=error");
          exit();
        }
           }



//Queries para mostrar los posts de recetas //

 $sql_pan = "SELECT * FROM recetas_panaderia";
 $query_pan = mysqli_query($con, $sql_pan);
        
    $sql_sal = "SELECT * FROM recetas_saladas";
    $query_sal = mysqli_query($con, $sql_sal);

      $sql_rep = "SELECT * FROM recetas_reposteria";
      $query_rep = mysqli_query($con, $sql_rep);


// Querie para buscar la información mediante el id

    if(isset($_REQUEST['id'])){
      $id = $_REQUEST['id'];
      $sql_pan = "SELECT * FROM recetas_panaderia WHERE id = $id";
      $query_pan = mysqli_query($con, $sql_pan);
  }
        if(isset($_REQUEST['id'])){
          $id = $_REQUEST['id'];
          $sql_rep = "SELECT * FROM recetas_reposteria WHERE id = $id";
          $query_rep = mysqli_query($con, $sql_rep);
      }

          if(isset($_REQUEST['id'])){
            $id = $_REQUEST['id'];
            $sql_sal = "SELECT * FROM recetas_saladas WHERE id = $id";
            $query_sal = mysqli_query($con, $sql_sal);
        }

// Update a post
if(isset($_REQUEST['update_pan'])){

  $id = $_REQUEST['id'];
    
  $sql_1 = mysqli_query($con, "SELECT img_url FROM recetas_panaderia WHERE id = $id");

  if($sql_1){
  $data = mysqli_fetch_array($sql_1);// will return the result
  $url_to_delete = $data['img_url'];
  unlink($url_to_delete);

  }

  $title = $_REQUEST['title_pan'];
  $content = $_REQUEST['content_pan'];
  $ingredient = $_REQUEST['ingredient_pan'];
  $file_name = $_FILES['file_pan']['name'];
    
    $path = './recipes_img/img_panaderia/' .  $_FILES["file_pan"]["name"];
    move_uploaded_file($_FILES["file_pan"]["tmp_name"], $path);
    $new_name_file = $path;

  if($title != '' or $content != '' or $ingredient != '') {

  $sql= " UPDATE recetas_panaderia SET recipe_name ='$title', recipe_descrip ='$content', recipe_ingredients ='$ingredient', img_url = '$new_name_file' WHERE id ='$id'";  
  mysqli_query($con, $sql); 

   if( $sql ){
    header("Location: panaderia_admin.php?info=updated");
    exit();

  } else {
    header("Location: panaderia_admin.php?info=error");
    exit();
  }
  
}
}
    if(isset($_REQUEST['update_rep'])){
   
  $id = $_REQUEST['id'];
    
  $sql_1 = mysqli_query($con, "SELECT img_url FROM recetas_reposteria WHERE id = $id");

  if($sql_1){
  $data = mysqli_fetch_array($sql_1);// will return the result
  $url_to_delete = $data['img_url'];
  unlink($url_to_delete);

  }

  $title = $_REQUEST['title_rep'];
  $content = $_REQUEST['content_rep'];
  $ingredient = $_REQUEST['ingredient_rep'];
  $file_name = $_FILES['file_rep']['name'];
    
    $path = './recipes_img/img_reposteria/' .  $_FILES["file_rep"]["name"];
    move_uploaded_file($_FILES["file_rep"]["tmp_name"], $path);
    $new_name_file = $path;

  if($title != '' or $content != '' or $ingredient != '') {

  $sql= " UPDATE recetas_reposteria SET recipe_name ='$title', recipe_descrip ='$content', recipe_ingredients ='$ingredient', img_url = '$new_name_file' WHERE id ='$id'";  
  mysqli_query($con, $sql); 

   if( $sql ){
    header("Location: reposteria_admin.php?info=updated");
    exit();

  } else {
    header("Location: reposteria_admin.php?info=error");
    exit();
  }
  
}
    }

        if(isset($_REQUEST['update_sal'])){
       
  $id = $_REQUEST['id'];
    
  $sql_1 = mysqli_query($con, "SELECT img_url FROM recetas_saladas WHERE id = $id");

  if($sql_1){
  $data = mysqli_fetch_array($sql_1);// will return the result
  $url_to_delete = $data['img_url'];
  unlink($url_to_delete);

  }

  $title = $_REQUEST['title_sal'];
  $content = $_REQUEST['content_sal'];
  $ingredient = $_REQUEST['ingredient_sal'];
  $file_name = $_FILES['file_sal']['name'];
    
    $path = './recipes_img/img_saladas/' .  $_FILES["file_sal"]["name"];
    move_uploaded_file($_FILES["file_sal"]["tmp_name"], $path);
    $new_name_file = $path;

  if($title != '' or $content != '' or $ingredient != '') {

  $sql= " UPDATE recetas_saladas SET recipe_name ='$title', recipe_descrip ='$content', recipe_ingredients ='$ingredient', img_url = '$new_name_file' WHERE id ='$id'";  
  mysqli_query($con, $sql); 

   if( $sql ){
    header("Location: saladas_admin.php?info=updated");
    exit();

  } else {
    header("Location: saladas_admin.php?info=error");
    exit();
  }
  
}
        }



  // Delete a post
  if(isset($_REQUEST['delete_pan'])){

    $id = $_REQUEST['id'];
    $url = $_REQUEST['img_url'];
    unlink($url);
    $sql = "DELETE FROM recetas_panaderia WHERE id = $id";
    mysqli_query($con, $sql);

    if( $sql ){
      header("Location: panaderia_admin.php?info=deleted");
      exit();
      }
}
      if(isset($_REQUEST['delete_rep'])){

        $id = $_REQUEST['id'];
        $url = $_REQUEST['img_url'];
        unlink($url);
        $sql = "DELETE FROM recetas_reposteria WHERE id = $id";
        mysqli_query($con, $sql);

        if( $sql ){
          header("Location: reposteria_admin.php?info=deleted");
          exit();
          }
      }
          if(isset($_REQUEST['delete_sal'])){

            $id = $_REQUEST['id'];
            $url = $_REQUEST['img_url'];
            unlink($url);
            $sql = "DELETE FROM recetas_saladas WHERE id = $id";
            mysqli_query($con, $sql);

            if( $sql ){
              header("Location: saladas_admin.php?info=deleted");
              exit();
              }
          }




?>
