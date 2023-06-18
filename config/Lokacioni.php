<?php


// Start a session

session_start();

include "menagdb.php";



// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Validate input and sanitize data

    $name=$_POST['Name'];
    $comment=$_POST['Message'];
 

$sqlInsert="Insert into lokacioni(name,comment)
VALUES (:name,:comment)";

$statement=$pdo->prepare($sqlInsert);
$statement-> execute(array(':name'=>$name,':comment'=>$comment ));

if (!$statement) {
  // Redirect to error page with message
  header('Location: error.php?msg=Unable to submit lokacioni');
  exit();
}

// Redirect to a success page
header('Location: index.php');
exit();
}

?>






<!DOCTYPE html>
<html>
  <head>
    <title>Mrizi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
      .mySlides {display:none;}
      body {
        font-family: "Times New Roman", Georgia, Serif;
        background-image: url("assets/images/aa.jpeg");
      }
      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
        font-family: "Playfair Display";
        letter-spacing: 8px;
        color : #2F4F4F
      }
      .slider-image {
  position: absolute;
  top: 0;
  left: 0;
  height: 88%;
  width: 100%;
  opacity: 0;
  transition: opacity 1s ease-in-out;
}

    .w3-bar-item {
    
        font-size: 13px;
      }

.slider-image.active {
  opacity: 1;
}


.slider {
  position: relative;
  height: 100px;
  width: 150%;
  overflow: hidden;
  border: 10px white;
  border-radius: 20px;
}
.texti {
  position: absolute;
  top: 470px;
  left: 0;
  width: 105%;
 
  text-align: center;
  font-size: 18px;
  font-family: "Times New Roman", Georgia, Serif;
  color: #333;
  padding: 10px;
  background-color: #f5f5f5;
  border: 1px solid #ddd;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
  letter-spacing: 4.3px;
}

  p {
    font-family: "Times New Roman", Georgia, Serif;
    letter-spacing: 2px;
    line-height: 1.2;
  }
  .animated-image {
  animation-name: move-image;
  animation-duration: 2s;
  animation-timing-function: ease-in-out;
  animation-iteration-count: infinite;
}

@keyframes move-image {
  0% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10px);
  }
  100% {
    transform: translateY(0);
  }
}












.location-image {
  width: 300px;
  height: 200px;
  position: relative;
}

.location-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.location-image a {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}


.container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
     
        width: 1300px;
      }
      .about-mrizi {
        background-color: #fafafa;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        padding: 20px;
        max-width: 800px;
        width: 100%;
      }


      
      </style>
      </head>
     
  
     <!-- Navbar (sit on top) -->
     <div class="navigmi-top">
  
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px; ">
    <a href="index.php" class="w3-bar-item w3-button">Mrizi</a>

<div class="navv" style="padding-left: 650px">
<a href="index.php" class="w3-bar-item w3-button">Rreth Nesh</a>
<div class="w3-dropdown-hover">
<button class="w3-button" style="  font-family: Playfair Display;
    letter-spacing: 4px;">Menu</button>
<div class="w3-dropdown-content w3-bar-block">
  <a href="Select2.html" class="w3-bar-item w3-button">FOOD</a>
  <a href="alcoholic.html" class="w3-bar-item w3-button">DRINKS</a>
  <a href="SelectBakery.html" class="w3-bar-item w3-button">BAKERY</a>
  <!-- Add more submenu links here if needed -->
</div>
</div>
<a href="registeer.php" class="w3-bar-item w3-button">Rezervimet</a>
<a href="SelectEvent.html" class="w3-bar-item w3-button">Event</a>

<a href="lokacioni.php" class="w3-bar-item w3-button">Contact</a>
</div>
    <header>
  <div class="slider-container">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5909.483896731428!2d20.740173224319022!3d42.21995961226521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x135395a705b8e14b%3A0xd558e19f4aba3162!2sBazhdarhane%2C%20Prizren!5e0!3m2!1sen!2s!4v1680873593637!5m2!1sen!2s" width="1395" height="470" style="border:0; " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="texti">
  <h3>Contact&Location</h3>
</div>

</header>

<br><br>
<body>






<div class="container">
      <div class="about-mrizi">
    
        <br>
 
        <!-- Contact Section -->
    
<div class="w3-container w3-padding-64" id="contact">
     
    

<div style="display: flex; align-items: center;">
<i class="fa fa-map-marker" style="font-size: 24px; color: #2c3e50; margin-right: 10px;"></i>
  <p class="w3-text-blue-grey w3-large"><b>Bazhderhane, Josip Rela, 43043 , Prizren</b></p>
  </div>

  <div style="display: flex; align-items: center; margin-bottom: 20px;">
  <i class="fa fa-phone" style="font-size: 24px; color: #2c3e50; margin-right: 10px;"></i>
  <a href="tel:+38349100100"  class = "w3-text-blue-grey w3-large" style="color: #2c3e50; text-decoration: none; font-size: 18px; font-weight: bold; margin-right: 20px;"> +38349-100-100</a>
  <i class="fa fa-phone" style="font-size: 24px; color: #2c3e50; margin-right: 10px;"></i>
  <a href="tel:+38344100100"  class = "w3-text-blue-grey w3-large" style="color: #2c3e50; text-decoration: none; font-size: 18px; font-weight: bold;">+38344-100-100</a>
</div>
            <p>Ne ofrojmë shërbim të plotë për çdo ngjarje, të madhe apo të vogël. Ne i kuptojmë nevojat tuaja dhe do të kujdesemi
                 ushqimi për të përmbushur kriteret më të mëdha nga të gjitha, si pamjen ashtu edhe shijen. Mos hezitoni te kontaktoni
                 ne.</p>
                 <div class ="w3-text-blue-grey w3-large" >
  <i class="fa fa-envelope" style="font-size: 24px; color: #2c3e50; margin-right: 10px;"></i>
  <a href="mailto:mrizi@yahoo.com" class = "w3-text-blue-grey w3-large" style="color: #2c3e50; text-decoration: none; font-size: 18px; font-weight: bold; margin-right: 20px;"> mrizi@yahoo.com</a>
  </div>
            <p>Ju mund te na kontaktoni ne keta numra +38344100100 dhe +38349100100 ose email mrizi@yahoo.com, or you can send us a
                message here:</p>

                <form method="post" action="lokacioni.php">
              <input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name">
   
                <input class="w3-input w3-padding-16" type="text" placeholder="Message \ Special requirements"
                        required name="Message"></p>
                <button class="w3-button w3-light-grey w3-section" type="submit">SEND MESSAGE</button>
     

        <!-- End page content -->
    </div>

        <div style="padding-right: 200px;">
       

          </form>
        </div>
 
</div>
      </div>
    </div>
<br>
<br>
<br>
<br>





</body>
        </html>