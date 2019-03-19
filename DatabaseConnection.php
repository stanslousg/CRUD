<?php 

	$username = "root" ;
	$password = "" ;
	$Connection_string = "mysql:host=localhost;dbname=CRUD" ;

		try{
			$connect = new PDO($Connection_string,$username,$password);
			$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			return $connect ;
		}
		catch(PDOException $ex){
			echo "ERROR!: " . $ex->getMessage() . "<br/>";
			die();
		}


;?>