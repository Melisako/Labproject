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
    background-image: url("images/food.jpg");

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

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

</style>


<body>

<div class="w3-top">
        <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
            <a href="index.php" class="w3-bar-item w3-button">Mrizi</a>
            <!-- Right-sided navbar links. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
                <a href="index.php" class="w3-bar-item w3-button">Rreth Nesh</a>
                <a href="prova.php" class="w3-bar-item w3-button">Menu</a>
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
<h1>Dashboard</h1>
</header>

<section>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>
    
            <?php
                        $sql = "SELECT * FROM menu";
                        $result = $pdo->query($sql);

        
                        while($row = $result->fetch(PDO::FETCH_ASSOC)){
                            echo "<tr>";
                            echo "<td>".$row["id"]."</td>";
                            echo "<td>".$row["name"]."</td>";
                            echo "<td>".$row["pershkrimi"]."</td>";
                            echo "<td>".$row["price"]." $</td>";
                            echo "<td><a href='edit_item.php?id=".$row["id"]."'>Edit</a></td>";
                            // echo "<a href='edit_item.php?id=".$row["id"].">";
                            echo "</tr>";
                        }

                      
            ?>
</table>
            
</section>

</body>
</html>
