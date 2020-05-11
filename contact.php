<?php
// page title
$page_title='Contact us';
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

   <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">


   <!-- custom styles for this template -->
   <link rel="stylesheet" href="css/style.css" type="text/css">
   <link rel="stylesheet" href="css/other.css" type="text/css">
   <!-- adding icon to this templete -->
   <link rel="shortcut icon" type="image/png" href="images/logo.ico">



 </head>
 <body>
   <!-- template what about diet -->

   <!-- adding our location via map -->
   <div id="map">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3805.510668231582!2d78.41188676512873!3d17.483119654638035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb91bb47526ae3%3A0x54502e32a083b0c7!2sB+J+P+Office%2C+BJP+Office+Rd%2C+Shanthi+Nagar%2C+Kukatpally%2C+Hyderabad%2C+Telangana+500072!5e0!3m2!1sen!2sin!4v1518011000124" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
   </div>
   <!-- end of adding map -->
<br>
   <!-- contact form template -->
   <div id="contact">
  <img src="images/contact.jpg" id="contact-us" alt="Here is background image">
    <h2 id="contact-us-head" class="col-sm-12">Contact Fitness Gym</h2>
    <!-- user details name,email and phone number -->
     <form class="form-group" action="contact-process.php" method="post"  id="contact-form" name="contact">
     <div class="row">
       <div class=" form-group col-md-4">
         <input type="text" class="form-control" name="name" placeholder="Name" required autocomplete="off">
       </div>
       <div class=" form-group col-md-4">
         <input type="email" class="form-control" name="email" placeholder="Email" required autocomplete="off">
       </div>
       <div class=" form-group col-md-4">
         <input type="text" class="form-control" name="phone" placeholder="Phone number" required autocomplete="off">
       </div>
        <!-- here dropdown you have to select our services -->
       <div class="form-group col-md-12">
     <select class="form-control" id="dropdown" name="services">
       <option selected>Select Service</option>
       <option>Weight Loss</option>
       <option>Body Building</option>
       <option>Nutrition</option>
       <option>Personal Training</option>
     </select>
   </div>
   <div class=" form-group col-md-12">
     <textarea type="text-area" class="form-control" name="message" placeholder="Message" required autocomplete="off"></textarea>
   </div>
   <div class="col-md-4">
   <button id="contact-but" name="send" type="submit" class="btn btn-warning">Submit</button>
   </div>
 </div>
   </form>
 </div>
 <br><br><br><br>
 <!-- end of contact form template -->
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
