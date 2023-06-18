<?php
session_start();
include "menagdb.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id57796 = $_POST['id57796'];
  $emri57796 = trim($_POST['emri57796']);
  $mbiemri57796 = trim($_POST['mbiemri57796']);
  $BankaID = trim($_POST['BankaID']);

  if (empty($emri57796)) {
    echo "Invalid input";
    exit;
  }

  // Sanitize user input
  $emri57796 = htmlspecialchars($emri57796, ENT_QUOTES, 'UTF-8');

  // Update the item in the database
  $stmt = $pdo->prepare("UPDATE dbuser SET emri57796=?, mbiemri57796=?, BankaID=? WHERE id=?");
  $stmt->execute([$emri57796, $mbiemri57796, $BankaID, $id57796]);

  echo "Menu item updated successfully";
  $pdo = null;
  header('Location: admin-dashboard.php');
  exit;
}

$id57796 = $_GET['id57796'];
$stmt = $pdo->prepare("SELECT * FROM person57796 WHERE id57796=?");
$stmt->execute([$id57796]);
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









<div class="form-container">
  <form method="POST">
    <input type="hidden" name="id57796" value="<?php echo $menu_item['id57796']; ?>">
    <label for="name" style="font-size: 23px; padding-left:100px;">Emri:</label>
    <input type="text" name="emri57796" value="<?php echo $menu_item['emri57796']; ?>" required>
    <br><br>
    <label for="pershkrimi" style="font-size: 23px; padding-left:100px ">Mbiemri:</label>
    <input type="text" name="mbiemri57796" value="<?php echo $menu_item['mbiemri57796']; ?>" required>
    <br><br>
    <label for="price" style="font-size: 23px; padding-left:100px;">BankaID:</label>
    <input type="number" name="BankaID" step="0.01" min="0" value="<?php echo $menu_item['BankaID']; ?>" required>

    <input type="submit" value="Update Menu Item" style="margin-left:100px;">
  </form>
</div>



</section>




</body>
</html>