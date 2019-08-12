<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css?<?php echo time(); ?>"  >

  <!-- font awesome -->
  <link rel="stylesheet" href="css/all.css">
   <!-- logo bar -->
  <link rel="shortcut icon" type="image/png"  href="img/svg.png" >
  <title>Shisha House</title>
  <style>
  </style>
</head>


<body>
  <!-- header -->
  <header id="home">
    <!-- navbar  -->
    <!-- 
https://www.iconfinder.com/icons/2427887/dessert_donut_doughnut_fat_sweets_icon
Creative Commons (Attribution 3.0 Unported);
https://www.iconfinder.com/korawan_m
     -->
    <nav class="navbar navbar-expand-lg py-2 px-4">
      <a class="navbar-brand" href="index.php"><img src="img/svg.png" width="60" height="60" alt="Shisha House"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav">
        <span class="toggler-icon"><i class="fas fa-bars"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="myNav">
        <ul class="navbar-nav mx-auto text-capitalize">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="index.php#about">about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#store">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Reservation">visit Us</a>
          </li>
          <li>
           <a title="instagram"  href="https://www.instagram.com/shishahousepostepu5/" target="_blank"><img class="instagram-logo" src="img/instagram-logo.png" alt="instagram"></a>
                       <a  title="facebook" href="https://www.facebook.com/Shishahouspostepu5/" target="_blank"><img class="facebook-logo" src="img/facebook-icon.png" alt="facebook"></a>
                     </li>
        </ul>
        <div class="nav-info-items d-none d-lg-flex ">
          <!-- single info -->
          <div class="nav-info align-items-center d-flex justify-content-between mx-lg-5">
            <span class="info-icon mx-lg-3"><i class="fas fa-phone"></i></span>
            <p class="mb-0">+48 666 666 827</p>
          </div>
          <!-- end of single info -->
          <!-- single info -->
          <div id="cart-info" class="nav-info align-items-center cart-info d-flex justify-content-between mx-lg-5">
            <span class="cart-info__icon mr-lg-3"><i class="fas fa-briefcase"></i></span>
            <p class="mb-0 text-capitalize"><span id="item-count">Open </span>Hours</p>

          </div>
          <!-- end of single info -->
        </div>
      </div>
    </nav>
    <!-- end of nav -->
    <!-- banner  -->
    <div class="container-fluid">
      <div class="row max-height justify-content-center align-items-center">
        <div class="col-10 mx-auto banner text-center">
          <h1 class="h1-banner text-capitalize">welcome to <strong class="banner-title ">Shisha House Bar & Restaurant</strong></h1>
          <a href="#Reservation" class="btn banner-link text-uppercase my-2">Make Reservation</a>

        </div>

        <div id="cart" class="cart">
             <h3 class="text-capitalize text-center">our working hours</h3>
        
          <div class="cart-buttons-container mt-3 d-flex justify-content-between">
            Mon-Thu, Sun 12PM–12AM<br>
            Fri-Sat 12PM–2AM<br>
                 <div>
                      <a title="instagram"  href="https://www.instagram.com/shishahousepostepu5/" target="_blank"><img class="instagram-logo" src="img/instagram-logo.png" alt="instagram"></a>
                       <a  title="facebook" href="https://www.facebook.com/Shishahouspostepu5/" target="_blank"><img class="facebook-logo" src="img/facebook-icon.png" alt="facebook"></a>
          
                 </div>
          </div>
          <!--end of  cart buttons -->
          <!--  -->
        </div>
      </div>
    </div>






<section id="Reservation" class="mobile clear-fix">
  <div>
    <h1 class="text-center pt-1 mt-5">Make Your Reservation</h1>
    <h3 class="text-center  pb-5 ">We would love to have you in our DOM </h3>
  </div>

<div class="container">
 <div class="row">
       <div class="mobile col-md-6 col-sm-12 clear-fix">
        <br>
        <br>
       <h5>We have great PROMOTIONS for you on this great day make your reservation NOW...
When ordering any item from the "Mix grill" category 👉SHISHA GRATIS !!! 💨 💪💪 PROMOCJE until 31.12.2018🔥😍</h5>
<br>


       

         <img  id='FB' src='img/mobile.png' class="mobile img-thumbnail" alt="mobile" >


        
        
      </div>
 

    
       <div class="col-md-6 col-sm-12 clear-fix">
        <?php
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
require './vendor/PHPMailer_/src/PHPMailer.php';
require './vendor/PHPMailer_/src/Exception.php';
require './vendor/PHPMailer_/src/SMTP.php';
 $message="";
if($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $Name= trim(filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING));
    $Email=trim(filter_input(INPUT_POST,'Email',FILTER_SANITIZE_EMAIL));
    $Number=trim(filter_input(INPUT_POST,'number',FILTER_SANITIZE_STRING));  
    $Suggest=trim(filter_input(INPUT_POST,'note',FILTER_SANITIZE_SPECIAL_CHARS));

   ob_start();
       if(!PHPMailer::validateAddress($Email)){
      echo '<script> alert("Not valid Email");</script>';
       }
        if(!isset($error_msg)){
            
          echo "<pre>";
      $message = "";
      $message .= "Name :" . $Name . "\n";
      $message .= "Email :" . $Email . "\n";
      $message .= "PhoneNumber :" . $Number . "\n";
      $message .= "I Would like to book table for :" . $Suggest . "\n";
      echo $message;
      echo "</pre>";
    }
    $data = ob_clean();



       if(!isset($error_msg)){
        $mail = new PHPMailer;
       $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->CharSet = 'utf-8';
        $mail->SMTPDebug = 0;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Username = 'shishahouse5@gmail.com';
          $mail->Password = 'Koleln@s';
        //It's important not to use the submitter's address as the from address as it's forgery,
        //which will cause your messages to fail SPF checks.
        //Use an address in your own domain as the from address, put the submitter's address in a reply-to
        $mail->setFrom('batman_tifa@hotmail.com', $Name);
        $mail->addAddress('batman_tifa@hotmail.com', 'Mekawy');
        $mail->addReplyTo($Email, $Name);
        $mail->Subject = 'Contact form: ' .$Name;
        $mail->Body = $message;
        if (!$mail->send()) {
           $error_msg= "Mailer Error: " . $mail->ErrorInfo;
           
        } else{
             echo '<pre class="text-center" style=" margin-left: 5% ; 
                          padding-top: 20%; font-weight: bold; font-size: 150%;"  >';
      $message1 = "";
      $message1 .= "Thanks " . $Name . "\n";
      $message1 .= "we just recieved your Email". "\n";
      $message1 .= " we will call you to confirm ";

       
      echo $message1."\n";

    echo "<a href='index.php' class='btn btn-success'>" ;
    echo'home';

    echo "</a>" ;


      echo "</pre>";
  
            exit();
        }

  
    
  }
}

$data = ob_clean();




    
     
?>


   


<?php if (isset($error) AND isset($_POST['submit'])) {
      echo $error;
    }  ?>
 
    
<form method="POST" action="reserve.php#Reservation"  style=" border:1px solid #e67e22">
  <div class="container">
    <h1 class="text-center "> Reservation</h1>
    <p class="text-center">Book a Table.We 'd love to have you</p>
    <hr>
    

    <label  for="name"><b>Name</b></label>
    <input type="text" placeholder="Reservation Name" name="name" required >
     <label  for="name"><b>Email</b></label>
    <input  type="text" placeholder="Email " name="Email" required>
    <label   ><b>Phone Number</b></label><br>
    <input   placeholder="Enter Phone number " name="number"  type="text" required ><br>
    
   

    <label for="psw-repeat"><b>Note</b></label>
    <!-- el>
    <input type="text "  placeholder="Number of people etc." name="note" re -->
    <textarea placeholder="Number of people , Time ,and date " cols="30" rows="3" type="text" name="note"></textarea>
 
  

    <div class="clearfix">
      
  <button  type="submit" name="submit" class="signupbtn">Submit</button>
    </div>
  </div>
</form>

        
      </div>
      
</div>
    </div>
  </div>
</section>
  <!-- >
  footer
   -->
    <div class="card text-center  footer clear-fix">
  <div class="card-header">
   Follow Us
  </div>
   <div class="container">
  <div class="row">
    <div id="footer" class="col-md-6 clear-fix">
    Address :
ul.Postępu 5
Warsaw, Poland 03-676 <a target="_blank" href="https://wego.here.com/directions/mix//Shisha-House-Bar-Restaurant,-ul.Post%C4%99pu-5,-03-676-Warsaw:e-eyJuYW1lIjoiU2hpc2hhIEhvdXNlIEJhciAmIFJlc3RhdXJhbnQiLCJhZGRyZXNzIjoidWwuUG9zdFx1MDExOXB1IDUsIFdhcnNhdywgUG9sYW5kIiwibGF0aXR1ZGUiOjUyLjE3NDQ2LCJsb25naXR1ZGUiOjIwLjk5MzkzLCJwcm92aWRlck5hbWUiOiJmYWNlYm9vayIsInByb3ZpZGVySWQiOjgzMDgyNzk5MDQ0NTAyNH0=?map=52.17446,20.99393,15,normal&fb_locale=en_US">Get Directions</a>
<br>
Number : <a href="#footer"> +48 666 666 827</a>

  

    </div>
   
    
<div class="col-md-6 ">
 
   <a class='icon' href="https://www.facebook.com/Shishahouspostepu5/" target="_blink"><img  src="img/facebook-icon.png"> facebook page</a><br>
   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<a class='icon' href="https://www.instagram.com/shishahousepostepu5/" target="_blink"><img  src="img/instagram-logo.png"> instagram</a>
   <img  src="img/halal.png" width="80" height="80">

  <br>

  </div>
    </div>
   
   

 <p  id="footer-title">&copy;<?php echo date("M,Y"); ?> Shisha House Bar & Restaurant </p>

 
   
  </div>
</div>
  <br>

  


</section>

  <!-- jquery -->
  <script src="js/jquery-3.3.1.min.js" ></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.bundle.min.js" <?php echo time(); ?>></script>
  <!-- script js -->
  <script src="js/app.js"></script>
</body>

</html>