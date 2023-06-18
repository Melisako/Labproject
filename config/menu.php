<?php
session_start();
include "menagdb.php";


?>

<!DOCTYPE html>

<html>
<head>	
<meta charset="UTF-8">
<title>Mrizi</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="asset/css/style.css">
        <link rel="stylesheet" href="assets/css/main.css" />
		
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
                font-family: "Playfair Display";
                letter-spacing: 5px;
            }
       
            header {
	background-color: #333;
	color: #fff;
	padding: 80px;
	text-align: center;
    background-image: url("assets/images/foodi.jpg");

}
.w3-bar {
      
      height: 61px;
     width: 1300px;
    }
    .w3-bar-item {
    
        font-size: 13px;
      }
h1 {
    padding-top: 40px;
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

.price {
	font-size: 20px;
	font-weight: bold;
	margin-top: 20px;
}

</style>


<body>

    <!-- Navbar (sit on top) -->
    <div class="navigmi-top">
  
      <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px; ">
        <a href="index.php" class="w3-bar-item w3-button">Mrizi</a>
 
<div class="navv" style="padding-left: 650px">
  <a href="index.php" class="w3-bar-item w3-button">Rreth Nesh</a>
  <div class="w3-dropdown-hover">
    <button class="w3-button" style="  font-family: Playfair Display;
        letter-spacing: 4px;">Menu</button>
    <div class="w3-dropdown-content w3-bar-block">
      <a href="Select2.html" class="w3-bar-item w3-button">FOOD</a>
      <a href="alcoholic.html" class="w3-bar-item w3-button">DRINKS</a>
      <a href="SelectBakery.html" class="w3-bar-item w3-button">BAKERY</a>
      <!-- Add more submenu links here if needed -->
    </div>
  </div>
  <a href="registeer.php" class="w3-bar-item w3-button">Rezervimet</a>
  <a href="SelectEvent.html" class="w3-bar-item w3-button">Event</a>
  <a href="team.php" class="w3-bar-item w3-button">Team</a>
  <a href="lokacioni.php" class="w3-bar-item w3-button">Contact</a>
</div>
</div>
    </div>
     <!-- Header -->
	 <header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
	
</head>
<body>
<h1>NON-VEGETARIAN</h1>
</header>

<section>


            <?php
                $sql = "SELECT * FROM menu";
                $result = $pdo->query($sql);


                while($row = $result->fetch(PDO::FETCH_ASSOC)){
                    echo "<div class='menu'>";
                    echo "<h2>".$row["name"]."</h2>";
                    echo "<p>".$row["pershkrimi"]."</p>";
                    echo "<span class='price'>".$row["price"]." $</span>";
                    echo "</div>";
                }

         
            ?>


</section>



</html>
</section>


</body>
</html>