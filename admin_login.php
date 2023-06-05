<?php
// Start session
session_start();

// Include database connection file
include ('menagdb.php');

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Generate a token
  $token = bin2hex(random_bytes(16));

  // Store the token in the session
  $_SESSION['login_token'] = $token;

  // Get email and password from form
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Prepare SQL statement
  $stmt = $pdo->prepare("SELECT * FROM admin WHERE email = :email AND password = :password");

  // Bind parameters
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':password', $password);

  // Execute query
  $stmt->execute();

  // Check if the query returned a row
  if ($stmt->rowCount() > 0) {
    // Redirect to the admin dashboard
    header("Location: admin-dashboard.php");
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
        <style>
            body {
                font-family: "Times New Roman", Georgia, Serif;
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-family: Times New Roman;
                letter-spacing: 5px;
            }
            body {
  background-image: url("assets/images/d.jpeg");
  background-size: cover;
            }
            .form-container {
              margin: 100px auto 0;
  width: 50%;
  max-width: 500px;
  background-color: #f2f2f2;
  padding: 20px;
  border-radius: 10px;
  font-family:  'Times New Roman', Georgia, Serif;
  font-size: 18px;
  letter-spacing: 4px;
 
}

form {
  display: flex;
  flex-direction: column;

}

label {
  
  margin-bottom: 5px;
}

input[type="email"],
input[type="password"] {

  padding: 10px;
  margin-bottom: 15px;
  border-radius: 5px;
  border: none;
  background-color: #e6e6e6;
}

input[type="submit"] {
  background-color: darkgrey;
  color: white;
  padding: 10px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-weight: bold;
  letter-spacing: 2px;
}

input[type="submit"]:hover {
  background-color: red;
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
            <a href="menu.php" class="w3-bar-item w3-button">Menu</a>
            <a href="portfolio.php" class="w3-bar-item w3-button">Portfolio</a>
            <a href="registeer.php" class="w3-bar-item w3-button">Rezervimet</a>
            <a href="admin_login.php" class="w3-bar-item w3-button">Administrator</a>	
            <a href="lokacioni.php" class="w3-bar-item w3-button">Lokacioni</a>				

            </div>
    </div>

<div class="form-container">
<form method="post" action="admin_login.php" >
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>

  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required>
 

  <input type="submit" value="Login">
</form>
</div>
</div>
</body>

</html>