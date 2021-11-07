<?php 
require '../includes/connection.php';
$email 			= $_POST['email'];

$sql = 'INSERT INTO newsletters(email) VALUES(:email)';
$sth = $dbh->prepare($sql);
$sth->bindParam(':email', $email, PDO::PARAM_STR );
$sth->execute();

/*
if($sth && $sth->rowCount() == 1)
	$update = 1;
else
	$update = 0; */
    
header('Location: ' . $_SERVER['HTTP_REFERER']);
$sth = null;
die();
?>