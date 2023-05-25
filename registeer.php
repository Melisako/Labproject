<?php
// Start a session
session_start();

include "menagdb.php";

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Validate input and sanitize data
    $email = $_POST['email'];
   
    $cell = $_POST['cell'];
    $date = $_POST['date'];
    $guests=$_POST['guests'];    

    // Get the current date
    $current_date = date('Y-m-d');

    // Check if the selected date is equal to the current date
    if ($date != $current_date) {
        // Display an error message and prevent the data from being inserted
        header('Location: WrongDate.html');
        die(); // Stop the script
    }
    if ($guests > 10) {
      // Display an error message
      header('Location: Guests.html');
      die(); // Stop the script
  }


        // Insert the data into the database
        $sqlInsert = "INSERT INTO dbuser (email,  cell, date, guests) VALUES (:email,  :cell, :date, :guests)";
        $statement = $pdo->prepare($sqlInsert);
        $statement->execute(array(':email' => $email,  ':cell' => $cell, ':date' => $date, ':date' => $date));

        // Check if the query returned a row
        if ($statement->rowCount() > 0) {
            // Redirect to a success page
            header('Location: review.php');
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
    font-size: 15px;
  }
.form-container input[]
        </style>
    </head>
<body>

    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
            <a href="index.php" class="w3-bar-item w3-button">Mrizi</a>
            <!-- Right-sided navbar links. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
            <a href="index.php" class="w3-bar-item w3-button">Rreth Nesh</a>
                <a href="menu.php" class="w3-bar-item w3-button">Menu</a>
                <a href="Portfolio.php" class="w3-bar-item w3-button">Portfolio</a>
                <a href="registeer.php" class="w3-bar-item w3-button">Rezervo</a>
                <a href="Lokacioni.php" class="w3-bar-item w3-button">Lokacioni</a>
               
									
               
               
									

            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
        
 <!-- Start page content -->
<div class="form-container">
    <form method="post" action="registeer.php" class="registration-form">
     
        <label>Email:</label>
        <input type="email" name="email" required>
     
        <label>Nr.Telefonit:</label>
        <input type="tel" name="cell" required>
        <label>Date:</label>
        <input type="date" name="date" required>
        <label>Guests:</label>
        <input type="number" name="guests" required>
        <a href="admin_login.php" style="color: #263A29; border: 2px solid #263A29;
         position: fixed;
         bottom: 15px;
         right: 15px;
   padding: 10px 25px; border-radius: 3px; text-decoration: none; font-size: 9px;">Je Administrator ? Eja kycu</a><br>
 
 <a href="punetori_login.php" style="color: 263A29; border: 2px solid #263A29;
         position: fixed;
         bottom: 55px;
         right: 15px;
   padding: 10px 25px; border-radius: 3px; text-decoration: none; font-size: 9px;">Je Staf ? Eja kycu</a><br>
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
<script>

const inputs = document.querySelectorAll('.registration-form input');

inputs.forEach(input => {
  input.addEventListener('focus', () => {
    input.previousElementSibling.classList.add('active');
  });
  
  input.addEventListener('blur', () => {
    if (input.value === '') {
      input.previousElementSibling.classList.remove('active');
    }
  });
});


</script>