<?php

require_once ("conexao.php");
$conectar = new conexao();
$con = $conectar->connect();


 $email = $_POST['email'];
 $pass = $_POST['password'];
 
 $select = $con->prepare("SELECT * FROM usuario WHERE email='$email'");
 $select->setFetchMode(PDO::FETCH_ASSOC);
 $select->execute();
 $data=$select->fetch();

 if($data['email']!=$email && crypt($pass,$data['senha']) != $data['senha']) {
 	session_start();
 	$_SESSION['auth'] = 'FALSE';
  	header("location: index.php?login=erro");
 }elseif($data['email']==$email && crypt($pass,$data['senha']) == $data['senha']){	
 	session_start();
 	$_SESSION['auth'] = 'TRUE';
 	$_SESSION['email']=$data['email'];
    $_SESSION['name']=$data['name'];
	header("location: views/home.php"); 
 }
?>
