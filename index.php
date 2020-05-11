<?php
// page title
$page_title='Fitness Gym';
include('includes/header.html');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>

  </title>
  <!-- adding bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
  <!-- adding fontawesome CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- custom styles for this template -->
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/other.css" type="text/css">
  <!-- adding icon to this templete -->
  <link rel="shortcut icon" type="image/png" href="../images/logo.ico">


</head>
<body>
  <!-- adding carousel to home of fitness gym -->
  <div id="carousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/carousel01.jpeg" alt="First slide">
  </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/carousel02.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/carousel03.jpg" alt="Third slide">
    </div>
  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<br><br>
<!-- adding contact form to home page -->
<div id="contact">
  <!-- contact background image -->
  <img src="images/contact.jpg" id="contact" alt="">
<!-- contact heading -->
      <h3 id="contact-head" class="col-sm-12">Want to know more information?
        <br><br>
        Fill out this form</h3>
<!-- template for contact -->
  <form action="contact-process.php" method="post"  id="form" name="Login_Form">
  <div class="row">
    <div class="form-group col-sm-4">
      <input type="text" class="form-control" name="name" placeholder="Name" required>
    </div>
    <div class="form-group col-sm-4">
      <input type="email" class="form-control" name="email" placeholder="Email" required>
    </div>
    <div class="form-group col-sm-4">
      <input type="text" class="form-control" name="phone" placeholder="Phone number" required>
    </div>
    <!-- dropdown for contact customer can select our services -->
    <div class="form-group col-lg-12">
  <select class="form-control" id="dropdown" name="services">
    <option selected>Select Service</option>
    <option>Weight Loss</option>
    <option>Body Building</option>
    <option>Nutrition</option>
    <option>Personal Training</option>
  </select>
</div>
<div class="form-group col-md-12">
  <textarea type="text-area" class="form-control" name="message" placeholder="Message" required></textarea>
</div>
<div class="col-md-4">
<button id="contact-but" name="send" type="submit" class="btn btn-warning">Submit</button>
</div>
  </div>
</form>
  </div>
  <!-- ending contact form template -->
<br><br><br>
<!-- few equipment items were added here  just for sample -->
<div class="container">
<h3 id="heading">Lots of quality kit</h3>
<br>
<p class="lead">We've designed everything with you in mind, from the way the club is laid out, to the huge selection of kit available.</p>
</div>
<br><br><br>
<div class="container" id="container">
<img src="images/equipment/cardio01.jpg" alt="Image here!" id="img-grid">
<img src="images/equipment/cardio02.jpg" alt="Image here!" id="img-grid">
<img src="images/equipment/cardio03.jpg" alt="Image here!" id="img-grid">
  </div>
  <br>

  <div class="container" id="container">
    <img src="images/equipment/cardio04.jpg" alt="Image here!" id="img-grid">
    <img src="images/equipment/cardio05.jpg" alt="Image here!" id="img-grid">
    <img src="images/equipment/cardio06.jpg" alt="Image here!" id="img-grid">
  </div>
    <br><br>
    <!-- if you click this directly it takes you to equipment page -->
    <a id="equip-link" class="btn btn-warning btn-lg" href="equipment.php">See our range of equipment</a>

  <br><br>
  <!-- ending equipment template -->
</body>
<!-- adding bootstrap JS CDN -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>

<script type="text/javascript" src="js/js.js"></script>
</html>
<?php
include('includes/footer.html');
 ?>
