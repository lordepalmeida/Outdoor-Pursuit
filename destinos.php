<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Outdoor Pursuit</title>
	<link rel="icon" type="image/x-icon" href="images/favicon.ico"/>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/fontawesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">

	<style>	
		.hovereffect{
			-webkit-transform: scale(0.95);
			-ms-transform: scale(0.95);
			transform: scale(0.95);
			-webkit-transition: all 0.4s ease-in-out;
 			transition: all 0.4s ease-in-out;
		}
		.hovereffect:hover{
			display: block;
			position: relative;
			-ms-transform:scale(1);
			-webkit-transform:scale(1);
			transform:scale(1);
			-webkit-transition: all 0.4s ease-in-out;
  			transition: all 0.4s ease-in-out;
		}

	</style>	
</head>
<body>

<?php
require 'includes/menu.php';
?>
<?php
require 'includes/connection.php';

$sql = 'SELECT * FROM destinos
		WHERE visible = 1
		ORDER BY name';
$sth = $dbh->prepare($sql);
$sth->execute();
?>

<div class="bckg-fixed position-relative" style="background-image: url('images/fly.jpg'); 
background-position: 0% 35%; height: 70vh;">
	<div class="opac">
	  <div class="content txt-center"> 
		<h1 class="title">TRAVEL</h1>
		<div class="divider mx-auto mb-5"></div>
	  </div>
	</div>
	</div>
</div>

<div class="container">
	<h2 class="text-center mt-5 pt-5 subtitle">IT'S TIME TO START YOUR ADVENTURES</h2>
	<div class="divider mx-auto mb-5"></div>
</div>

<?php
while($dt = $sth->fetchObject()){
?>
	<div>
		<div class="container my-5 pb-4 hovereffect">
		<h4 class="subtitle"><?= $dt->name ?></h4>
		<div class="bckg position-relative" style="height: 380px; background-image: url(images/<?= $dt->image ?>); cursor: pointer" onclick='window.location.href="travelArticle.php?id=<?= $dt->id ?>"'>
		</div>
	</div>
<?php
}
?>

<?php
require 'includes/footer.php';
?>


<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>
<script>
</script>
</body>
</html>