<?php
// Start a session
session_start();

include "menagdb.php";

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $cell = $_POST['cell'];
   $position =$_POST['position'];

    

        // Insert the data into the database
        $sqlInsert = "INSERT INTO apply (email, cell, position) VALUES (:email, :cell, :position)";
        $statement = $pdo->prepare($sqlInsert);
        $statement->execute(array(':email' => $email, ':cell' => $cell, ':position' => $position));


        // Check if the query returned a row
        if ($statement->rowCount() > 0) {
            // Redirect to a success page
            header('Location:apply.php');
            exit();
        } else {
            echo "Not logged in";
        }
    }

?>




<!DOCTYPE html>
<html>
    <head>

		
        <title>Mrizi</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="validate/rezervimi.js"></script>
        
        
        <style>
            body {
                font-family: "Times New Roman", Georgia, Serif;
                background-image: url("assets/images/d.jpeg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-family: "Playfair Display";
                letter-spacing: 5px;
            }

            .w3-bar {
  height: 61px;
}
.w3-bar-item {
    font-size: 14px;
  }
.form-container input[]
        </style>
    </head>
<body>

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
  <a href="team.php" class="w3-bar-item w3-button">Team</a>
  <a href="lokacioni.php" class="w3-bar-item w3-button">Contact</a>
</div>
</div>

    <!-- Header -->
    <header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
        
 <!-- Start page content -->
<div class="form-container">
    <form method="post" action="apply.php" class="registration-form">
     
        <label>Email:</label>
        <input type="email" name="email" required>
     
        <label>Nr.Telefonit:</label>
        <input type="tel" name="cell" required>
     
  <br>
  <label for="position">Position:</label>
    <select name="position" required>
      <option value="">Select position</option>
      <option value="chef">Chef</option>
      <option value="linecook">Prepcook</option>
      <option value="prepcook">Linecook</option>
      <option value="dishwasher">Dishwasher</option>
      <option value="server">Server</option>
    </select>

       
        <input type="submit" name ="submit " value="Register">

    </form>
</div>
<!-- End page content -->


        <style>
       
.form-container {
    max-width: 680px;
    margin: 0 auto;
  
    background-size: cover;
    padding: 80px;
   
    box-shadow: 0px 0px 10px 5px rgba(0, 0, 0, 0.2);

    margin-top: 30px;
  }

  .registration-form label {
    display: block;
    font-family: "Georgia", serif;
    font-size: 18px;
    color: #263A29;
    margin-bottom: 10px;
  }

 
  select[name="position"] {
      padding: 10px;
      font-size: 16px;
      border: 2px solid #ccc;
      border-radius: 4px;
      background-color: #fff;
      color: #333;
    }

  .registration-form input[type="email"],
  .registration-form input[type="tel"],
  .registration-form input[type="date"],
  .registration-form input[type="number"]{
    display: block;
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 0px;
    border: none;
    font-size: 18px;
    font-family: "Georgia", serif;
    background-color: rgba(255, 255, 255, 0.7);
    color: #333;
  }

  
  .registration-form input[type="submit"] {
display: block;
margin: -20px auto;
padding: 10px 20px;
border: 3px solid #263A29;
font-size: 18px;
font-family: "Georgia", serif;
text-transform: uppercase;
cursor: pointer;
background-color: transparent; /* added background-color property with a value of transparent */
color: #263A29;
width: 200px;
height: 50px;
}

.registration-form input[type="submit"]:hover {
background-color: transparent;
color:#263A29;
}

input[type="submit"]:hover {
border: 4px solid #fff;
cursor: pointer;
}


label[for="position"]{
  padding: 20px;
}
  


  .registration-form input[type="password"]:focus,
.registration-form input[type="email"]:focus,
.registration-form input[type="cell"]:focus,
.registration-form input[type="date"]:focus {
  background-color: #fff; /* change the background color on focus */
  color: #333;
  box-shadow: 0px 0px 10px 5px rgba(0, 0, 0, 0.2);
  transition: all 0.5s ease-in-out; /* add a transition effect */
  transform: translateY(-5px); /* move the input field up */
}
.floating-label {
  position: absolute;
  pointer-events: none;
  top: 0;
  left: 0;
  transition: 0.2s ease all;
}

input:focus + .floating-label,
input:not(:placeholder-shown) + .floating-label {
  transform: translateY(-100%);
  font-size: 12px;
  color: #999;
}



</style>


</body>
</html>
