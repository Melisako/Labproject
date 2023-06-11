<?php
session_start();
include "menagdb.php";

// Validate form data
if($_SERVER['REQUEST_METHOD']=='POST'){
  $name = trim($_POST['name']);
  $pershkrimi = trim($_POST['pershkrimi']);
  $price = floatval($_POST['price']);
  
  if(empty($name) || empty($pershkrimi) || $price <= 0){
    echo "Invalid input";
    exit;
  }
  
  // Sanitize user input
  $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
  $pershkrimi = htmlspecialchars($pershkrimi, ENT_QUOTES, 'UTF-8');
  
  // Insert the new menu item into the database using prepared statements
  $stmt = $pdo->prepare("INSERT INTO adrinks (name, pershkrimi, price) VALUES (?, ?, ?)");
  $stmt->execute([$name, $pershkrimi, $price]);

  echo "New menu item added successfully";
  
  // Close the database connection
  $pdo = null;
  
  // Redirect back to the menu page
  header('Location: alcoholic.php');
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
<form method="POST">
  <input type="hidden" name="operation" value="create">
  <label for="name">Name:</label>
  <input type="text" name="name" required>
  <br><br>
  <label for="pershkrimi">Pershkrimi:</label>
  <input type="text" name="pershkrimi" required>
  <br><br>
  <label for="price">Price:</label>
  <input type="number" name="price" step="0.01" min="0" required>
  <br><br>
  <input type="submit" value="Shto Produktin">
</form>






</body>
</html>