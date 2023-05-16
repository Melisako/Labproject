<?php
session_start();
include "menagdb.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
  $id = $_POST['id'];
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
  
  // Update the item in the database
  $stmt = $pdo->prepare("UPDATE menu SET name=?, pershkrimi=?, price=? WHERE id=?");
  $stmt->execute([$name, $pershkrimi, $price, $id]);

  echo "Menu item updated successfully";
  $pdo = null;
  header('Location: dashboard.php');
  exit;
}

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM menu WHERE id=?");
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
        
        <link rel="stylesheet" href="css/main.css" />
		
<style>
     body {
      background-image: url(aa.jpeg);
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
        </div>
      </div>
    </div>
   
<br><br><br><br>









<!-- Display the form -->
<form method="POST">
  <input type="hidden" name="id" value="<?php echo $menu_item['id']; ?>">
  <label for="name" style="font-size: 20px; padding-left:100px">Name:</label>
  <input type="text" name="name" value="<?php echo $menu_item['name']; ?>" required>
  <br><br>
  <label for="pershkrimi" style="font-size: 20px; padding-left:100px ">Pershkrimi:</label>
  <input type="text" name="pershkrimi" value="<?php echo $menu_item['pershkrimi']; ?>" required>
  <br><br>
  <label for="price" style="font-size: 20px; padding-left:100px;">Price:</label>
  <input type="number" name="price" step="0.01" min="0" value="<?php echo $menu_item['price']; ?>" required>
  <br><br>
  <input type="submit" value="Update Menu Item" style="margin-left:100px;">
</form>


</section>




</body>
</html>