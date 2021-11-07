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
</head>
<body>

<?php
require 'includes/connection.php';
$id = $_GET['id'];

$sql = 'SELECT * FROM destinos
		WHERE id = :id';
$sth = $dbh->prepare($sql);
$sth->bindParam(':id', $id, PDO::PARAM_INT);
$sth->execute();
$dt = $sth->fetchObject();
?>

<?php
require 'includes/menu.php';
?>


<div class="bckg-fixed position-relative" style="background-image: url('images/<?= $dt->image ?>'); min-height: 75vh;">	
	<div class="opac">
	<div class="txt-center">  <!-- header-content -->
        <h1 class="title text-center"><?= $dt->name ?></h1>
        <div class="divider mx-auto mb-5"></div>
	</div>
	</div>
</div>

<div class="container mb-5 pb-5">
	<h2 class="text-center mt-5 pt-5 subtitle"><?= $dt->title ?></h2>
	<div class="divider mx-auto mb-5"></div>

    <p><?= $dt->text ?></p>

	<h3 class="text-center mt-5 pt-5 subtitle">Top 10 <?= $dt->name ?> travel experiences</h2>
	<div class="divider mx-auto mb-5"></div>
	<p><?= $dt->top ?></p>
</div>

<?php
require 'includes/footer.php';
?>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>
<script>
</script>
</body>
</html>