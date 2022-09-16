<?php
use Phppot\Member;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
?>
<link rel="icon" type="image/x-icon" href="assets/images/favicon.png"/>

<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ingresar - Leconcasse</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css"> 
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="assets/images/chefsito.png" alt="login" class="login-card-img">
          </div>
          
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
         
              </div>
              <p class="login-card-description">Ingresar</p>
              <form name="login" action="" method="post"
                      onsubmit="return loginValidation()">
                      <?php if(!empty($loginResult)){?>
			              	<div class="error-msg"><?php echo $loginResult;?></div>
		                		<?php }?>
                  <div class="form-group">
                  <div class="inline-block">

							<div class="form-label">
								Ingrese Su Grupo
							</div>
							<select id="grupo" name="grupo">
								<option value="UNO">UNO</option>
								<option value="DOS">DOS</option>
								<option value="TRES">TRES</option>
								<option value="CUATRO">CUATRO</option>
								<option value="CINCO">CINCO</option>
								<option value="SEIS">SEIS</option>
            	</select>
              </div>
                   
                  <div class="form-label">
							      	Usuario<span class="required error" id="username-info"></span>
						    	</div>
                    <label for="email" class="sr-only">Usuario</label>
                    <input class="form-control" placeholder="Nombre de Usuario" type="text" name="username"
								id="username" pattern="[A-Za-z0-9_-]{1,15}">
                  </div>
                  <div class="form-group mb-4">
                  <div class="form-label">
								Contraseña<span class="required error" id="login-password-info"></span>
							</div>
                    <label for="password" class="sr-only"></label>
                    <input class="form-control" type="password" placeholder="*********"
								    name="login-password" id="login-password" pattern="[A-Za-z0-9_-]{1,15}">
                  </div>
                  <input class="btn btn-block login-btn mb-4" type="submit" name="login-btn"
							id="login-btn" value="Ingresar">
                </form>
              
                
            </div>
          </div>
        </div>
      </div>
    
         
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

	<script>
function loginValidation() {
	var valid = true;
	$("#username").removeClass("error-field");
	$("#password").removeClass("error-field");

	var UserName = $("#username").val();
	var Password = $('#login-password').val();

	$("#username-info").html("").hide();

	if (UserName.trim() == "") {
		$("#username-info").html("required.").css("color", "#ee0000").show();
		$("#username").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#login-password-info").html("required.").css("color", "#ee0000").show();
		$("#login-password").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>
</BODY>
</HTML>
