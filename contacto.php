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

<div class="bckg-fixed position-relative" style="background-image: url('images/fly.jpg'); 
	background-position: 0% 35%; height: 70vh;">	
	<div class="opac">
	<div class="txt-center">  <!-- header-content -->
        <h1 class="title text-center">Get in touch</h1>
        <div class="divider mx-auto mb-5"></div>
	</div>
	</div>
</div>

<!-- Contact -->
<div class="container my-5">
    <div class="inner-width">
      <div class="contact-info">
        <div class="item">
          <a href="tel:(+351) 912847659"><i class="fas fa-mobile-alt"></i>+351 919999999</a>
        </div>

        <div class="item">
          <a href="mailto:outdoorpursuit@gmail.com"><i class="fas fa-envelope"></i>outdoorpursuit@gmail.com</a>
        </div>

        <div class="item">
          <i class="fas fa-map-marker-alt"></i>
          <p>Coimbra, Portugal</p>
        </div>
      </div>

      <form action="includes/messages.php" method="post" class="contact-form" onsubmit="sendBtn.disabled = true">
        <input type="text" class="nameZone" id="name" name="name" placeholder="Your Name">
        <input type="email" class="emailZone" id="email" name="email" placeholder="Your Email">
        <input type="text" class="subjectZone" id="subject" name="subject" placeholder="Subject">
        <textarea class="messageZone" id="message" name="message" placeholder="Message"></textarea>
        <input type="submit" id="sendBtn" value="Send Message" class="btn">
      </form>
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