<!DOCTYPE html>
<html lang="es">
<?php
include_once '../conexion.php';

session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    $id = $_SESSION["id"];
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
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes" />
  <title>Notas Grupo 5</title>

  <link href="../bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="../datatables/datatables.min.css" rel="stylesheet">
  <link href="../clockpicker/bootstrap-clockpicker.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css"rel="stylesheet">
  <link href="../css/fix-student.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="../assets/images/favicon.png"/>
 
  <script src="../vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
  <script src="../js/jquery-3.4.1.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../bootstrap-4.3.1/js/bootstrap.min.js"></script>
  <script src="../datatables/datatables.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
  <script src="../clockpicker/bootstrap-clockpicker.js"></script>
  <script src='../js/moment-with-locales.js'></script>
  
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 style="text-align:center">Notas Alumno : <?php echo $_SESSION["username"]; ?></h2>
        <input type="hidden" style ="display :none;" id="id" value = <?php echo $_SESSION["id"]; ?> > 
        <table class="table table-striped table-bordered table-hover display nowrap" style="width:100%" id="tabla1">
          <thead>
            <tr>
              <td>ID</td>
              <td>Nombre</td>
              <td>Evaluacion 1</td>
              <td>Evaluacion 2</td>
              <td>Evaluacion 3</td>
              <td>Evaluacion 4</td>   
            </tr>
          </thead>
        </table>
        <hr>
        <div style="text-align:center"><button type="button" id="botonVolver" class="btn btn-success">Retornar al
          Calendario</button>
        </div>

      </div>
    </div>
  </div>


  <script>

    document.addEventListener('DOMContentLoaded', function () {
      $('.clockpicker').clockpicker();

      let student= {
        id :$('#id').val()
      } ;
      let tabla1 = $('#tabla1').DataTable({
            rowReorder: {
            selector: 'td:nth-child(2)'
        },

        responsive: true,
       
        "ajax": {
          type: 'POST',
          url: '../alumnos/datos_alumnospredefinidos4.php?accion=listarStudent',
          dataType: "json",
          data : student,
          

          dataSrc: ""
        },    
        "columns": [{
          "data": "id"
        },
        {
          "data": "username"
        },
        {
          "data": "eva_1"
        },
        {
          "data": "eva_2"
        },
        {
          "data": "eva_3"
        },
        {
          "data": "eva_4"
        },
        ],
        'rowCallback': function (row, data, index) {
          $(row).find('td:eq(1)').css('color', data.colortexto);
          $(row).find('td:eq(1)').css('background-color', data.colorfondo);
        },      
        "language": {
          "url": "../datatables/spanish.json",
        },
      });
      
      $('#tabla1 tbody').on('click', 'button.botonver', function () {        
        let registro1 = tabla1.row($(this).parents('tr')).data();
        studentId = registro1.id;
        $("#FormularioPago").modal();
      
        return studentId;
      });
    
     //Volver a Administracion de Alumnos

     $('#botonVolver').click(function () {
        window.location = "../alumnos/alumnos_predefinidos4.php";
      });
    });
  </script>

</body>

</html>