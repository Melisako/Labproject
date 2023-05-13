<?php
session_start();
include "menagdb.php";

// $sql = "SELECT * FROM menu";
// $stmt = $pdo->prepare($sql);
// $result = $pdo->query($sql);
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
    background-image: url("images/mi.jpg");

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

.price {
	font-size: 20px;
	font-weight: bold;
	margin-top: 20px;
}

</style>


<body>

<div class="w3-top">
        <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
            <a href="index.php" class="w3-bar-item w3-button">Mrizi</a>
            <!-- Right-sided navbar links. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
                <a href="index.php" class="w3-bar-item w3-button">Rreth Nesh</a>
                <a href="menu.php" class="w3-bar-item w3-button">Menu</a>
                <a href="portfolio.php" class="w3-bar-item w3-button">Portfolio</a>
                <a href="registeer.php" class="w3-bar-item w3-button">Rezervimet</a>
                <a href="lokacioni.php" class="w3-bar-item w3-button">Lokacioni</a>
     

            </div>
        </div>
    </div>
     <!-- Header -->
	 <header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Best Dishes</h1>
</header>

<section>


            <?php
                $sql = "SELECT * FROM menu";
                $result = $pdo->query($sql);


                while($row = $result->fetch(PDO::FETCH_ASSOC)){
                    echo "<div class='menu'>";
                    echo "<h2>".$row["name"]."</h2>";
                    echo "p".$row["pershkrimi"]."</p>";
                    echo "<span class='price'>".$row["price"]." $</span>";
                    echo "</div>";
                }

         
            ?>


</section>

<!-- <section>


    
    <!-- Add a new menu item form -->
    <!-- <div class="menu">
        <h2>Kotlet</h2>
        <p>A juicy cut of steak cooked to your liking.</p>
        <span class="price">$25</span>
    </div>
    <div class="menu">
        <h2>Pizza</h2>
        <p>Fresh salmon grilled with a lemon butter sauce.</p>
        <span class="price">$20</span>
    </div>
    <div class="menu">
        <h2>Pasta</h2>
        <p>Spaghetti served with your choice of sauce.</p>
        <span class="price">$15</span>
    </div>
    <div class="menu">
        <h2>Fli</h2>
        <p>Fresh salmon grilled with a lemon butter sauce.</p>
        <span class="price">$20</span>
    
    </div>
    <div class="menu">
        <h2>Sallat Caesar</h2>
        <p>Crisp romaine lettuce with croutons, parmesan cheese, and caesar dressing.</p>
        <span class="price">$10</span>
        </div>
 
    <div class="menu">
        <h2>Byrek</h2>
        <p>Fresh salmon grilled with a lemon butter sauce.</p>
        <span class="price">$20</span>
    
  
    </div>
   

  </body>

</html>
</section> --> 


</body>
</html>