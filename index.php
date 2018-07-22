
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ACESSO - QR MACHINE</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/fast.gif" alt="IMG">
                </div>
                    <form class="login100-form validate-form col" role="form" method="POST" action="valida_login.php">

                    <span class="login100-form-title">ENTRA AÍ!!</span>

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


                        <div class="form-group login100-form-title">
                            <div class="col col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Entrar
                                </button>
							</div>

                            <?php if(isset($_GET['login']) && $_GET['login'] == 'erro'){ ?>
                            <div class="col col-md-offset-4">
                                <h6 style="color: red; padding-top: 20px;">Usuário ou senha inválido(s)!</h6>
                            </div>                                
                            <?php }?>

                            <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2'){ ?>
                            <div class="col col-md-offset-4">
                                <h6 style="color: red; padding-top: 20px;">Faça login para acessar páginas protegidas!</h6>
                            </div>                                
                            <?php }?>
                        </div>
                    </form>
                </div></div>
        </div>
    </div>
    
    

    
<!--===============================================================================================-->  
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <!--<script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
	-->
<!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>
</html>