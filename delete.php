<?php
require 'DatabaseConnection.php' ;
$id = $_GET['id'];
$sql = 'DELETE FROM user WHERE id=:id';
$statment = $connect->prepare($sql);
if($statment->execute([':id' => $id])){
	header('location: index.php');
}


?>