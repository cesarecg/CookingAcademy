<!DOCTYPE html>
<html lang="es">
<?php
include_once '../conexion.php';
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
  $url = "../calendarios/calendar1.php";
  header("Location: $url");}

?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes" />
  <title>Alumnos Grupo 2</title>

  <link href="../bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="../datatables/datatables.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css"rel="stylesheet">
  <link href="../clockpicker/bootstrap-clockpicker.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="../assets/images/favicon.png" />
 
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
        <h2 style="text-align:center">Administración de Alumnos GRUPO DOS</h2>
        <table class="table table-striped table-bordered table-hover display nowrap" style="width:100%" id="tabla1">
          <thead>
            <tr>
              <td>ID</td>
              <td>Alumno</td>
              <td>Evaluacion 1</td>
              <td>Evaluacion 2</td>
              <td>Evaluacion 3</td>
              <td>Evaluacion 4</td>
              <td>Editar</td>
              <td>Borrar</td>
            </tr>
          </thead>
        </table>

        <!-- FormularioAlumnosPredefinidos -->
       
        <?php
          use Phppot\Member;
          if (! empty($_POST["signup-btn"])){
             if ($_POST["grupo"] === "UNO"){
              require_once '../Model/Member.php';
              $member = new Member();
              $registrationResponse = $member->registerMember();
                }
                elseif ($_POST["grupo"] === "DOS"){
                require_once '../Model/member1.php';
                $member = new Member();
                $registrationResponse = $member->registerMember();
                } elseif ($_POST["grupo"] === "TRES"){
                  require_once '../Model/member2.php';
                  $member = new Member();
                  $registrationResponse = $member->registerMember();
                    } elseif ($_POST["grupo"] === "CUATRO"){
                      require_once '../Model/member3.php';
                      $member = new Member();
                      $registrationResponse = $member->registerMember();
                        } elseif ($_POST["grupo"] === "CINCO"){
                          require_once '../Model/member4.php';
                          $member = new Member();
                          $registrationResponse = $member->registerMember();
                      } 
                              elseif ($_POST["grupo"] === "SEIS"){
                                require_once '../Model/member5.php';
                                $member = new Member();
                                $registrationResponse = $member->registerMember();
                            }         
          }
          ?>
                    
          
          
        <div class="modal fade" id="FormularioAlumnosPredefinidos" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form name="sign-up" action="" method="post"
				      	onsubmit="return signupValidation()">
              <div class="signup-heading text-center">Registro</div>
              <?php
    if (! empty($registrationResponse["status"])) {
        ?>
                    <?php
        if ($registrationResponse["status"] == "error") {
            ?>
				    <div class="server-response error-msg"><?php echo $registrationResponse["message"]; ?></div>
                    <?php
        } else if ($registrationResponse["status"] == "success") {
            ?>
                    <div class="server-response success-msg"><?php echo $registrationResponse["message"]; ?></div>
                    <?php
        }
        ?>
				<?php
    }
    ?>
              <div class="modal-body">
                <div class="form-row">
                <div class="form-group">
                  <label class=form-group>Seleccione el Grupo:</label>
                  <select id="grupo" name="grupo">
                    <option value="UNO">UNO</option>
                    <option value="DOS">DOS</option>
                    <option value="TRES">TRES</option>
                    <option value="CUATRO">CUATRO</option>
                    <option value="CINCO">CINCO</option>
                    <option value="SEIS">SEIS</option>
                      </select>
                </div>
                  <div class="form-group col-md-12">
                        <div class="form-group">
                          Nombre de Usuario<span class="required error" id="username-info"></span>
                        </div>
                        <input type="text" class="form-control"
                          name= "username" id="username">
                      </div>
                    </div>
                

                <div class="form-group">
                  Contraseña<span class="required error" id="signup-password-info"></span>
                  <input type="password" name="signup-password" id="signup-password" class="form-control" placeholder="">
                </div>
               

                <div class="form-group">
                  <label>Repetir Contraseña</label><span class="required error"
                  id="confirm-password-info"></span> 
                    
                  <input class="form-control" type="password"
								name="confirm-password" id="confirm-password">
                  
                </div>
              
              </div>
              <div class="modal-footer">

                <button class="btn btn-success" type="submit" name="signup-btn"
							id="signup-btn" value="Registrarse">Confirmar</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>

              </div>
            </div>
          </div>
        </div>

        <div><button type="button" id="BotonAgregar" class="btn btn-success">Agregar Alumno Nuevo</button>
        <a href="../pagos/pagos1.php"><button type="button" class="btn btn-success">Administrar Pagos</button></a></div>
        <hr>
        <div style="text-align:center"><button type="button" id="BotonSalir" class="btn btn-success">Retornar al
            calendario</button>
        </div>

      </div>
    </div>
  </div>

<!-- Formulario para EDITAR CUENTAS -->

  <div class="modal fade" id="FormularioAlumnos" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center"> Notas de Estudiantes
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
          <div class="form-row">
          <input type="hidden" id="id">
            <div class="form-group col-md-12">
              <label>Primera Evaluacion</label>
              <input type="text" id="eva_1" class="form-control" value="" placeholder="">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label>Segunda Evaluacion</label>
              <input type="text" id="eva_2" class="form-control" value="" placeholder="">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <label>Tercera Evaluacion</label>
              <input type="text" id="eva_3" class="form-control" value="" placeholder="">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <label>Cuarta Evaluacion</label>
              <input type="text" id="eva_4" class="form-control" value="" placeholder="">
            </div>
          </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" id="BotonAbrir">Cambiar Contraseña del usuario </button>
          <button type="button" id="BotonGuardar" class="btn btn-success">Guardar</button>
          <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>

        </div>
      </div>
    </div>
  </div>
<!-- Formulario de Cambio de Contraseña -->
<div class="modal fade" id="modalContra" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center"> Cambio de Contraseña
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-row">
            <div class="form-group col-md-12">
              <label>Nueva Contraseña</label>
              <input type="text" id="new_Password" class="form-control" value="" placeholder="">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label>Repetir nueva contraseña</label>
              <input type="text" id="confirm_Password" class="form-control" value="" placeholder="">
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" id="botonCambiar" class="btn btn-success">Guardar</button>
          <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
        </div>

      </div>
    </div>
 
  
  <script>

    document.addEventListener('DOMContentLoaded', function () {

      $('.clockpicker').clockpicker();
            
      let tabla1 = $('#tabla1').DataTable({
           rowReorder: {
            selector: 'td:nth-child(2)'
        },

        responsive: true,
        "ajax": {
          url: 'datos_alumnospredefinidos1.php?accion=listar',
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
        {
          "data": null,
          "orderable": false
        },
        {
          "data": null,
          "orderable": false
        }
        ],
        columnDefs: [{
          targets: -1,
          className: 'dt-body-center',
          "defaultContent": "<button class='btn btn-sm btn-danger botonborrar'>Borrar</button>",
          data: null
        }, {
          targets: -2,
          className: 'dt-body-center',
          "defaultContent": "<button class='btn btn-sm btn-primary botoneditar'>Editar</button>",
        },
        ],
        'rowCallback': function (row, data, index) {
          $(row).find('td:eq(1)').css('color', data.colortexto);
          $(row).find('td:eq(1)').css('background-color', data.colorfondo);
        },
        "language": {
          "url": "../datatables/spanish.json",
        },
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "Todos"]
        ],
      });

      $('#tabla1 tbody').on('click', 'button.botonborrar', function () {
        if (confirm("Realmente quiere borrar el este alumno? TODOS sus datos se perderán")) {
          var closestRow = $(this).closest('tr');
          let registro = tabla1.row( $(this).parents(closestRow)).data();
          borrarAlumno(registro);
        }
      });
      $('#tabla1 tbody').on('click', 'button.botoneditar', function () {       
        var closestRow = $(this).closest('tr'); 
        let registro1 = tabla1.row( $(this).parents(closestRow)).data();
        studentId = registro1.id;
        limpiarFormularioAlumno();
        let registro= {
          id: studentId
        }
        buscarNotas(registro);
        $("#FormularioAlumnos").modal();
      
        return studentId;
      });
         //Cerrar Modal de notas y abrir el de contraseñas
      $('#BotonAbrir').click(function () {
        $("#FormularioAlumnos").modal('hide');
        limpiarFormularioContra();
        $("#modalContra").modal();
      });
      
      //Guardar y Cerrar Modal de contraseñas
      $('#botonCambiar').click(function () {
        let registro = recuperarDatosContra();
        cambiarPassword(registro);
        $("#modalContra").modal('hide');
      });


      //Guardar y Cerrar Modal
      $('#BotonGuardar').click(function () {
        let registro = recuperarDatosAlumno();
        editarRegistro(registro);
        $("#FormularioAlumnos").modal('hide');
      });
      //Eventos de botones de la aplicación
      $('#BotonAgregar').click(function () {
        $("#FormularioAlumnosPredefinidos").modal();
      });


      $('#BotonSalir').click(function () {
        window.location = "../calendarios/calendar_admin.php";
      });

      // funciones para comunicarse con el servidor via ajax
      function buscarNotas(registro){
        $.ajax({
          type: 'POST',
          url: '../alumnos/datos_alumnospredefinidos1.php?accion=buscarNotas',
          dataType: "json",
          data: registro,
          success: function(response){
            $('#eva_1').val(response[0].eva_1);
            $('#eva_2').val(response[0].eva_2);
            $('#eva_3').val(response[0].eva_3);
            $('#eva_4').val(response[0].eva_4);
          }
        });  
   }
      function editarRegistro(registro) {
        let registroEditable = Object.assign(registro, {id: studentId});
        
        $.ajax({
          type: 'POST',
          url: 'datos_alumnospredefinidos1.php?accion=editar',
          dataType:"json",
          data: registro,
          success: function (msg) {
            tabla1.ajax.reload()
          },
          error: function (error) {
            console.log(error);
            alert("Hay un problema:" + error);
          }
        });
      }
      function cambiarPassword(registro) {
        let editarPass = Object.assign(registro, {id: studentId});

        $.ajax({
          type: 'POST',
          url: 'datos_alumnospredefinidos1.php?accion=cambiarPass',
          data: registro,
          success: function (msg) {
            tabla1.ajax.reload();
            alert("Contraseña Cambiada");
          },
          error: function (error) {
            alert("Hay un problema:" + error);
          }
        });
      }
      function borrarAlumno(registro) {
        $.ajax({
          type: 'POST',
          url: 'datos_alumnospredefinidos1.php?accion=borrar',
          data: registro,
          success: function (msg) {
            tabla1.ajax.reload();
          },
          error: function (error) {
            alert("Hay un problema:" + error);
          }
        });
      }
      // funciones que interactuan con el formulario de entrada de datos
       //Limpiar Formulario de notas
      function limpiarFormularioAlumno() {
        $('#eva_1').val('');
        $('#eva_2').val('');
        $('#eva_3').val('');
        $('#eva_4').val('');
      }
      function limpiarFormularioContra() {
        $('#new_Password').val('');
        $('#confirm_Password').val('');
      }
       
      function recuperarDatosAlumno() {
        let registro = {      
          eva_1: $('#eva_1').val(),
          eva_2: $('#eva_2').val(),
          eva_3: $('#eva_3').val(),
          eva_4: $('#eva_4').val()         
        };
        return registro;
      }
      function recuperarDatosContra() {
        let registro = {      
          new_Password: $('#new_Password').val(),
          confirm_Password: $('#confirm_Password').val()     
        };
        return registro;
      }
    
    });


  // SECCION DE JAVASCRIPT DE REGISTRO//
function signupValidation() {
	var valid = true;

	$("#username").removeClass("error-field");
	$("#email").removeClass("error-field");
	$("#password").removeClass("error-field");
	$("#confirm-password").removeClass("error-field");

	var UserName = $("#username").val();
	var email = $("#email").val();
	var Password = $('#signup-password').val();
    var ConfirmPassword = $('#confirm-password').val();
	var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

	$("#username-info").html("").hide();
	$("#email-info").html("").hide();

	if (UserName.trim() == "") {
		$("#username-info").html("required.").css("color", "#ee0000").show();
		$("#username").addClass("error-field");
		valid = false;
	}
	if (email == "") {
		$("#email-info").html("required").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (email.trim() == "") {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (!emailRegex.test(email)) {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000")
				.show();
		$("#email").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#signup-password-info").html("required.").css("color", "#ee0000").show();
		$("#signup-password").addClass("error-field");
		valid = false;
	}
	if (ConfirmPassword.trim() == "") {
		$("#confirm-password-info").html("required.").css("color", "#ee0000").show();
		$("#confirm-password").addClass("error-field");
		valid = false;
	}
	if(Password != ConfirmPassword){
        $("#error-msg").html("Both passwords must be same.").show();
        valid=false;
    }
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>
  </script>

</body>

</html>