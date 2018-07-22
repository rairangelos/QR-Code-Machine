<?php
class conexao{
	function connect(){
		try{
			$conn = new PDO ("mysql:host=localhost;dbname=qr_machine","root","");
			return $conn;
		}catch(PDOException $exc){
			echo "error".$exc->getMessage();
		}
	}
}
?>