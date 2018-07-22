<?php

require_once ("conexao.php");
$conectar = new conexao();
$con = $conectar->connect();

$nome  = $_POST['nome'];
$email = $_POST['email'];
$pass  = $_POST['password'];

$select = $con->prepare("SELECT * FROM usuario WHERE email='$email'");
$select->setFetchMode(PDO::FETCH_ASSOC);
$select->execute();
$data=$select->fetch();

if($data['email']==$email){
	header("location: views/cadastrar.php?login=email_false");
}else{
	$insert = $con->prepare("INSERT INTO usuario (nome,email,senha) values(:name,:email,:pass) ");
	$insert->bindParam(':name',$nome);
	$insert->bindParam(':email',$email);
	$insert->bindParam(':pass', crypt($pass));

		if($insert->execute() == true){

				header("location: views/cadastrar.php?login=ok");

			}else{
				header("location: views/cadastrar.php?login=nok");
			}

}


?>