<?php
session_start();

if(!isset($_SESSION['auth']) || $_SESSION['auth'] != 'TRUE'){
  header('Location: ../index.php?login=erro2');
}

include('../libs/phpqrcode/qrlib.php');
if(isset($_GET['acao']) && $_GET['acao'] == 'ok'){
  if(isset($_POST['conteudo'])){
    $conteudo = $_POST['conteudo'];
    QRcode::png($conteudo, "../images/QR_Code.png", QR_ECLEVEL_L , 4);
  }else{
    $sem_msg = TRUE;
  }


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
        <span class="login100-form-title">QR Code - MACHINE</span>

        <!-- Form que gera o QR Code -->
          <form class="login100-form validate-form col" role="form" method="POST" action="?acao=ok">
            <div class="wrap-input100 validate-input">
              <label for="conteudo" class="col control-label text-center">Digite o conteudo que deseja inserir no QR Code</label>
              <div class="col">
                <input id="conteudo" type="text" class="input100 col" name="conteudo" value="">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                  <i class="fa fa-edit" aria-hidden="true"></i>
                </span>
              </div>
            </div>
            <div class="form-group text-center">
              <div class="col col-md-offset-4">
                <input type="submit" class="btn btn-primary" value="Enviar">
              </div>
            </div>
          </form>
        <!-- FIM Form que gera o QR Code -->
          <?php if(isset($sem_msg)){ ?>
            <div class="container">
            <div class="col col-md-offset-4 text-center">
                <h6 style="color: red; padding-top: 20px;">Forneça um dado VALIDO!</h6>
            </div>  
            </div>                              
          <?php }?>
          <?php if (isset($conteudo)){ ?>
            <div class="container">
            <div class="row login100-form-title" style="padding-left: 25px;">
            <img src="../images/QR_code.png" width="130" height="130">
            </div>
            </div>
          <?php }?>
      </div>
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