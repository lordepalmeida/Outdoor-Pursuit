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
require 'includes/menu.php';
?>

<!-- Home -->
<div id="home">
	<div class="opac">
    <div class="inner-width">
    	<div class="content">
        	<p class="title">Explore The Colourful World</p> 
        	<div class="divider mx-auto"></div>
        	<h1 class="title">a wonderful gift</h1>
      	</div>
    </div>
    </div>
</div>


<div id="quote" class="container-fluid">
	<div class="container">
		<div class="aspas">
			<img class="img-fluid" src="images/aspas.png" alt="">
		</div>
		<div class="txt-center">
			<p class="fs-4 fst-italic">Be fearless in the pursuit of what sets your soul on fire. </p>
			<p class="fs-5">– Jennifer Lee</p>
		</div>
		<div class="aspas" style="right:10%;">
			<img class="img-fluid" src="images/aspas.png" alt="" style="transform: rotate(180deg);">
		</div>	
	</div>
</div>

<div class="container">
	<h2 class="text-center mt-5 pt-5 subtitle">IT'S TIME TO START YOUR ADVENTURES</h2>
	
	<div class="divider mb-5 mx-auto"></div>


	<div class="row mt-5">

		<div class="col-12 col-lg-6 mt-5">
			<div class="card mx-auto">
				<img class="img-fluid h-100" src="images/dog.jpg" alt="" style="border-radius: 7px;">
			</div>
			<div class="fs-5 fw-bold my-4 text-center">Water Activities</div>
		</div>

		<div class="col-12 col-lg-6 mt-5">
			<div class="card mx-auto">
				<img class="img-fluid h-100" src="images/bckg.jpg" alt="" style="border-radius: 7px;">
			</div>
			<div class="fs-5 fw-bold my-4 text-center">Air Activities</div>
		</div>

		<div class="col-12 col-lg-6 mt-5">
			<div class="card mx-auto">
				<img class="img-fluid h-100" src="images/house.jpg" alt="" style="border-radius: 7px;">
			</div>
			<div class="fs-5 fw-bold my-4 text-center">Land Activities</div>
		</div>

		<div class="col-12 col-lg-6 mt-5">
			<div class="card mx-auto">
				<img class="img-fluid h-100" src="images/drift.jpg" alt="" style="border-radius: 7px;">
			</div>
			<div class="fs-5 fw-bold my-4 text-center">Snow Activities</div>
		</div>
		
	</div>

	<div class="d-flex justify-content-center mb-5 pb-5 mt-4">
		<a class="btn" href="atividades.php">Learn more</a>
	</div>

</div>


<div class="position-relative bckg-fixed" style="background-image: url(images/green.jpg); height:100vh;">
	<div class="opac">
	<div class="container">
		<div class="row">
			<div class="col"></div>
			<div class="col">
				<div class="left-middle text-white">
					<h2 class="title">EXPLORE THE WORLD</h2>
					<div class="divider mb-4"></div>
					<p>Better to see something once than hear about it a thousand times!</p>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>


<div class="container">
	
	<h2 class="text-center mt-5 pt-5 subtitle">TRAVEL</h2>
	<div class="divider mb-1 mx-auto"></div>

	<div class="row my-5 pb-5 gx-3">

		<div class="col-12 col-lg-4">
			<div class="mt-3">
				<h4 class="subtitle mb-3">TOURS & DESTINATION</h4>
				<div class="divider"></div>
				<p class="my-4">Fuerat aestu carentem habentia spectent tonitrua mutastis locavit liberioris. Sinistra possedit litora ut nabataeaque. Setucant coepyterunt perveniunt animal! Concordi aurea nabataeaque seductaque constaque cepit sublime flexi nullus.</p>
				<div class="mb-5 resp">
					<a class="btn" href="destinos.php">Learn more</a>
				</div>
			</div>
		</div>

		<div class="col-12 col-md-6 col-lg-4">
			<div class="mt-3">
				<img class="img-fluid w-100" src="images/two.jpg" alt="" style="border-radius: 7px;">
			</div>
			<div class="mt-3"> 
				<img class="img-fluid w-100" src="images/rock.jpg" alt="" style="border-radius: 7px;">
			</div>
		</div>

		<div class="col-12 col-md-6 col-lg-4">
			<div class="mt-3"> 
				<img class="img-fluid w-100" src="images/into.jpg" alt="" style="border-radius: 7px;">
			</div>
			<div class="mt-3"> 
				<img class="img-fluid w-100" src="images/clouds.jpg" alt="" style="border-radius: 7px;">
			</div>
		</div>
		
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