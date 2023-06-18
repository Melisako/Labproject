<?php
session_start();
include "menagdb.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
  $id = $_POST['id'];
  $email = trim($_POST['email']);
  $cell = trim($_POST['cell']);
  $position = trim($_POST['position']);
  
  if(empty($email) || empty($cell) || empty($position)){
    echo "Invalid input";
    exit;
  }
  

  // Sanitize user input
 
  $email = htmlspecialchars($comment, ENT_QUOTES, 'UTF-8');

  // Insert the new menu item into the database using prepared statements
  $stmt = $pdo->prepare("INSERT INTO apply (email, cell, position) VALUES (?, ?, ?)");
  $stmt->execute([$email, $cell, $position]);

  echo "New user added successfully";

  // Close the database connection
  $pdo = null;

  // Redirect back to the menu page
  header('Location: admin-dashboard.php');
  exit;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Mrizi</title>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
      body {
        font-family: "Times New Roman", Georgia, Serif;
        background-image: url("assets/images/aa.jpeg");
      }
      
      h1, h2, h3, h4, h5, h6 {
        font-family: "Playfair Display";
        letter-spacing: 5px;
      }

      form {
    background-color: #f2f2f2;
    padding: 40px;
    border: 1px solid #ccc;
  }

  label {
    display: block;
    margin-bottom: 10px;
  }

  input[type="text"], input[type="number"] {
    padding: 5px;
    border-radius: 5px;
  }

  input[type="submit"] {
    background-color: gray;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  
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
          <a href="Select.html" class="w3-bar-item w3-button">Menu</a>
          <a href="portfolio.php" class="w3-bar-item w3-button">Portfolio</a>
          <a href="registeer.php" class="w3-bar-item w3-button">Rezervimet</a>
        </div>
      </div>
    </div>
   
<br><br><br><br>
<div class="form-container">
    <form method="post" action="registeer.php" class="registration-form">
     
        <label>Email:</label>
        <input type="email" name="email" required>
     
        <label>Nr.Telefonit:</label>
        <input type="tel" name="cell" required>
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

</body>
</html>