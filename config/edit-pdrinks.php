<?php

session_start();
include "menagdb.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_POST['id'];
  $image = $_FILES['image'];
  $alt = trim($_POST['alt']);
  $caption = trim($_POST['caption']);
  
  // Sanitize user input
  $alt = htmlspecialchars($alt, ENT_QUOTES, 'UTF-8');
  $caption = htmlspecialchars($caption, ENT_QUOTES, 'UTF-8');
  

    
    // Update the item in the database
    $stmt = $pdo->prepare("UPDATE pdrinks SET image=?, alt=?, caption=? WHERE id=?");
    $stmt->execute([$image['name'], $alt, $caption, $id]);
    
    echo "Portfolio item updated successfully";
    $pdo = null;
    header('Location: pdrinks.php');
    exit;
  } else {
    // Failed to move the uploaded file
    // Handle the error accordingly
    echo "Failed to upload the image";
  }

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM pdrinks WHERE id=?");
$stmt->execute([$id]);
$portfolio_item = $stmt->fetch(PDO::FETCH_ASSOC);

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

.form-container input[type="file"] {
  color: rgba(22,22,22,0.5); 


  }


.form-container input[type="text"] {

   border: 3px solid #606060;
    padding: 10px 16px;
    font-weight: bold;
    border-radius: 2px;
    cursor: pointer;
   
  }
  .form-container input[type="caption"] {

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
<form method="POST" >
<input type="hidden" name="id" value="<?php echo $portfolio_item['id']; ?>">
<label for="image" style="font-size: 23px; padding-left: 100px;">Image:</label>
<input type="file" name="image" id="image" value="<?php echo $portfolio_item['image']; ?>" required>

  <br><br>
  <label for="alt" style="font-size: 23px; padding-left:100px ">Alt:</label>
  <input type="text" name="alt" value="<?php echo $portfolio_item['alt']; ?>" required>
  <br><br>
  <label for="caption" style="font-size: 23px; padding-left:100px;">Caption:</label>
  <input type="text" name="caption"  value="<?php echo $portfolio_item['caption']; ?>" required>
  <br><br>
  <input type="submit" value="Update Gallery Items" style="margin-left:100px;">
</form>
</div>


</section>




</body>
</html>