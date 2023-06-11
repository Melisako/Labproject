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
  $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
  
  // Update the item in the database
  $stmt = $pdo->prepare("UPDATE dbuser SET email=?, cell=?, position=? WHERE id=?");
  $stmt->execute([$email, $cell, $position, $id]);

  echo "Menu item updated successfully";
  $pdo = null;
  header('Location: admin-dashboard.php');
  exit;
}

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM apply WHERE id=?");
$stmt->execute([$id]);
$menu_item = $stmt->fetch(PDO::FETCH_ASSOC);

// Close the database connection
$pdo = null;

?>






<!DOCTYPE html>
<html>
<head>	
<meta charset="UTF-8">
<title>Mrizi</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="assets/css/main.css" />
		
<style>
     body {
      background-image: url(assets/images/aa.jpeg);
                font-family: "Times New Roman", Georgia, Serif;
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
       
            header {
	background-color: #333;
	color: #fff;
	padding: 60px;
	text-align: center;
    background-image: url("mik.jpg");

}

h1 {
	margin: 0;
}

.menu{
	display: flex;
	flex-direction: column;
	align-items: center;
	margin: 20px;
	padding: 20px;
	border: 1px solid #ccc;
	border-radius: 5px;
	transition: box-shadow 0.3s ease-in-out;
}

.menu:hover {
	box-shadow: 0px 0px 10px #ccc;
}

.menu h2 {
	font-size: 24px;
	margin: 10px 0;
}

.menu p {
	font-size: 16px;
	text-align: center;
}

.form-container input[type="submit"] {
    background-color: #4caf50;
    color: white;
    padding: 10px 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
   
  }

  .form-container input[type="submit"]:hover {
    background-color: #45a049;
  }
.form-container{

display: flex;
flex-direction: column;
justify-content: center;
margin-top: 80px;
padding: 24px;
border: 2px solid #ccc;
height: 400px;

}


.form-container input[type="text"] {

   border: 3px solid #606060;
    padding: 10px 16px;
    font-weight: bold;
    border-radius: 2px;
    cursor: pointer;
   
  }
  .form-container input[type="number"] {

border: 3px solid	#606060;
 padding: 10px 16px;
font-weight: bold;
 border-radius: 2px;
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









<!-- Display the form -->
<div class="form-container">
<form method="POST">
  <input type="hidden" name="id" value="<?php echo $menu_item['id']; ?>">
  <label for="name" style="font-size: 23px; padding-left:100px;">Email:</label>
  <input type="email" name="email" value="<?php echo $menu_item['email']; ?>" required>
  <br><br>
  <label for="pershkrimi" style="font-size: 23px; padding-left:100px ">Cell:</label>
  <input type="tel" name="cell" value="<?php echo $menu_item['cell']; ?>" required>
  <br><br>
  <label for="position">Position:</label>
<select name="position" required>
  <option value="">Select position</option>
  <option value="1" <?php if ($review['position'] == 'chef') echo 'selected'; ?>>chef</option>
  <option value="2" <?php if ($review['position'] == 'prepcook') echo 'selected'; ?>>prepcook</option>
  <option value="3" <?php if ($review['position'] == 'linecook') echo 'selected'; ?>>linecook</option>
  <option value="4" <?php if ($review['position'] == 'dishwasher') echo 'selected'; ?>>dishwasher</option>
  <option value="5" <?php if ($review['position'] == 'server') echo 'selected'; ?>>server</option>
</select>

  <input type="submit" value="Update Menu Item" style="margin-left:100px;">
</form>
</div>


</section>




</body>
</html>