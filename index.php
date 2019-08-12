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
      <a class="navbar-brand" href="#home"><img src="img/svg.png" width="60" height="60" alt="Shisha House"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav">
        <span class="toggler-icon"><i class="fas fa-bars"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="myNav">
        <ul class="navbar-nav mx-auto text-capitalize">
          <li class="nav-item active">
            <a class="nav-link" href="#home">home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#about">about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#store">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reserve.php#Reservation" >visit Us</a>
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
          <a href="reserve.php#Reservation" class="btn banner-link text-uppercase my-2">Make Reservation</a>

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




    <!--end of  banner  -->
  </header>
  <!-- header -->
  <!-- about us -->
  <section class="about py-5" id="about">
    <div class="container">

      <div class="row">
        <div class="col-10 mx-auto col-md-6 my-5">
          <h1 class="text-capitalize">about <strong class="banner-title text-dark">us</strong></h1>
          <p class="my-4  w-75">

Prawdziwa Egipska kuchnia charakteryzująca się urozmaiconymi, mocno przyprawionymi, smacznymi i pożywnymi posiłkami. Prócz przepysznych orientalnych dań posiadamy w ofercie niesamowitą sziszę w 124 kombinacjach smakowych i szeroką gamę alkoholi.

   <br><br>


 - at Shisha House Bar & Restaurant -.
</p>
          <a href="reserve.php#Reservation" class="btn btn-outline-secondary btn-black text-uppercase ">Reserve Now </a>

        </div>
        <div class="col-10 mx-auto col-md-6 align-self-center my-5">
          <div class="about-img__container">
            <img src="img/About.jpg"    class="img-thumbnail "  alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end of about us -->


  <!-- store -->
  <section id="store" class="store py-5">
    <div class="container">
      <!-- section title -->
      <div class="row">
        <div class="col-10 mx-auto col-sm-6 text-center">
          <h1 class="text-capitalize text-dark">our <strong class="banner-title text-dark ">store</strong></h1>
        </div>
      </div>
      <!-- end of section title -->
      <!--filter buttons -->
      <div class="row">
        <div class=" col-lg-8 mx-auto d-flex justify-content-around my-2 sortBtn flex-wrap">
          <a href="#GR" class="btn btn-outline-secondary btn-black text-uppercase filter-btn m-2" data-filter="all">Our bar</a>
          <a href="#GR" class="btn btn-outline-secondary btn-black text-uppercase filter-btn m-2" data-filter="cakes">Grill</a>
          <a href="#OR" class="btn btn-outline-secondary btn-black text-uppercase filter-btn m-2" data-filter="cupcakes">oriental</a>
          <a href="#DR" class="btn btn-outline-secondary btn-black text-uppercase filter-btn m-2" data-filter="sweets">Drinks</a>
          <a href="#SH" class="btn btn-outline-secondary btn-black text-uppercase filter-btn m-2" data-filter="doughnuts">Shisha</a>
        </div>
      </div>
      
      <!--end of filter buttons -->
      <!-- store  items-->
      <div class="row" class="store-items" id="GR store-items">
        <!-- single item -->

        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
          <div class="card ">
            <div class="img-container">
              <img src="img/Grill.jpg" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
          shish kebab of Middle Eastern cuisine served with sides and sauces
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">shish Twook</h5>
                <h5 class="store-item-value">28 <strong id="store-item-price" class="font-weight-bold">PLN</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item cupcakes" data-item="cupcakes">
          <div class="card ">
            <div class="img-container">
              <img src="img/grill4.jpg" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                kofta and kebab in the middle easter way is different and tasty lamb shish kebab
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">shish kababs</h5>
                <h5 class="store-item-value">30<strong id="store-item-price" class="font-weight-bold">PLN</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item cakes" data-item="cakes">
          <div class="card ">
            <div class="img-container">
              <img src="img/grill5.jpg" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                Ryash served with two sides 

              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">Ryash</h5>
                <h5 class="store-item-value">45 <strong id="store-item-price" class="font-weight-bold">PLN</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item doughnuts" id="OR" data-item="dougnuts">
          <div class="card ">
            <div class="img-container">
              <img src="img/oriental1.jpg" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                Our amazying breakfast falafel beans and eggs<br> 
                More in the menu
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">Oriental breakfast</h5>
                <h5 class="store-item-value">12 <strong id="store-item-price" class="font-weight-bold">PLN</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
          <div class="card ">
            <div class="img-container">
              <img src="img/hawashi.jpg"  class="card-img-top store-img" alt="">
              <span class="store-item-icon">
               meat inside Bread with our secret spices
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">Hawashii </h5>
                <h5 class="store-item-value">25 <strong id="store-item-price" class="font-weight-bold">PLN</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item cupcakes" data-item="cupcakes">
          <div class="card ">
            <div class="img-container">
              <img src="img/oriental-3.jpg" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                rice /brown lentil/ pasta/ onions / chili /tomato sauce all mixed together 
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">Koshari</h5>
                <h5 class="store-item-value">20<strong id="store-item-price" class="font-weight-bold">PLN</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item cakes"  data-item="cakes">
          <div class="card ">
            <div class="img-container">
              <img src="img/shisha1.jpg" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                Group with shisha is the best company ever let's experience it in our place 
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name"> Group shisha with wisky </h5>
                <h5 class="store-item-value">35<strong id="store-item-price" class="font-weight-bold">PLN</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item doughnuts" data-item="dougnuts">
          <div class="card ">
            <div class="img-container">
              <img src="img/juice.JPG" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                Mango, Apple ,kiwi, Limon ,and alot more 
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">shisha house Smothies</h5>
                <h5 class="store-item-value">10 <strong id="store-item-price" class="font-weight-bold">PLN</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" id="SH" data-item="sweets">
          <div class="card ">
            <div class="img-container">
              <img src="img/shisha.JPG" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                Our shisha menu has different Types shisha classic , shisha house special one of the best flavours with the middle east touch ,and my favourite alko shisha with wodka and whisky .
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">Shisha</h5>
                <h5 class="store-item-value">25 <strong id="store-item-price" class="font-weight-bold">PLN</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item cupcakes" data-item="cupcakes">
          <div class="card ">
            <div class="img-container">
              <img src="img/D-2.JPG" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                traditional Arab dessert made with thin noodle-like pastry, or alternatively fine semolina dough, soaked in sweet, sugar-based syrup, and typically layered with cheese, or with other ingredients such as clotted cream or nuts
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">Kunafa</h5>
                <h5 class="store-item-value">15 <strong id="store-item-price" class="font-weight-bold">PLN</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item cakes" data-item="cakes">
          <div class="card ">
            <div class="img-container">
              <img src="img/D-1.JPG" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                Tahini, is a condiment made from toasted ground hulled sesame. Tahini is served as a dip
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">Tahini</h5>
                <h5 class="store-item-value">8 <strong id="store-item-price" class="font-weight-bold">PLN</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
        <!-- single item -->
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item doughnuts" data-item="dougnuts">
          <div class="card ">
            <div class="img-container">
              <img src="img/D-3.jpg" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
               baked pastry with milk ,sugar and topped with crunchy nuts
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">Om ALi</h5>
                <h5 class="store-item-value">15 <strong id="store-item-price" class="font-weight-bold">PLN</strong></h5>

              </div>
            </div>


          </div>
          <!-- end of card-->
        </div>
        <!--end of single store item-->

      </div>
  </section>
  

  <!-- modal-container -->
<div  class="customer">
  <div class="container">
       <h3 class="text-center text-white mt-5">OUR CUSTUMERS REVIEWS </h3>
    <div class="row">
      <!-- single-service -->  
      <div class=" col-md-4 mx-auto text-center my-3">
        
        <h6 >👍👍</h6>
        
        <p class="text-white">Polecam restauracje SHISHA HOUSE na Mokotowie na ul. Postepu 5.
Super miejsce ze smaczna kuchnia Srodziemnomorska a dla palacych prawdziwy raj z fajkami wodnymi.
Szkoda ze nie pale, ale zapach w lokalu jest bardzo przyjemny.
Jesli bedziecie polecam rybe z grilla oraz szysz tawook z kusmacznego rczaka i jeszcze jedno: takiego humusu jeszcze nie jadlem.
Porcje ogromne za nieduza kase.
A herbata z roznymi przyprawami lagodzi slodkie ciasteczka.</p>
<img src="img/cus2.jpg"  class="CUSTUMERS-image mb-2 img-thumbnail rounded" alt="bread-icon">
      </div>

  
    <!-- single-service --> 
          <div class=" col-md-4 mx-auto text-center my-3">
        
        <h6 class="">👍👍</h6>
        
        <p class="text-white">Świetna lokalizacja, pyszne egipskie jedzenie z świeżych produktów. Oryginalne potrawy pełne smaków i aromatów. Ja taką kuchnie uwielbiam, dlatego Shisha House to moje miejsce numer jeden w stolicy. Przytulna aranżacja, dobra obsługa, a Shisha najlepsza w Polsce. <3 </p>
          <img src="img/cus1.jpg"  class="CUSTUMERS-image  img-thumbnail" alt="bread-icon">
      </div>

    <!-- single-service --> 
    
      <div class=" col-md-4 mx-auto text-center my-3">
       <h6 class="">👍👍</h6>
        
        <p class="text-white">Najlepszy grill i shisha w Warszawie! 😋 Świeżo i pysznie! Polecam wszystkie na pysznie dani z grila w shisha House bar & resturant pod adresem Postępu 5 i na najlepszy shisha w Warszawie ❤️❤️❤️ </p>
        <img src="img/cus3.jpg"  class="CUSTUMERS-image mb-2 img-thumbnail rounded" alt="bread-icon">
      </div>
</div>  
  </div>
</div>
<section class="py-2" id="DR">
  <!--end of store items -->
   <div class="container Drinks-section my-5 ">
    <h2 class="text-center py-2">Welcome to our bar</h2>
    <h5 class="text-center ">Come grab a drink and watch all the matches in our two big screens one of the best places to enjoy your drink</h5>
  <div class="row" class="store-items" id="GR store-items">

 <!-- card -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3" style="width: 18rem;">
  <img class="card-img-top" src="img/wodka.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title text-center">Wodka</h5>
    <p class="card-text">You will find all the cocktails you want in our bar  Jack + cola 20,
-Gin + tonic 20,
 Whisky Sour 20,
Wódka Sour 20,
 Cuba Libre 20,
 Mohito 20,
Sex on the beach 22, 
 Krwawa Mary 20, 
Pina Colada 24,
 Aperol Spritz 22,
 Tequila Sunrise 22, 
Gin Basil Smash 24, 
 Long Island Ice Tea 26, 
 Jagerbomb 25,.</p>
    <h5 class="store-item-value text-center">20 <strong id="store-item-price" class="font-weight-bold">PLN</strong></h5>
  </div>
</div>
<!-- end card -->
<!-- card -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3" style="width: 18rem;">
  <img class="card-img-top" src="img/whiskey.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title text-center">Whiskey</h5>
    <p class="card-text">A variant of the whiskey sour Jack D. is the Ward 8, which often is based on bourbon or rye whiskey, and includes both lemon and orange juices, and grenadine syrup as the sweetener. The egg white sometimes employed in other whiskey sours is not usually included.</p>
    <h5 class="store-item-value text-center">20 <strong id="store-item-price" class="font-weight-bold">PLN</strong></h5>
  </div>
</div>
<!-- end card -->
<!-- card -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3" style="width: 18rem;">
  <img class="card-img-top" src="img/shoots.jpg" height="350" width="350"  alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title text-center">Rainbow shoots</h5>
    <p class="card-text">Enjoy our Rainbow shoots in all kinds Kamikaze Blue 20,
Kamikaze Green 20,
Kamikaze Yellow 20,
Kamikaze Red 20,
Wściekły Pies 10 </p>
    <h5 class="store-item-value text-center">20 <strong id="store-item-price" class="font-weight-bold">PLN</strong></h5>
  </div>
</div>
<!-- end card -->
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