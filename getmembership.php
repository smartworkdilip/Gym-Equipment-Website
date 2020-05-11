<?php
// page title
$page_title='Get membership';
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
   <link rel="shortcut icon" type="image/png" href="images/logo.ico">
   <link rel="stylesheet" href="css/other.css">


 </head>
 <body>
   <!-- template what about membership -->
   <div class="header">
     Get join free through online!
   </div>
<!-- membership heading here -->
   <div class="text">
     <h2>Fitness Gym membership</h2>
     <p>Need a monthly membership without a contract, a day pass for a one-off workout or a membership that’s paid in advance to keep you motivated? You can choose a membership that’s right for you with our huge range of flexible membership options.</p>
   </div>
   <!-- for monthly membership  -->
   <div class="monthly">
     <h2>Monthly membership</h2>
   </div>
   <div class="container">
   <div class="row">
     <div class=" col-lg-4 col-md-6 col-sm-12">
       <div class="card"  id="monthlycards">
         <div class="card-body">
           <h5 class="card-title">Thousand off!</h5>
           <p class="card-text">
             <p>&#x20b9;8000 (no joining fee).</p>
             If you pay six months payment at a time, you will get thousand off, you don't have to pay joining fee also.
           </p>
           <a href="contact.php" class="btn btn-warning">Join now</a>
         </div>
       </div>
     </div>

     <!-- monthly payment membership here -->
     <div class="col-lg-4 col-md-6 col-sm-12">
       <div class="card" id="monthlycards">
         <div class="card-body">
           <h5 class="card-title">Monthly payment</h5>
           <p class="card-text">
             <p>from &#x20b9;1500 + joining fee.</p>
             If you pay monthly wise you will not get any offers from us and you have to pay registration fee!
           </p>
           <a href="contact.php" class="btn btn-warning">Join now</a>
         </div>
       </div>
     </div>

     <!-- seven days free trial membership -->
     <div class="col-lg-4 col-md-6 col-sm-12">
       <div class="card" id="monthlycards">
         <div class="card-body">
           <h5 class="card-title">7 Days free trial!</h5>
           <p>&#x20b9;1500 no joining fee.</p>
           <p class="card-text">Here we provide you seven days free trial but, you have to pay one month payment. If won't like our services we will give back your money.</p>
           <a href="contact.php" class="btn btn-warning">Join now</a>
         </div>
       </div>
     </div>
   </div>
   </div>
   <!-- end of getmemership template -->
 </body>
 <!-- adding bootstrap JS CDN -->
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"  crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>

 </html>




 <?php
 include('includes/footer.html');
  ?>
