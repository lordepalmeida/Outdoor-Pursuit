<?php 
require '../includes/connection.php';
$name			= $_POST['name'];
$email 			= $_POST['email'];
$subject 		= $_POST['subject'];
$message        = $_POST['message'];


$sql = 'INSERT INTO messages( name, email, sendDate, subject, message) VALUES(:name,:email,NOW(),:subject,:message)';
$sth = $dbh->prepare($sql);
$sth->bindParam(':name', $name, PDO::PARAM_STR);
$sth->bindParam(':email', $email, PDO::PARAM_STR );
$sth->bindParam(':subject', $subject, PDO::PARAM_STR);
$sth->bindParam(':message', $message, PDO::PARAM_STR);
$sth->execute();

if($sth && $sth->rowCount() == 1)
	$update = 1;
else
	$update = 0;
    
header('Location:../contacto.php?update='.$update);
$sth = null;
die();
?>