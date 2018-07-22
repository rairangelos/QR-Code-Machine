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
        <span class="login100-form-title">CONSULTAR CADASTROS</span>

            <?php if(isset($_GET['enviado']) && $_GET['enviado'] == 'ok'){ ?>
            <div class="col col-md-offset-4 text-center">
              <h6 style="color: green; padding: 20px 0px 20px 0px;">QR Code enviado com sucesso!</h6>
            </div>                                
            <?php }?>


            <?php
            require_once ("../conexao.php");
            $conectar = new conexao();
            $con = $conectar->connect();

            $select = $con->query("SELECT * FROM usuario order by id desc");
            $data = $select->fetchAll();
            foreach ($data as $row){?>
                    <div class="container card" style="margin: 0px 0px 20px 0px;">
                      <div class="row">
                        <div class="card-body col-7 text-center" style="padding-top: 70px;">
                          <h4><?php echo $row["nome"];?></h4>
                          <h5><?php echo $row["email"];?></h5>
                        </div>
                        <div class="card-body col-2">
                        <?php 
                          echo '<img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl='.$row["email"].'">';
                        ?>
                        </div>
                      </div>
                        <a class="btn btn-primary" href="../mail_go.php?nome=<?=$row['nome']?>&email=<?=$row['email'] ?>">Enviar QR Code por e-mail!
                        </a>
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