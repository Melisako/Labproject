<?php
session_start();
include "menagdb.php";

// Validate form data
if($_SERVER['REQUEST_METHOD']=='POST'){
  $image = trim($_POST['image']);
  $alt = trim($_POST['alt']);
  $caption = trim($_POST['caption']);
  

  // Sanitize user input
  $alt = htmlspecialchars($alt, ENT_QUOTES, 'UTF-8');
  $caption = htmlspecialchars($caption, ENT_QUOTES, 'UTF-8');
  
  // Insert the new menu item into the database using prepared statements
  $stmt = $pdo->prepare("INSERT INTO pdrinks (image, alt, caption) VALUES (?, ?, ?)");
  $stmt->execute([$image, $alt, $caption]);

  echo "New menu item added successfully";
  
  // Close the database connection
  $pdo = null;
  
  // Redirect back to the menu page
  header('Location: pdrinks.php');
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
    <link rel="stylesheet" href ="assets/css/main.css">
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
  .w3-content {
    position: relative;
}
.caption {
  padding: 35px;
  background: url('wood-texture.jpg') center center fixed;
  background-size: cover;
  border-radius: 0;
  border: 1px solid #fff;
  cursor: pointer;
  display: flex;
  flex-direction: column;
  font-family: 'Lucida Console', monospace;
  font-size: 40px;serif;
font-weight: bold;
 

  justify-content: center;
  align-items: center;
  position: absolute;
  text-align: center;
  top: 50%;
  left: 15%;
  transform: translate(-50%, -50%);
  transition: all 0.3s ease-in-out;
  width: 410px;
  height: 800px;
  overflow-y: auto;
  clip-path: polygon(0 0, 100% 0, 100% 90%, 50% 100%, 0 90%);
  box-shadow: inset 0px 0px 20px 10px rgba(255, 255, 255, 0.8);
  background-color: rgba(255, 255, 255, 0.7);
  color: #fff; /* White text color */
}



.caption p {
  margin: 40px;
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
<form method="POST" >

 
<label for="image">Image:</label>
<input type="file" id="image" name="image" required accept="asstes/images/image/*">

<img id="preview" alt="Preview" style="display: none; max-width: 200px;">

  <br><br>
  <label for="pershkrimi" style ="font-size: 23px;">Alt:</label>
  <input type="text" name="alt" required>
  <br><br>
  <label for="price" style ="font-size: 23px;">Caption:</label>
  <input type="text" name="caption" required>
  <br><br>
  <input type="submit" value="Shto Produktin">
</form>




</body>
</html>