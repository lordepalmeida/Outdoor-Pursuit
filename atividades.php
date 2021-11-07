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
		.overlay{
			opacity: 0;
			position: absolute;
			top:50%;
			left:50%;
			transform:translate(-50%, -50%);
			background-color:rgba(0,0,0,.81);
			padding:1rem;
			width:100%;
			text-align:center;
			color:#fff;
			font-weight: 700;
			transition: 0.4s;
		}
		.ativity:hover{
			cursor: pointer;
		}
		.ativity:hover .overlay{
			opacity:1;
		}
	</style>	
</head>
<body>

<?php
require 'includes/menu.php';
?>
<?php
require 'includes/connection.php';

$sql = 'SELECT * FROM atividades
		WHERE visible = 1
		ORDER BY name';
$sth = $dbh->prepare($sql);
$sth->execute();
?>

<div class="bckg-fixed position-relative" style="background-image: url('images/fly.jpg'); 
	background-position: 0% 35%; height: 70vh;">	
	<div class="opac">
	<div class="txt-center content">  <!-- header-content -->
		<h1 class="title">ACTIVITIES</h1>
		<div class="divider mx-auto mb-5"></div>
	</div>
	</div>
</div>

<div class="container-fluid pt-5" style="background-color: rgba(180, 180, 180, 0.14);">
	<div class="container py-5">
		<h2 class="subtitle">The best outdoor activities in, on and under the water</h2>
		<div class="divider mb-4"></div>
		<p>Whether you're after a gentle paddle down a lake or a white water rafting experience to get the heart racing, getting out on the seas, rivers and oceans is a great way to start any adventure. Click on the btn to see a few different ideas...</p>
		
		<div class="row">
		<?php
		while($at = $sth->fetchObject()){
			if($at->categoriaId == 1){
		?>
			<div class="col-12 col-lg-4 col-md-6 mb-4" onclick='window.location.href="activityArticle.php?id=<?= $at->id ?>"'>
				<div class="position-relative ativity">
					<img src="images/<?= $at->image ?>" alt="" class="img-fluid w-100" style="height: 18em;">
					<div class="overlay"><?= $at->name ?></div>
				</div>
			</div>
		<?php
			}
		}
		?>
		</div>

		<!--
		<div class="row">
			<div class="col-12 col-lg-4 col-md-6 mb-4" onclick='window.location.href=""'>
				<div class="position-relative ativity">
					<img src="images/water/kayaking/me.jpg" alt="" class="img-fluid w-100" style="height: 18em;">
					<div class="overlay">Kayaking</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 col-md-6 mb-4" onclick='window.location.href=""'>
				<div class="position-relative ativity">
					<img src="images/water/surf/topless.jpg" alt="" class="img-fluid w-100" style="height: 18em;">
					<div class="overlay">Surf</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 col-md-6 mb-4" onclick='window.location.href=""'>
				<div class="position-relative ativity">
					<img src="images/water/paddle/girl.jpg" alt="" class="img-fluid w-100" style="height: 18em;">
					<div class="overlay">Paddle</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 col-md-6 mb-4" onclick='window.location.href=""'>
				<div class="position-relative ativity">
					<img src="images/water/waterfalls/climb.jpg" alt="" class="img-fluid w-100" style="height: 18em;">
					<div class="overlay">Climbing Waterfalls</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 col-md-6 mb-4" onclick='window.location.href=""'>
				<div class="position-relative ativity">
					<img src="images/water/scubaDiving/turtle.jpg" alt="" class="img-fluid w-100" style="height: 18em;">
					<div class="overlay">Scuba Diving</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 col-md-6 mb-4" onclick='window.location.href=""'>
				<div class="position-relative ativity">
					<img src="images/water/Rafting/white.jpg" alt="" class="img-fluid w-100" style="height: 18em;">
					<div class="overlay">Rafting</div>
				</div>
			</div>
		</div>-->
	</div>
</div>

<div class="container-fluid">
	<div class="container py-5">
		<h2 class="pt-5 subtitle">The best outdoor activities on land</h2>
		<div class="divider mb-4"></div>
		<p>Whether you're climbing up a mountain or hiking across a desert, journeying across land is a fantastic way to see the world around you.</p>

		<div class="row">
		<?php
		$sth->execute();
		while($at = $sth->fetchObject()){
			if($at->categoriaId == 2){
		?>
			<div class="col-12 col-lg-4 col-md-6 mb-4" onclick='window.location.href="activityArticle.php?id=<?= $at->id ?>"'>
				<div class="position-relative ativity">
					<img src="images/<?= $at->image ?>" alt="" class="img-fluid w-100" style="height: 18em;">
					<div class="overlay"><?= $at->name ?></div>	
				</div>
			</div>
		<?php
			}
		}
		?>
		</div>
		<!--
        <div class="row">
			<div class="col-12 col-lg-4 col-md-6 mb-4" onclick='window.location.href=""'>
				<img src="images/land/hiking/men.jpg" alt="" class="img-fluid w-100" style="height: 18em;">
			</div>
			<div class="col-12 col-lg-4 col-md-6 mb-4" onclick='window.location.href=""'>
				<img src="images/land/climbing/blue.jpg" alt="" class="img-fluid w-100" style="height: 18em;">
			</div>
			<div class="col-12 col-lg-4 col-md-6 mb-4" onclick='window.location.href=""'>
				<img src="images/land/horse/women.jpg" alt="" class="img-fluid w-100" style="height: 18em;">
			</div>
        </div>
		-->
            
	</div>
</div>

<div class="container-fluid" style="background-color: rgba(180, 180, 180, 0.14);">
	<div class="container py-5">
		<h2 class="pt-5 subtitle">The best Outdoor activities on ice</h2>
		<div class="divider mb-4"></div>
		<p>Whether you're after a snowboard down a mountain or a husky sledding experience to get the heart racing, getting out on the snow is a great way to start any adventure. Click on the btn to see a few different ideas...</p>

		<div class="row">
		<?php
		$sth->execute();
		while($at = $sth->fetchObject()){
			if($at->categoriaId == 3){
		?>
			<div class="col-12 col-lg-4 col-md-6 mb-4" onclick='window.location.href="activityArticle.php?id=<?= $at->id ?>"'>
				<div class="position-relative ativity">
					<img src="images/<?= $at->image ?>" alt="" class="img-fluid w-100" style="height: 18em;">
					<div class="overlay"><?= $at->name ?></div>
				</div>
			</div>
		<?php
			}
		}
		?>
		</div>

		<!--
        <div class="row">
			<div class="col-12 col-lg-4 col-md-6 mb-4" onclick='window.location.href=""'>
				<img src="images/ice/ski/ski.jpg" alt="" class="img-fluid w-100" style="height: 18em;">
			</div>
			<div class="col-12 col-lg-4 col-md-6 mb-4" onclick='window.location.href=""'>
				<img src="images/ice/sledding/fun.jpg" alt="" class="img-fluid w-100" style="height: 18em;">
			</div>
			<div class="col-12 col-lg-4 col-md-6 mb-4" onclick='window.location.href=""'>
				<img src="images/ice/Snowboard/women.jpg" alt="" class="img-fluid w-100" style="height: 18em;">
			</div>
        </div>
		-->
	</div>
</div>

<div class="container-fluid">
	<div class="container py-5">
		<h2 class="pt-5 subtitle">The best outdoor activities in air</h2>
		<div class="divider mb-4"></div>
		<p>Whether you're parashuting or parapente, journeying across air is a fantastic way to feel alive.</p>

		<div class="row">
		<?php
		$sth->execute();
		while($at = $sth->fetchObject()){
			if($at->categoriaId == 4){
		?>
			<div class="col-12 col-lg-4 col-md-6 mb-4" onclick='window.location.href="activityArticle.php?id=<?= $at->id ?>"'>
				<div class="position-relative ativity">
					<img src="images/<?= $at->image ?>" alt="" class="img-fluid w-100" style="height: 18em;">
					<div class="overlay"><?= $at->name ?></div>
				</div>
			</div>
		<?php
			}
		}
		?>
		</div>
		<!--
        <div class="row">
			<div class="col-12 col-lg-4 col-md-6 mb-4" onclick='window.location.href=""'>
				<img src="images/air/parapente/sky.jpg" alt="" class="img-fluid w-100" style="height: 18em;">
			</div>
			<div class="col-12 col-lg-4 col-md-6 mb-4" onclick='window.location.href=""'>
				<img src="images/air/paraquedismo/colors.jpg" alt="" class="img-fluid w-100" style="height: 18em;">
			</div>
			<div class="col-12 col-lg-4 col-md-6 mb-4" onclick='window.location.href=""'>
				<img src="images/air/bungeeJumping/cristo.jpg" alt="" class="img-fluid w-100" style="height: 18em;">
			</div>
        </div>
		-->
	</div>
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