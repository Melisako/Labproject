<!DOCTYPE html>
<html>
<head>
<title>Mrizi</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/main.css">
<script src="assets/js/slideshow2.js"></script>
<link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">


    <style>
      .mySlides {display:none;}
      body {
    margin:0;
       padding:0;
        font-family: "Times New Roman", Georgia, Serif;

        background-color: rgb(245, 245, 245);
  background-image: url("assets/images/aa.jpeg");
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
  height: 69px;
  width: 100%; /* Set the width as needed */
}

.w3-bar-item {
  font-size: 13.5px;
  display: inline-block; /* Add this line to display the items horizontally */
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




.image {
 
    position: relative;
  text-align: center; 

}

.slide-image {
  width: 100%; /* Ensure the image doesn't exceed its container */
  height: auto; /* Maintain the image's aspect ratio */
  border: 1px solid #ccc; /* Add a border to the image */
  border-radius: 5px; /* Apply rounded corners to the image */
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add a box shadow to the image */
 
  height: 560px; /* Add some bottom margin for spacing */
}

.caption {
    padding: 35px;
  background: url('wood-texture.jpg') center center fixed;
  background-size: cover;
  border-radius: 0;
  border: 9px solid #cccc;
  cursor: pointer;
  display: flex;
  flex-direction: column;
  font-family: 'Satisfy', cursive;

  font-size: 40px;serif;
font-weight: bold;
padding-top: 600px;



  position: absolute;
  text-align: center;
  top: 50%;
  left: 15%;
  transform: translate(-50%, -50%);
  transition: all 0.3s ease-in-out;
  width: 410px;
  height: 1000px;
  overflow-y: auto;
  clip-path: polygon(0 0, 100% 0, 100% 90%, 50% 100%, 0 90%);
  box-shadow: inset 0px 0px 20px 10px rgba(255, 255, 255, 0.8);
  background-color: rgba(255, 255, 255, 0.7);
  color: #2F4F4F; /* White text color */
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
        <a href="register-event.php" class="w3-bar-item w3-button" style=" 
     

  background-color: #4CAF50;
  color: white;
  text-decoration: none;
  border-radius: 20px;
  transition: background-color 0.3s ease;
  border: 3px solid #4e704e; padding: 8px;">Inquire Event</a>
          <a href="index.php" class="w3-bar-item w3-button">Rreth Nesh</a>
          <a href="Select.html" class="w3-bar-item w3-button"><span>Menu</span></a>
      
          <a href="lokacioni.php" class="w3-bar-item w3-button">Lokacioni</a>
        </div>
      </div>
    </div>

    <div class="image">
  <img name="slide" class="slide-image">
  <div class="caption-container">
    <div class="caption"></div>
  </div>
</div>














    </body>
    </html>