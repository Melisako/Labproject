<?php
session_start();
include "menagdb.php";

// Validate form data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = trim($_POST['name']);
  $rating = trim($_POST['rating']);
  $comment = trim($_POST['comment']);

  if (empty($name) || empty($rating) || empty($comment)) {
    echo "Invalid input";
    exit;
  }

  // Sanitize user input
  $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
  $comment = htmlspecialchars($comment, ENT_QUOTES, 'UTF-8');

  // Insert the new menu item into the database using prepared statements
  $stmt = $pdo->prepare("INSERT INTO review (name, rating, comment) VALUES (?, ?, ?)");
  $stmt->execute([$name, $rating, $comment]);

  echo "New review added successfully";

  // Close the database connection
  $pdo = null;

  // Redirect back to the menu page
  header('Location: review.php');
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
<div class="review-container">
  <form method="post" action="add-review.php">
    <input type="hidden" name="id" value="id">
    <label for="name">Name:</label>
    <input type="text" name="name" required><br><br>
    <label for="rating">Rating:</label>
    <select name="rating" required>
      <option value="">Select rating</option>
      <option value="1">1 star</option>
      <option value="2">2 stars</option>
      <option value="3">3 stars</option>
      <option value="4">4 stars</option>
      <option value="5">5 stars</option>
    </select><br><br>
    <label for="comment">Comment:</label>
    <textarea name="comment" required></textarea><br>
    <input type="submit" value="Submit">
  </form>
</div>


</body>
</html>