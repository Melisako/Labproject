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
	padding: 60px;
	text-align: center;
    background-image: url("assets/images/mi.jpg");

}

h1 {
	margin: 0;
}

  .edit-button,
  .delete-button {
    display: inline-block;
    padding: 5px 10px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    margin-right: 5px;
  }
  
  .edit-button:hover,
  .delete-button:hover {
    background-color: #0056b3;
  }

.menu{
	display: flex;
	flex-direction: column;
	align-items: center;
	margin: 20px;
	padding: 20px;
	border: 2px solid #ccc;
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
.button {
  background-color: #696969;
  padding: 5px 10px;
  text-decoration: none;
  border: 2px solid #696969;
  color: #fff;
  margin-left: 10px;
  
}
h3 {
  display: inline-block;
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  text-decoration: none;
  border-radius: 4px;
  cursor: pointer;
}



    /* CSS styles for the table */
    table.drinks {
      width: 100%;
      border-collapse: collapse;
    }

    table.drinks th,
    table.drinks td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    table.drinks th {
      background-color: #f2f2f2;
    }

    /* CSS styles for the review */
    .review {
      margin-bottom: 20px;
    }

    .rating {
      margin-bottom: 10px;
    }

    .rating .fa {
      color: orange;
    }
    
    .checked {
      color: orange;
    }

    .button {
      display: inline-block;
      padding: 6px 12px;
      background-color: #4caf50;
      color: white;
      text-decoration: none;
      border-radius: 4px;
    }

    .table-image {
    width: 50px; /* Adjust the size as needed */
    height: 50px; /* Adjust the size as needed */
    border-radius: 50%;
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
<h1>Staf - Dashboard</h1>
</header>

<section>
<h3>See Food</h3>
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
    echo "<td>
    <a href='edit_item.php?id=".$row["id"]."' class='button'>Edit</a>
    <a href='delete_items.php?id=".$row["id"]."' class='button'>Delete</a>
    <a href='add_menu.php?id=".$row["id"]."' class='button'>Create</a>
  </td>";

  
    // echo "<a href='edit_item.php?id=".$row["id"].">";
    echo "</tr>";
}


?>

</table>
<br>
<h3>See Non-Alcoholic-Drinks</h3>
<table class="drinks">
  
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>
    
    <?php
$sql = "SELECT * FROM drinks";
$result = $pdo->query($sql);


while($row = $result->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["name"]."</td>";
    echo "<td>".$row["pershkrimi"]."</td>";
    echo "<td>".$row["price"]." $</td>";
    echo "<td>
    <a href='edit_drink.php?id=".$row["id"]."' class='button'>Edit</a>
    <a href='delete_drink.php?id=".$row["id"]."' class='button'>Delete</a>
    <a href='add_drink.php?id=".$row["id"]."' class='button'>Create</a>
  </td>";

  
    // echo "<a href='edit_item.php?id=".$row["id"].">";
    echo "</tr>";
}


?>
</table>
<br>
<h3>See Alcoholic-Drinks</h3>
<table class="drinks">
  
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>
    
    <?php
$sql = "SELECT * FROM adrinks";
$result = $pdo->query($sql);


while($row = $result->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["name"]."</td>";
    echo "<td>".$row["pershkrimi"]."</td>";
    echo "<td>".$row["price"]." $</td>";
    echo "<td>
    <a href='edit-alcoholic.php?id=".$row["id"]."' class='button'>Edit</a>
    <a href='delete-alcoholic.php?id=".$row["id"]."' class='button'>Delete</a>
    <a href='add-alcoholic.php?id=".$row["id"]."' class='button'>Create</a>
  </td>";

  
    // echo "<a href='edit_item.php?id=".$row["id"].">";
    echo "</tr>";
}


?>
</table>
            <br>
            <h3>See Vegetarian-Food</h3>
<table class="drinks">
  
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>
    
    <?php
$sql = "SELECT * FROM vfood";
$result = $pdo->query($sql);


while($row = $result->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["name"]."</td>";
    echo "<td>".$row["pershkrimi"]."</td>";
    echo "<td>".$row["price"]." $</td>";
    echo "<td>
    <a href='edit-vfood.php?id=".$row["id"]."' class='button'>Edit</a>
    <a href='delete-vfood.php?id=".$row["id"]."' class='button'>Delete</a>
    <a href='add-vfood.php?id=".$row["id"]."' class='button'>Create</a>
  </td>";

  
    // echo "<a href='edit_item.php?id=".$row["id"].">";
    echo "</tr>";
}


?>
</table>
<br>

<h3>See Review</h3>
  <table class="drinks">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Description</th>
      <th>Price</th>
      <th>Actions</th>
    </tr>
    <?php
    $sql = "SELECT * FROM review";
    $result = $pdo->query($sql);

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      echo "<tr>";
      echo "<td>" . $row["id"] . "</td>";
      echo "<td>" . $row["name"] . "</td>";
      echo "<td>" . $row["rating"] . "</td>";
      echo "<td>" . $row["comment"] . "</td>";
      echo "<td>
        <a href='edit-review.php?id=" . $row["id"] . "' class='button'>Edit</a>
        <a href='delete-review.php?id=" . $row["id"] . "' class='button'>Delete</a>
        <a href='add-review.php?id=" . $row["id"] . "' class='button'>Create</a>
      </td>";
      echo "</tr>";
    }
    ?>
</table>
<h3 class="h3">SEE PORTFOLIO-DRINKS</h3>
<table>
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Alt</th>
        <th>Caption</th>
        <th>Actions</th>
    </tr>
    
    <?php
$sql = "SELECT * FROM pdrinks";
$result = $pdo->query($sql);


while($row = $result->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td><img src='assets/images/" . $row["image"] . "' alt='Image' class='table-image'></td>";


    echo "<td>".$row["alt"]."</td>";
    echo "<td>".$row["caption"]." </td>";
    echo "<td>
    <a href='edit-pdrinks.php?id=".$row["id"]."' class='button'>Edit</a>
    <a href='delete-pdrinks.php?id=".$row["id"]."' class='button'>Delete</a>
    <a href='add-pdrinks.php?id=".$row["id"]."' class='button'>Create</a>
  </td>";

  
    // echo "<a href='edit_item.php?id=".$row["id"].">";
    echo "</tr>";
}


?>
</table>
</section>

</body>
</html>
