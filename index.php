<!DOCTYPE html>
<html>
<head>
<title>Mrizi</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/main.css">

    <style>
      .mySlides {display:none;}
      body {
    margin:0;
       padding:0;
        font-family: "Times New Roman", Georgia, Serif;

        background-color: #f1f1f1;
  background-image: url("aa.jpeg");
  background-repeat: repeat;
  background-size: cover;
      }
      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
        font-family: "Playfair Display";
        letter-spacing: 8px;
      }
      .w3-bar {
  height: 61px;
 width: 1430px;
}
.w3-bar-item {
    font-size: 15px;
  }
      .button {
        display: inline-block;
        margin: 0 20px;
        padding: 50px 80px;
        background-color: #2F4F4F;
        color: black ;
        border-radius: 5px;
        text-decoration: none;
      }
      ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  line-height: 2.5;
  letter-spacing: 3px;
}
li {
  display: inline;
  margin: 0 20px;
   font-size: 21px;
     background-color: transparent; /* vintage-style background color */
  padding: 20px; /* add some padding for spacing */
  border-radius: 10px; /* round the corners of the box */
  box-shadow: 2px 2px 5px #b0b0b0; 
 
}
.wrapper {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 110px;
}
.social-icons {
  display: flex;
  font-family: Consolas, monospace; 
}
.social-icons a {
  font-family: Consolas, monospace;
  display: flex;
  align-items: center;
  margin-right: 20px;
  color: #fff;
  padding-top: 4px;

  font-size: 15px;

  text-transform: uppercase;
}
.social-icons a i {
  margin-left: 5px;
  font-size: 24px;
  animation: fadeIn 1s ease-in-out forwards;
  
}
@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(10px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
.me img {
  margin-top: -50px;
}


.meal {
  font-size: 29px;
  font-family: Consolas, monospace;
  padding-right: 75px;
  font-weight: bold;

}



    </style>
  </head>
  
  <body>
    <!-- Navbar (sit on top) -->
    <div class="navigmi-top">
  
      <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
        <a href="index.php" class="w3-bar-item w3-button">Mrizi</a>
     
       
        <!-- Right-sided navbar links. Hide them on small screens -->
        <div class="w3-right w3-hide-small">
          <a href="index.php" class="w3-bar-item w3-button">Rreth Nesh</a>
          <a href="menu.php" class="w3-bar-item w3-button">Menu</a>
          <a href="portfolio.php" class="w3-bar-item w3-button">Portfolio</a>
          <a href="registeer.php" class="w3-bar-item w3-button">Rezervimet</a>
          <a href="lokacioni.php" class="w3-bar-item w3-button">Lokacioni</a>
        </div>
      </div>
    </div>
   
    
    <!-- Header -->
    <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;min-width:1300px" id="home">
    <video autoplay loop muted plays-inline type="video/mp4">
    <source src ="video.mp4">
        </video>
   
       
        <div class="w3-display-bottomleft w3-padding-large w3-opacity">
            <h1 class="w3-xxlarge">La vie est Mrizi</h1>
        </div>
    </header>
    <!-- Page content -->
    <div class="w3-content" style="max-width:1100px">
<br><br><br><br><br><br>
        <!-- About Section -->
        <img src="images/get.jpg" alt="get" width="465" height="460" style="float: right;position: relative; bottom: -30px;">

      
            <div class="w3-col m6 w3-padding-large">
                <h1 class="w3-center">Rreth Mrizit</h1><br>
                <h5 class="w3-center">Tradition since 1889</h5>
                <p class="w3-large" style="letter-spacing: 1px;">Pasioni për gatimet shqiptare si dhe ato intra-kulturore , ne na ka shtyrë të mbledhim qindra receta personale gjatë viteve 
                    që do t'i ndaj në koleksionin tim të recetave. Ne vazhdojme të 
                    zhvillojme teknikat tona të kuzhinës çdo javë dhe do të ndajme me kënaqësi këshillat që mësojme . Ne do të përpiqemi dhe do 
                    të ofrojme ide për kursimin e kohes sa herë që është e mundur në recetat e tona për ata që do të preferonin këtë ndihmë. <span class="w3-tag w3-light-grey">
                      Perberes</span> sezonal !</p>
                <p class="w3-large w3-text-grey w3-hide-medium" style="letter-spacing: 1px;">Thelbi i gatimit te sotshem është thjeshtësia.Pavarësisht nëse ndodhemi në SHBA apo Itali, ne ende përpiqemi të vazhdojme këtë traditë të vizitës 
                      së zarzavateve tona lokale në kërkim të frymëzimit për darkën e asaj dite.</p>
            </div>
        </div>
        <br><br><br><br><br>
      
  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="menu" >


        <br><br><br>
        <h1 style="margin-left: 200px;">Orari Yne</h1>
            <div class="w3-col l6 w3-padding-large" style="margin-left: 89px; ">
            <ul class="opening-hours" style="font-size: 18px;">
              <br><br>
             
  <li><strong>Monday:</strong> 8:00 am - 9:00 pm</li><br>
  <li><strong>Tuesday:</strong> 8:00 am - 9:00 pm</li><br>
  <li><strong>Wednesday:</strong> 8:00 am - 9:00 pm</li><br>
  <li><strong>Thursday:</strong> 8:00 am - 9:00 pm</li><br>
  <li><strong>Friday:</strong> 8:00 am - 9:00 pm</li><br>
  <li><strong>Saturday:</strong> 9:00 am - 5:00 pm</li><br>
  <li><strong>Sunday:</strong> Closed </li><br>
</ul>
</div>        
 
           <div class="me">
           <img src="images/wed.jpg" alt="get" width="475" height="520" style="float: right; margin-right: 22px;">      
</div>
</div>
<br><br>
           <footer style="background-color: #333; color: #fff;">
  <div class="wrapper">
    <div class="social-icons">
      <p class="meal"> Meals nga Mrizi <p>
      <a href="https://www.facebook.com/" style="animation: fadeIn 1s ease-in-out forwards;">Facebook</a>
      <a href="https://www.instagram.com/" style="animation: fadeIn 1s ease-in-out 0.2s forwards;">Instagram</a>
      <a href="#" style="animation: fadeIn 1s ease-in-out 0.4s forwards;">Twitter<i class="fa fa-twitter"></i></a>
    </div>
    <p>&copy; Rrjetet tona Sociale.</p>
  </div>
</footer>
    
   
      </body>
</html>
