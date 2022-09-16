<!DOCTYPE html>
<html lang="es">
<?php
include_once '../conexion.php';

session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    $id = $_SESSION["id"];
    $comentario = $_SESSION["comentario"];
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
  <title>Pagos Grupo 6</title>

  <link href="../bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="../datatables/datatables.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css"rel="stylesheet">
  <link href="../clockpicker/bootstrap-clockpicker.css" rel="stylesheet">
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
        <h2 style="text-align:center">Pagos Alumno : <?php echo $_SESSION["username"]; ?></h2>
        <input type="hidden" style ="display :none;" id="id" value = <?php echo $_SESSION["id"]; ?> > 
        <table class="table-striped table-bordered table-hover display nowrap" style="width:100%" id="tabla1">
          <thead>
            <tr>
              <td>ID</td>
              <td>Inscripcion</td>
              <td>Uniforme</td>
              <td>Libro</td>
              <td>Graduacion</td>
              <td>Cuota1</td>
              <td>Cuota2</td>
              <td>Cuota3</td>
              <td>Cuota4</td>     
              <td>5</td>
              <td>6</td>
              <td>7</td>
              <td>8</td>  
            </tr>
          </thead>
        </table>
        <hr>
        <div style="text-align:center"><button type="button" id="botonVolver" class="btn btn-success">Retornar a
          Alumnos</button>
        </div>

      </div>
    </div>
  </div>

 <!-- Formulario para Crear Comentario de Pago Inscripcion -->
 <div class="modal fade" id="FormularioComentario" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center"> Comentario de Pago Inscipcion
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
        <div class="form-row">
            <label>Comentario :</label>
              <div class="input-group" data-autoclose="true">
              <textarea form= "comentarioi" class="form-control" id="comentarioi" readonly="readonly" name="comentarioi" required="required" rows="3" placeholder="Sin Comentarios"></textarea>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="FormularioComentarioUni" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center"> Comentario de Pago Uniforme
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
        <div class="form-row">
            <label>Comentario :</label>
              <div class="input-group" data-autoclose="true">
              <textarea form= "comentariou" class="form-control" id="comentariou" readonly="readonly" name="comentariou" required="required" rows="3" placeholder="Sin Comentarios"></textarea>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="FormularioComentarioBook" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center"> Comentario de Pago Libro
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
        <div class="form-row">
            <label>Comentario :</label>
              <div class="input-group" data-autoclose="true">
              <textarea form= "comentariol" class="form-control" id="comentariol" readonly="readonly" name="comentariol" required="required" rows="3" placeholder="Sin Comentarios"></textarea>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="FormularioComentarioGrad" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center"> Comentario de Pago Graduación
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
        <div class="form-row">
            <label>Comentario :</label>
              <div class="input-group" data-autoclose="true">
              <textarea form= "comentariog" class="form-control" id="comentariog" readonly="readonly" name="comentariog" required="required" rows="3" placeholder="Sin Comentarios"></textarea>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>

<!-- Formulario para Crear Comentario de Pago Cuota 1 -->
<div class="modal fade" id="FormularioCuota1" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center"> Comentario de Cuota 1
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
        <div class="form-row">
            <label>Comentario :</label>
              <div class="input-group" data-autoclose="true">
              <textarea form= "comentario1" class="form-control" readonly="readonly" id="comentario1" name="comentario1" required="required" rows="3" placeholder="Sin Comentarios"></textarea>
              </div>
            </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Formulario para Crear Comentario de Pago Cuota 2 -->
<div class="modal fade" id="FormularioCuota2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center"> Comentario de Cuota 2
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
        <div class="form-row">
            <label>Comentario :</label>
              <div class="input-group" data-autoclose="true">
              <textarea form= "comentario2" class="form-control"  readonly="readonly" id="comentario2" name="comentario2" required="required" rows="3" placeholder="Sin Comentarios"></textarea>
              </div>
            </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>

  
  <!-- Formulario para Crear Comentario de Pago Cuota 3 -->
<div class="modal fade" id="FormularioCuota3" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center"> Comentario de Cuota 3
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
        <div class="form-row">
            <label>Comentario :</label>
              <div class="input-group" data-autoclose="true">
              <textarea form= "comentario3" class="form-control" readonly="readonly" id="comentario3" name="comentario3" required="required" rows="3" placeholder="Sin Comentarios"></textarea>
              </div>
            </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>

  
  <!-- Formulario para Crear Comentario de Pago Cuota 4 -->
<div class="modal fade" id="FormularioCuota4" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center"> Comentario de Cuota 4
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
        <div class="form-row">
            <label>Comentario :</label>
              <div class="input-group" data-autoclose="true">
              <textarea form= "comentario4" class="form-control" id="comentario4" readonly="readonly" name="comentario4" required="required" rows="3" placeholder="Sin Comentarios"></textarea>
              </div>
            </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
    <!-- Formulario para Crear Comentario de Pago Cuota 5 -->
<div class="modal fade" id="FormularioCuota5" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center"> Comentario de Cuota 5
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
        <div class="form-row">
            <label>Comentario :</label>
              <div class="input-group" data-autoclose="true">
              <textarea form= "comentario5" class="form-control" id="comentario5" readonly="readonly" name="comentario5" required="required" rows="3" placeholder="Sin Comentarios"></textarea>
              </div>
            </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
      <!-- Formulario para Crear Comentario de Pago Cuota 6 -->
<div class="modal fade" id="FormularioCuota6" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center"> Comentario de Cuota 6
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
        <div class="form-row">
            <label>Comentario :</label>
              <div class="input-group" data-autoclose="true">
              <textarea form= "comentario6" class="form-control" id="comentario6" readonly="readonly" name="comentario6" required="required" rows="3" placeholder="Sin Comentarios"></textarea>
              </div>
            </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
        <!-- Formulario para Crear Comentario de Pago Cuota 7 -->
<div class="modal fade" id="FormularioCuota7" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center"> Comentario de Cuota 7
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
        <div class="form-row">
            <label>Comentario :</label>
              <div class="input-group" data-autoclose="true">
              <textarea form= "comentario7" class="form-control" id="comentario7" readonly="readonly" name="comentario7" required="required" rows="3" placeholder="Sin Comentarios"></textarea>
              </div>
            </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>

      <!-- Formulario para Crear Comentario de Pago Cuota 8 -->
      <div class="modal fade" id="FormularioCuota8" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center"> Comentario de Cuota 8
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
        <div class="form-row">
            <label>Comentario :</label>
              <div class="input-group" data-autoclose="true">
              <textarea form= "comentario8" class="form-control" id="comentario8" readonly="readonly" name="comentario8" required="required" rows="3" placeholder="Sin Comentarios"></textarea>
              </div>
            </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="Aviso" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center"> AVISO
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
        <div class="form-row">
            <label>Aviso :</label>
              <div class="input-group" data-autoclose="true">
              <textarea form= "comentario4" class="form-control"  readonly="readonly" placeholder="Tienes un comentario en alguno de los pagos, haz click en el pago que tenga un signo de exclamación, gracias."></textarea>
              </div>
            </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
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
          url: '../alumnos/datos_alumnospredefinidos5.php?accion=listarPagosStudent',
          dataType: "json",
          data : student,
          dataSrc: ""
        },    
        "columns": [{
          "data": "id"
        },
        {
           "data": function (data, type, dataToSet){
               //reverse that fucking date
            var date = data.fechaIns;
            
            var newDate = date.split("-").reverse().join("-");
            if (newDate == "00-00-0000"){
              newDate= "";
            } 
             if(data.comentario || data.comentario1 ||
                data.comentario2 || data.comentario3 ||
                data.comentario4 !==""){
              $("#Aviso").modal();
             }
             if( data.comentario !=="") {
              return data.inscripcion + "<b> ! </b>" + "<br/>" + newDate;
             } else {
             return data.inscripcion + "<br/>" + newDate;
             }
           },"className" : "Inscripcion"
        },
        {
          "data": function (data, type, dataToSet){
              //reverse that fucking date
            var date = data.fechaUni;
            var newDate = date.split("-").reverse().join("-");
            if (newDate == "00-00-0000"){
              newDate= "";
            } 
             if( data.comentario5 !=="") {
              return data.uniforme + "<b> ! </b>" + "<br/>" + newDate;
             } else {
             return data.uniforme + "<br/>" + newDate;
             }
           },"className" : "Uniforme"
        },
        {
          "data": function (data, type, dataToSet){
              //reverse that fucking date
            var date = data.fechaBook;
            var newDate = date.split("-").reverse().join("-");
            if (newDate == "00-00-0000"){
              newDate= "";
            } 
             if( data.comentario6 !=="") {
              return data.libro + "<b> ! </b>" + "<br/>" + newDate;
             } else {
             return data.libro + "<br/>" + newDate;
             }
           },"className" : "Libro"
        },
        {
          "data": function (data, type, dataToSet){
              //reverse that fucking date
            var date = data.fechaGrad;
            var newDate = date.split("-").reverse().join("-");
            if (newDate == "00-00-0000"){
              newDate= "";
            } 
             if( data.comentario7 !=="") {
              return data.graduacion + "<b> ! </b>" + "<br/>" + newDate;
             } else {
             return data.graduacion + "<br/>" + newDate;
             }
           },"className" : "Graduacion"
        },
        
        {
          "data": function (data, type, dataToSet){
              //reverse that fucking date
            var date = data.fecha1;
            var newDate = date.split("-").reverse().join("-");
            if (newDate == "00-00-0000"){
              newDate= "";
            } 
             if( data.comentario1 !=="") {
              return data.cuota_1 + "<b> ! </b>" + "<br/>" + newDate;
             } else {
             return data.cuota_1 + "<br/>" + newDate;
             }
           },"className" : "Cuota_1"
        },
        {
          "data": function (data, type, dataToSet){
              //reverse that fucking date
            var date = data.fecha2;
            var newDate = date.split("-").reverse().join("-");
            if (newDate == "00-00-0000"){
              newDate= "";
            } 
             if( data.comentario2 !=="") {
              return data.cuota_2 + "<b> ! </b>" + "<br/>" + newDate;
             } else {
             return data.cuota_2 + "<br/>" + newDate;
             }
           },"className" : "Cuota_2"
        },
        {
          "data": function (data, type, dataToSet){
            //reverse that fucking date
            var date = data.fecha3;
            var newDate = date.split("-").reverse().join("-");
            if (newDate == "00-00-0000"){
              newDate= "";
            } 
             if( data.comentario3 !=="") {
              return data.cuota_3 + "<b> ! </b>" + "<br/>" + newDate;
             } else {
             return data.cuota_3 + "<br/>" + newDate;
             }
           },"className" : "Cuota_3"
        },
        {
          "data": function (data, type, dataToSet){
              //reverse that fucking date
            var date = data.fecha4;
            var newDate = date.split("-").reverse().join("-");
            if (newDate == "00-00-0000"){
              newDate= "";
            } 
             if( data.comentario4 !=="") {
              return data.cuota_4 + "<b> ! </b>" + "<br/>" + newDate;
             } else {
             return data.cuota_4 + "<br/>" + newDate;
             }
           },"className" : "Cuota_4"
        },
        {
          "data": function (data, type, dataToSet){
              //reverse that fucking date
            var date = data.fecha5;
            var newDate = date.split("-").reverse().join("-");
            if (newDate == "00-00-0000"){
              newDate= "";
            } 
             if( data.comentario8 !=="") {
              return data.cuota_5 + "<b> ! </b>" + "<br/>" + newDate;
             } else {
             return data.cuota_5 + "<br/>" + newDate;
             }
           },"className" : "Cuota_5"
        },
        {
          "data": function (data, type, dataToSet){
              //reverse that fucking date
            var date = data.fecha6;
            var newDate = date.split("-").reverse().join("-");
            if (newDate == "00-00-0000"){
              newDate= "";
            } 
             if( data.comentario9 !=="") {
              return data.cuota_6 + "<b> ! </b>" + "<br/>" + newDate;
             } else {
             return data.cuota_6 + "<br/>" + newDate;
             }
           },"className" : "Cuota_6"
        },
        {
          "data": function (data, type, dataToSet){
              //reverse that fucking date
            var date = data.fecha7;
            var newDate = date.split("-").reverse().join("-");
            if (newDate == "00-00-0000"){
              newDate= "";
            } 
             if( data.comentario10 !=="") {
              return data.cuota_7 + "<b> ! </b>" + "<br/>" + newDate;
             } else {
             return data.cuota_7 + "<br/>" + newDate;
             }
           },"className" : "Cuota_7"
        },
        {
          "data": function (data, type, dataToSet){
              //reverse that fucking date
            var date = data.fecha8;
            var newDate = date.split("-").reverse().join("-");
            if (newDate == "00-00-0000"){
              newDate= "";
            } 
             if( data.comentario11 !=="") {
              return data.cuota_8 + "<b> ! </b>" + "<br/>" + newDate;
             } else {
             return data.cuota_8 + "<br/>" + newDate;
             }
           },"className" : "Cuota_8"
        }
        
        ],
               'rowCallback': function (row, data, index) {
          if (data.inscripcion == "PENDIENTE") {
           $(row).find('td:eq(1)').css('background-color', data.colorfondo3);
           }else if (data.inscripcion == "ABONADO") {
            $(row).find('td:eq(1)').css('background-color', data.colorfondo1);
             }else if (data.inscripcion == "ATRASADO") {
              $(row).find('td:eq(1)').css('background-color', data.colorfondo2);
               } else if (data.inscripcion == "PAGADO") {
                $(row).find('td:eq(1)').css('background-color', data.colorfondo);
                 } else if (data.inscripcion == "") {
                  $(row).find('td:eq(1)').css('background-color', data.colorfondo3);
                 }
          if (data.uniforme == "PENDIENTE") {
           $(row).find('td:eq(2)').css('background-color', data.colorfondo3);
           }else if (data.uniforme == "ABONADO") {
            $(row).find('td:eq(2)').css('background-color', data.colorfondo1);
             }else if (data.uniforme == "ATRASADO") {
              $(row).find('td:eq(2)').css('background-color', data.colorfondo2);
               } else if (data.uniforme == "PAGADO") {
                $(row).find('td:eq(2)').css('background-color', data.colorfondo);
                 } else if (data.uniforme == "") {
                  $(row).find('td:eq(2)').css('background-color', data.colorfondo3);
                 }
            if (data.libro == "PENDIENTE") {
              $(row).find('td:eq(3)').css('background-color', data.colorfondo3);
               } else if (data.libro == "ABONADO") {
                $(row).find('td:eq(3)').css('background-color', data.colorfondo1);
                 }else if (data.libro == "ATRASADO") {
                  $(row).find('td:eq(3)').css('background-color', data.colorfondo2);
                   } else if (data.libro == "PAGADO") {
                    $(row).find('td:eq(3)').css('background-color', data.colorfondo);
                   } else if (data.libro == "") {
                    $(row).find('td:eq(3)').css('background-color', data.colorfondo3);
                }
             if (data.graduacion == "PENDIENTE") {
              $(row).find('td:eq(4)').css('background-color', data.colorfondo3);
               } else if (data.graduacion == "ABONADO") {
                $(row).find('td:eq(4)').css('background-color', data.colorfondo1);
                 }else if (data.graduacion == "ATRASADO") {
                  $(row).find('td:eq(4)').css('background-color', data.colorfondo2);
                   } else if (data.graduacion == "PAGADO") {
                    $(row).find('td:eq(4)').css('background-color', data.colorfondo);
                   } else if (data.graduacion == "") {
                    $(row).find('td:eq(4)').css('background-color', data.colorfondo3);
                }
            
            if (data.cuota_1 == "PENDIENTE") {
              $(row).find('td:eq(5)').css('background-color', data.colorfondo3);
               } else if (data.cuota_1 == "ABONADO") {
                $(row).find('td:eq(5)').css('background-color', data.colorfondo1);
                 }else if (data.cuota_1 == "ATRASADO") {
                  $(row).find('td:eq(5)').css('background-color', data.colorfondo2);
                   } else if (data.cuota_1 == "PAGADO") {
                    $(row).find('td:eq(5)').css('background-color', data.colorfondo);
                   } else if (data.cuota_1 == "") {
                    $(row).find('td:eq(5)').css('background-color', data.colorfondo3);
                }
            if (data.cuota_2 == "PENDIENTE") {
              $(row).find('td:eq(6)').css('background-color', data.colorfondo3);
               } else if (data.cuota_2 == "ABONADO") {
                $(row).find('td:eq(6)').css('background-color', data.colorfondo1);
                 }else if (data.cuota_2 == "ATRASADO") {
                  $(row).find('td:eq(6)').css('background-color', data.colorfondo2);
                   } else if (data.cuota_2 == "PAGADO") {
                    $(row).find('td:eq(6)').css('background-color', data.colorfondo);
                   } else if (data.cuota_2 == "") {
                    $(row).find('td:eq(6)').css('background-color', data.colorfondo3);
                }
             if (data.cuota_3 == "PENDIENTE") {
              $(row).find('td:eq(7)').css('background-color', data.colorfondo3);
               } else if (data.cuota_3 == "ABONADO") {
                $(row).find('td:eq(7)').css('background-color', data.colorfondo1);
                 }else if (data.cuota_3 == "ATRASADO") {
                  $(row).find('td:eq(7)').css('background-color', data.colorfondo2);
                   } else if (data.cuota_3 == "PAGADO") {
                    $(row).find('td:eq(7)').css('background-color', data.colorfondo);
                   } else if (data.cuota_3 == "") {
                    $(row).find('td:eq(7)').css('background-color', data.colorfondo3);
                }
            if (data.cuota_4 == "PENDIENTE") {
              $(row).find('td:eq(8)').css('background-color', data.colorfondo3);
               } else if (data.cuota_4 == "ABONADO") {
                $(row).find('td:eq(8)').css('background-color', data.colorfondo1);
                 }else if (data.cuota_4 == "ATRASADO") {
                  $(row).find('td:eq(8)').css('background-color', data.colorfondo2);
                   } else if (data.cuota_4 == "PAGADO") {
                    $(row).find('td:eq(8)').css('background-color', data.colorfondo);
                   } else if (data.cuota_4 == "") {
                    $(row).find('td:eq(8)').css('background-color', data.colorfondo3);
                }
                if (data.cuota_5 == "PENDIENTE") {
              $(row).find('td:eq(9)').css('background-color', data.colorfondo3);
               } else if (data.cuota_5 == "ABONADO") {
                $(row).find('td:eq(9)').css('background-color', data.colorfondo1);
                 }else if (data.cuota_5 == "ATRASADO") {
                  $(row).find('td:eq(9)').css('background-color', data.colorfondo2);
                   } else if (data.cuota_5 == "PAGADO") {
                    $(row).find('td:eq(9)').css('background-color', data.colorfondo);
                   } else if (data.cuota_5 == "") {
                    $(row).find('td:eq(9)').css('background-color', data.colorfondo3);
                }
                if (data.cuota_6 == "PENDIENTE") {
              $(row).find('td:eq(10)').css('background-color', data.colorfondo3);
               } else if (data.cuota_6 == "ABONADO") {
                $(row).find('td:eq(10)').css('background-color', data.colorfondo1);
                 }else if (data.cuota_6 == "ATRASADO") {
                  $(row).find('td:eq(10)').css('background-color', data.colorfondo2);
                   } else if (data.cuota_6 == "PAGADO") {
                    $(row).find('td:eq(10)').css('background-color', data.colorfondo);
                   } else if (data.cuota_6 == "") {
                    $(row).find('td:eq(10)').css('background-color', data.colorfondo3);
                }
                if (data.cuota_7 == "PENDIENTE") {
              $(row).find('td:eq(11)').css('background-color', data.colorfondo3);
               } else if (data.cuota_7 == "ABONADO") {
                $(row).find('td:eq(11)').css('background-color', data.colorfondo1);
                 }else if (data.cuota_7 == "ATRASADO") {
                  $(row).find('td:eq(11)').css('background-color', data.colorfondo2);
                   } else if (data.cuota_7 == "PAGADO") {
                    $(row).find('td:eq(11)').css('background-color', data.colorfondo);
                   } else if (data.cuota_7 == "") {
                    $(row).find('td:eq(11)').css('background-color', data.colorfondo3);
                }
                if (data.cuota_8 == "PENDIENTE") {
              $(row).find('td:eq(12)').css('background-color', data.colorfondo3);
               } else if (data.cuota_8 == "ABONADO") {
                $(row).find('td:eq(12)').css('background-color', data.colorfondo1);
                 }else if (data.cuota_8 == "ATRASADO") {
                  $(row).find('td:eq(12)').css('background-color', data.colorfondo2);
                   } else if (data.cuota_8 == "PAGADO") {
                    $(row).find('td:eq(12)').css('background-color', data.colorfondo);
                   } else if (data.cuota_8 == "") {
                    $(row).find('td:eq(12)').css('background-color', data.colorfondo3);
                }
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
      
       //Funcion para abrir Modals de Comentarios nuevos

          //Inscripción
          //Funcion Básica
          $('#tabla1 tbody').on('click', '.Inscripcion', function() { 
        var closestRow = $(this).closest('td');
          let registro = tabla1.row( $(this).parents(closestRow)).data();
        comentarioId = registro.id;
        limpiarComentarioIns();
        buscarComentarioIns(registro);
        $("#FormularioComentario").modal();
       
        return comentarioId;
        });

          //Función Responsive
      $('#tabla1').on( 'click', 'tbody ul.dtr-details .Inscripcion', function() { 

        var parentRow = $(this).closest("tr").prev()[0];
          var registro = tabla1.row( parentRow ).data();
          comentarioId = registro.id;
          limpiarComentarioIns();
          buscarComentarioIns(registro);
          $("#FormularioComentario").modal();
        
        return comentarioId;
        });

            //Uniforme
            //Funcion Básica
          $('#tabla1 tbody').on('click', '.Uniforme', function() { 
        var closestRow = $(this).closest('td');
        let registro = tabla1.row( $(this).parents(closestRow)).data();
        comentarioId = registro.id;
        limpiarComentarioUni();
        buscarComentarioUni(registro);
        $("#FormularioComentarioUni").modal(); 
        return comentarioId;
        });

          //Función Responsive
      $('#tabla1').on( 'click', 'tbody ul.dtr-details .Uniforme', function() { 
        var parentRow = $(this).closest("tr").prev()[0];
          var registro = tabla1.row( parentRow ).data();
          comentarioId = registro.id;
          limpiarComentarioUni();
          buscarComentarioUni(registro);
          $("#FormularioComentarioUni").modal();        
        return comentarioId;
        });

        //Libro
        //Funcion Básica
        $('#tabla1 tbody').on('click', '.Libro', function() { 
        var closestRow = $(this).closest('td');
        let registro = tabla1.row( $(this).parents(closestRow)).data();
        comentarioId = registro.id;
        limpiarComentarioBook();
        buscarComentarioBook(registro);
        $("#FormularioComentarioBook").modal(); 
        return comentarioId;
        });

          //Función Responsive
      $('#tabla1').on( 'click', 'tbody ul.dtr-details .Libro', function() { 
        var parentRow = $(this).closest("tr").prev()[0];
          var registro = tabla1.row( parentRow ).data();
          comentarioId = registro.id;
          limpiarComentarioBook();
          buscarComentarioBook(registro);
          $("#FormularioComentarioBook").modal();        
        return comentarioId;
        });

        //Graduación

        //Funcion Básica
        $('#tabla1 tbody').on('click', '.Graduacion', function() { 
        var closestRow = $(this).closest('td');
        let registro = tabla1.row( $(this).parents(closestRow)).data();
        comentarioId = registro.id;
        limpiarComentarioGrad();
        buscarComentarioGrad(registro);
        $("#FormularioComentarioGrad").modal(); 
        return comentarioId;
        });
        //Función Responsive
      $('#tabla1').on( 'click', 'tbody ul.dtr-details .Graduacion', function() { 
        var parentRow = $(this).closest("tr").prev()[0];
          var registro = tabla1.row( parentRow ).data();
          comentarioId = registro.id;
          limpiarComentarioGrad();
          buscarComentarioGrad(registro);
          $("#FormularioComentarioGrad").modal();        
        return comentarioId;
        });
        //Funcion Básica
       $('#tabla1 tbody').on('click', '.Cuota_1', function() { 
        var closestRow = $(this).closest('td');
          let registro = tabla1.row( $(this).parents(closestRow)).data();
        comentarioId = registro.id;
        limpiarComentario1();
        buscarComentario1(registro);
        $("#FormularioCuota1").modal();
        return comentarioId;
        });

        //Funcion Responsive
      $('#tabla1 ').on('click','tbody ul.dtr-details .Cuota_1', function() { 
        var parentRow = $(this).closest("tr").prev()[0];
          var registro = tabla1.row( parentRow ).data();
        comentarioId = registro.id;
        limpiarComentario1();
        buscarComentario1(registro);
        $("#FormularioCuota1").modal();
        
        return comentarioId;
        });

        //Funcion Básica
      $('#tabla1 tbody').on('click', '.Cuota_2', function() { 
        var closestRow = $(this).closest('td');
          let registro = tabla1.row( $(this).parents(closestRow)).data();
        comentarioId = registro.id;
        limpiarComentario2();
        buscarComentario2(registro);
        $("#FormularioCuota2").modal();
       
        return comentarioId;
        });

        //Función Responsive
        $('#tabla1 ').on('click','tbody ul.dtr-details .Cuota_2', function() { 
        var parentRow = $(this).closest("tr").prev()[0];
          var registro = tabla1.row( parentRow ).data();
        comentarioId = registro.id;
        limpiarComentario2();
        buscarComentario2(registro);
        $("#FormularioCuota2").modal();
        
        return comentarioId;
        });
        //Funcion Básica
      $('#tabla1 tbody').on('click', '.Cuota_3', function() { 
        var closestRow = $(this).closest('td');
          let registro = tabla1.row( $(this).parents(closestRow)).data();
        comentarioId = registro.id;
        limpiarComentario3();
        buscarComentario3(registro);
        $("#FormularioCuota3").modal();
       
        return comentarioId;
        });
            //Función Responsive
        $('#tabla1 ').on('click','tbody ul.dtr-details .Cuota_3', function() { 
        var parentRow = $(this).closest("tr").prev()[0];
        var registro = tabla1.row( parentRow ).data();
        comentarioId = registro.id;
        limpiarComentario3();
        buscarComentario3(registro);
        $("#FormularioCuota3").modal();
        
        return comentarioId;
        });


            //Funcion Básica
      $('#tabla1 tbody').on('click', '.Cuota_4', function() { 
        var closestRow = $(this).closest('tr');
          let registro = tabla1.row( $(this).parents(closestRow)).data();
        comentarioId = registro.id;
        limpiarComentario4();
        buscarComentario4(registro);
        $("#FormularioCuota4").modal();
     
        return comentarioId;
        });
          //Función Responsive
          $('#tabla1 ').on('click','tbody ul.dtr-details .Cuota_4', function() { 
        var parentRow = $(this).closest("tr").prev()[0];
          var registro = tabla1.row( parentRow ).data();
        comentarioId = registro.id;
        limpiarComentario4();
        buscarComentario4(registro);
        $("#FormularioCuota4").modal();
        
        return comentarioId;
        });

        //Funcion Básica
        $('#tabla1 tbody').on('click', '.Cuota_5', function() { 
        var closestRow = $(this).closest('tr');
          let registro = tabla1.row( $(this).parents(closestRow)).data();
        comentarioId = registro.id;
        limpiarComentario5();
        buscarComentario5(registro);
        $("#FormularioCuota5").modal();
     
        return comentarioId;
        });
          //Función Responsive
          $('#tabla1 ').on('click','tbody ul.dtr-details .Cuota_5', function() { 
        var parentRow = $(this).closest("tr").prev()[0];
          var registro = tabla1.row( parentRow ).data();
        comentarioId = registro.id;
        limpiarComentario5();
        buscarComentario5(registro);
        $("#FormularioCuota5").modal();
        
        return comentarioId;
        });

            //Funcion Básica
        $('#tabla1 tbody').on('click', '.Cuota_6', function() { 
        var closestRow = $(this).closest('tr');
        let registro = tabla1.row( $(this).parents(closestRow)).data();
        comentarioId = registro.id;
        limpiarComentario6();
        buscarComentario6(registro);
        $("#FormularioCuota6").modal();
     
        return comentarioId;
        });
        //Función Responsive
        $('#tabla1 ').on('click','tbody ul.dtr-details .Cuota_6', function() { 
        var parentRow = $(this).closest("tr").prev()[0];
        var registro = tabla1.row( parentRow ).data();
        comentarioId = registro.id;
        limpiarComentario6();
        buscarComentario6(registro);
        $("#FormularioCuota6").modal();
        
        return comentarioId;
        });
        
        //Funcion Básica
        $('#tabla1 tbody').on('click', '.Cuota_7', function() { 
        var closestRow = $(this).closest('tr');
        let registro = tabla1.row( $(this).parents(closestRow)).data();
        comentarioId = registro.id;
        limpiarComentario7();
        buscarComentario7(registro);
        $("#FormularioCuota7").modal();
     
        return comentarioId;
        });
          //Función Responsive
          $('#tabla1 ').on('click','tbody ul.dtr-details .Cuota_7', function() { 
        var parentRow = $(this).closest("tr").prev()[0];
          var registro = tabla1.row( parentRow ).data();
        comentarioId = registro.id;
        limpiarComentario7();
        buscarComentario7(registro);
        $("#FormularioCuota7").modal();
        
        return comentarioId;
        }); 
        
        //Funcion Básica
        $('#tabla1 tbody').on('click', '.Cuota_8', function() { 
        var closestRow = $(this).closest('tr');
        let registro = tabla1.row( $(this).parents(closestRow)).data();
        comentarioId = registro.id;
        limpiarComentario8();
        buscarComentario8(registro);
        $("#FormularioCuota8").modal();
     
        return comentarioId;
        });
        //Función Responsive
        $('#tabla1 ').on('click','tbody ul.dtr-details .Cuota_8', function() { 
        var parentRow = $(this).closest("tr").prev()[0];
        var registro = tabla1.row( parentRow ).data();
        comentarioId = registro.id;
        limpiarComentario8();
        buscarComentario8(registro);
        $("#FormularioCuota8").modal();
        
        return comentarioId;
        });  


        function buscarPago(registro){
        $.ajax({
          type: 'POST',
          url: '../alumnos/datos_alumnospredefinidos5.php?accion=buscarPago',
          dataType: "json",
          data: registro,
          success: function(response){
            $('#inscripcion').val(response[0].inscripcion);
            $('#uniforme').val(response[0].uniforme);
            $('#libro').val(response[0].libro);
            $('#graduacion').val(response[0].graduacion);
            $('#cuota_1').val(response[0].cuota_1);
            $('#cuota_2').val(response[0].cuota_2);
            $('#cuota_3').val(response[0].cuota_3);
            $('#cuota_4').val(response[0].cuota_4);
            $('#cuota_5').val(response[0].cuota_5);
            $('#cuota_6').val(response[0].cuota_6);
            $('#cuota_7').val(response[0].cuota_7);
            $('#cuota_8').val(response[0].cuota_8);
            $('#fechaIns').val(response[0].fechaIns);
            $('#fechaUni').val(response[0].fechaUni);
            $('#fechaBook').val(response[0].fechaBook);
            $('#fechaGrad').val(response[0].fechaGrad);
            $('#fecha1').val(response[0].fecha1);
            $('#fecha2').val(response[0].fecha2);
            $('#fecha3').val(response[0].fecha3);
            $('#fecha4').val(response[0].fecha4);
            $('#fecha5').val(response[0].fecha5);
            $('#fecha6').val(response[0].fecha6);
            $('#fecha7').val(response[0].fecha7);
            $('#fecha8').val(response[0].fecha8);
            
          }
        }); 
        
   }

//Funciones de Comentarios


function buscarComentarioIns(registro) {
        let registroEditable = Object.assign(registro, {id: comentarioId});
        $.ajax({
          type: 'POST',
          url: '../alumnos/datos_alumnospredefinidos5.php?accion=buscarComentario',
          dataType: "json",
          data: registro,
          success: function(response){
            $('#comentario').val(response[0].comentario);
          }
        });  
   }
   function buscarComentarioUni(registro) {
        let registroEditable = Object.assign(registro, {id: comentarioId});
        $.ajax({
          type: 'POST',
          url: '../alumnos/datos_alumnospredefinidos5.php?accion=buscarComentario',
          dataType: "json",
          data: registro,
          success: function(response){
            $('#comentariou').val(response[0].comentario5);
          }
        });  
   }
   function buscarComentarioBook(registro) {
        let registroEditable = Object.assign(registro, {id: comentarioId});
        $.ajax({
          type: 'POST',
          url: '../alumnos/datos_alumnospredefinidos5.php?accion=buscarComentario',
          dataType: "json",
          data: registro,
          success: function(response){
            $('#comentariol').val(response[0].comentario6);
          }
        });  
   }
   function buscarComentarioGrad(registro) {
        let registroEditable = Object.assign(registro, {id: comentarioId});
        $.ajax({
          type: 'POST',
          url: '../alumnos/datos_alumnospredefinidos5.php?accion=buscarComentario',
          dataType: "json",
          data: registro,
          success: function(response){
            $('#comentariog').val(response[0].comentario7);
          }
        });  
   }

   function buscarComentario1(registro) {
    let registroEditable = Object.assign(registro, {id: comentarioId});
        $.ajax({
          type: 'POST',
          url: '../alumnos/datos_alumnospredefinidos5.php?accion=buscarComentario',
          dataType: "json",
          data: registro,
          success: function(response){
            $('#comentario1').val(response[0].comentario1);
          }
        });  
   }

   function buscarComentario2(registro) {
    let registroEditable = Object.assign(registro, {id: comentarioId});
        $.ajax({
          type: 'POST',
          url: '../alumnos/datos_alumnospredefinidos5.php?accion=buscarComentario',
          dataType: "json",
          data: registro,
          success: function(response){
            $('#comentario2').val(response[0].comentario2);
          }
        });  
   }

   function buscarComentario3(registro) {
    let registroEditable = Object.assign(registro, {id: comentarioId});
        $.ajax({
          type: 'POST',
          url: '../alumnos/datos_alumnospredefinidos5.php?accion=buscarComentario',
          dataType: "json",
          data: registro,
          success: function(response){
            $('#comentario3').val(response[0].comentario3);
          }
        });  
   }

   function buscarComentario4(registro) {
    let registroEditable = Object.assign(registro, {id: comentarioId});
        $.ajax({
          type: 'POST',
          url: '../alumnos/datos_alumnospredefinidos5.php?accion=buscarComentario',
          dataType: "json",
          data: registro,
          success: function(response){
            $('#comentario4').val(response[0].comentario4);
          }
        });  
   }
   function buscarComentario5(registro) {
    let registroEditable = Object.assign(registro, {id: comentarioId});
        $.ajax({
          type: 'POST',
          url: '../alumnos/datos_alumnospredefinidos5.php?accion=buscarComentario',
          dataType: "json",
          data: registro,
          success: function(response){
            $('#comentario5').val(response[0].comentario8);
          }
        });  
   }
   function buscarComentario6(registro) {
    let registroEditable = Object.assign(registro, {id: comentarioId});
        $.ajax({
          type: 'POST',
          url: '../alumnos/datos_alumnospredefinidos5.php?accion=buscarComentario',
          dataType: "json",
          data: registro,
          success: function(response){
            $('#comentario6').val(response[0].comentario9);
          }
        });  
   }
   function buscarComentario7(registro) {
    let registroEditable = Object.assign(registro, {id: comentarioId});
        $.ajax({
          type: 'POST',
          url: '../alumnos/datos_alumnospredefinidos5.php?accion=buscarComentario',
          dataType: "json",
          data: registro,
          success: function(response){
            $('#comentario7').val(response[0].comentario10);
          }
        });  
   }
   function buscarComentario8(registro) {
    let registroEditable = Object.assign(registro, {id: comentarioId});
        $.ajax({
          type: 'POST',
          url: '../alumnos/datos_alumnospredefinidos5.php?accion=buscarComentario',
          dataType: "json",
          data: registro,
          success: function(response){
            $('#comentario8').val(response[0].comentario11);
          }
        });  
   }
    // funciones que interactuan con el formulario de entrada de datos
        //Limpiar los datos de los Modals

        function limpiarFormularioPago() {
        $('#inscripcion').val();
        $('#uniforme').val();
        $('#libro').val();
        $('#graduacion').val();
        $('#cuota_1').val();
        $('#cuota_2').val();
        $('#cuota_3').val();
        $('#cuota_4').val();
        $('#cuota_5').val();
        $('#cuota_6').val();
        $('#cuota_7').val();
        $('#cuota_8').val();
        $('#fechaIns').val();
        $('#fechaUni').val();
        $('#fechaBook').val();
        $('#fechaGrad').val();
        $('#fecha1').val();
        $('#fecha2').val();
        $('#fecha3').val();
        $('#fecha4').val();
        $('#fecha5').val();
        $('#fecha6').val();
        $('#fecha7').val();
        $('#fecha8').val();
      }

      function limpiarComentarioIns() {
        $('#comentarioi').val("");
      }
      function limpiarComentarioUni() {
        $('#comentariou').val("");
      }
      function limpiarComentarioBook() {
        $('#comentariob').val("");
      }
      function limpiarComentarioGrad() {
        $('#comentariog').val("");
      }
      function limpiarComentario1() {
        $('#comentario1').val("");
      }
      function limpiarComentario2() {
        $('#comentario2').val("");
      }
      function limpiarComentario3() {
        $('#comentario3').val("");
      }
      function limpiarComentario4() {
        $('#comentario4').val("");
      }
      function limpiarComentario5() {
        $('#comentario5').val("");
      }
      function limpiarComentario6() {
        $('#comentario6').val("");
      }
      function limpiarComentario7() {
        $('#comentario7').val("");
      }
      function limpiarComentario8() {
        $('#comentario8').val("");
      }

     //Volver a Administracion de Alumnos

     $('#botonVolver').click(function () {
        window.location = "../alumnos/alumnos_predefinidos5.php";
      });
    });
  </script>

</body>

</html>