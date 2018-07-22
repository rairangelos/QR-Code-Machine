<?php
session_start();

if(!isset($_SESSION['auth']) || $_SESSION['auth'] != 'TRUE'){
  header('Location: ../index.php?login=erro2');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>QR MACHINE</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
</head>
<body>

<?php include "menu.php";?>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                    <form class="login100-form validate-form col" role="form" method="POST" action="../cad_go.php">

                        <span class="login100-form-title">CADASTRAR</span>

                        <div class="wrap-input100 validate-input">
                            <label for="nome" class="col control-label">Nome</label>

                            <div class="col">
                                <input id="nome" type="text" class="input100 col" name="nome" value="">

							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-user" aria-hidden="true"></i>
							</span>

                            </div>
                        </div>
						
						<div class="wrap-input100 validate-input">
                            <label for="email" class="col control-label">E-Mail</label>

                            <div class="col">
                                <input id="email" type="email" class="input100 col" name="email" value="">

							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</span>

                            </div>
                        </div>

                        <div class="wrap-input100 validate-input">
                            <label for="password" class="col control-label">Senha</label>

                            <div class="col">
                                <input id="password" type="password" class="input100 col" name="password">

                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>

                            </div>
                        </div>


                        <div class="form-group text-center">
                            <div class="col col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-plus"></i> Cadastrar
                                </button>
							</div>
                        </div>
                            <?php if(isset($_GET['login']) && $_GET['login'] == 'nok'){ ?>
                            <div class="col col-md-offset-4 text-center">
                                <h6 style="color: red; padding-top: 20px;">Erro ao cadastrar!</h6>
                            </div>                                
                            <?php }?>

                            <?php if(isset($_GET['login']) && $_GET['login'] == 'ok'){ ?>
                            <div class="col col-md-offset-4 text-center">
                                <h6 style="color: green; padding-top: 20px;">Cadastrado com sucesso!</h6>
                            </div>                                
                            <?php }?>
                            <?php if(isset($_GET['login']) && $_GET['login'] == 'email_false'){ ?>
                            <div class="col col-md-offset-4 text-center">
                                <h6 style="color: red; padding-top: 20px;">E-mail já cadastrado, tente outro e-mail!</h6>
                            </div>                                
                            <?php }?>
                    </form>
                </div></div>
        </div>
    </div>
    
    

    
<!--===============================================================================================-->  
    <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="../vendor/bootstrap/js/popper.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <!--<script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
	-->
<!--===============================================================================================-->
    <script src="../js/main.js"></script>

</body>
</html>