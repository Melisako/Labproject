

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
    background-image: url("assets/images/foo.jpg");

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

<div class="w3-top">
        <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
            <a href="index.php" class="w3-bar-item w3-button">Mrizi</a>
            <!-- Right-sided navbar links. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
                <a href="index.php" class="w3-bar-item w3-button">Rreth Nesh</a>
                <a href="Select.html" class="w3-bar-item w3-button">Menu</a>
                <a href="portfolio.php" class="w3-bar-item w3-button">Portfolio</a>
                <a href="registeer.php" class="w3-bar-item w3-button">Rezervimet</a>
                <a href="lokacioni.php" class="w3-bar-item w3-button">Lokacioni</a>
     

            </div>
        </div>
    </div>
     <!-- Header -->

<!-- Fetch and display data -->

<!-- Fetch and display data -->
<?php
$sql = "SELECT * FROM registration";
$result = $pdo->query($sql);

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<div class='registration'>";
    echo "<h3>Email: " . $row["email"] . "</h3>";
    echo "<p>Nr.Telefonit: " . $row["cell"] . "</p>";
    echo "<p>Date: " . $row["date"] . "</p>";
    echo "<p>Guests: " . $row["guests"] . "</p>";
    echo "</div>";
}
?>

</body>
</html>