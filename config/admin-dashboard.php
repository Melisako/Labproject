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
.table-image {
        width: 100px; /* Adjust the width as desired */
        height: 100px; /* Adjust the height as desired */
        object-fit: cover; /* Preserve aspect ratio and cover the entire space */
        border-radius: 50%; /* Apply rounded corners */
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.3); /* Add a subtle shadow */
    }

    .h3{
      display: inline-block;
      padding: 6px 12px;
      background-color: #4caf50;
      color: white;
      text-decoration: none;
      border-radius: 4px;

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
	 <header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Admin - Dashboard</h1>
</header>

<section>
<h3 class="h3">SEE MENU</h3>
<table>
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Alt</th>
        <th>Caption</th>
        <th>Actions</th>
    </tr>
    
    <?php
$sql = "SELECT * FROM portfolio";
$result = $pdo->query($sql);


while($row = $result->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td><img src='assets/images/" . $row["image"] . "' alt='Image' class='table-image'></td>";


    echo "<td>".$row["alt"]."</td>";
    echo "<td>".$row["caption"]." </td>";
    echo "<td>
    <a href='edit-gallery.php?id=".$row["id"]."' class='button'>Edit</a>
    <a href='delete-gallery.php?id=".$row["id"]."' class='button'>Delete</a>
    <a href='add-gallery.php?id=".$row["id"]."' class='button'>Create</a>
  </td>";

  
    // echo "<a href='edit_item.php?id=".$row["id"].">";
    echo "</tr>";
}


?>
</table>
<br>
<h3 class="h3">RESERVATIONS</h3>
<table>
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Nr.Telefonit</th>
        <th>Date</th>
        <th>Guests</th>
        <th>Actions</th>
    </tr>
    
    <?php
    $sql = "SELECT * FROM dbuser";
    $result = $pdo->query($sql);

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["cell"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "<td>" . $row["guests"] . "</td>";
        echo "<td>
                  <a href='edit-r.php?id=".$row["id"]."' class='button'>Edit</a>
                  <a href='delete-r.php?id=".$row["id"]."' class='button'>Delete</a>
                  <a href='add-r.php?id=".$row["id"]."' class='button'>Create</a>
              </td>";
        echo "</tr>";
    }
    ?>
</table>
<br>
<h3 class="h3">SEE LOCATION</h3>
<table>
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Nr.Telefonit</th>
        <th>Date</th>
        <th>Guests</th>
        <th>Actions</th>
    </tr>
    

    <?php
$sql = "SELECT * FROM lokacioni";
$result = $pdo->query($sql);

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["comment"] . "</td>";
    echo "<td>
              <a href='edit-location.php?id=".$row["id"]."' class='button'>Edit</a>
              <a href='delete-location.php?id=".$row["id"]."' class='button'>Delete</a>
              <a href='add-location.php?id=".$row["id"]."' class='button'>Create</a>
          </td>";
    echo "</tr>";
}
?>


</table>
<br>
<h3 class="h3">EVENTS</h3>
<table>
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Nr.Telefonit</th>
        <th>Date</th>
        <th>Guests</th>
        <th>Actions</th>
    </tr>
    
    <?php
    $sql = "SELECT * FROM event";
    $result = $pdo->query($sql);

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["cell"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "<td>" . $row["guests"] . "</td>";
        echo "<td>
                  <a href='edit-event.php?id=".$row["id"]."' class='button'>Edit</a>
                  <a href='delete-event.php?id=".$row["id"]."' class='button'>Delete</a>
                  <a href='add-event.php?id=".$row["id"]."' class='button'>Create</a>
              </td>";
        echo "</tr>";
    }
    ?>
</table> 

<h3 class="h3">SEE PUBLIC-EVENTS</h3>
<table>
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Alt</th>
        <th>Caption</th>
        <th>Actions</th>
    </tr>
    
    <?php
$sql = "SELECT * FROM public";
$result = $pdo->query($sql);


while($row = $result->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td><img src='assets/images/" . $row["image"] . "' alt='Image' class='table-image'></td>";


    echo "<td>".$row["alt"]."</td>";
    echo "<td>".$row["caption"]." </td>";
    echo "<td>
    <a href='edit-public.php?id=".$row["id"]."' class='button'>Edit</a>
    <a href='delete-public.php?id=".$row["id"]."' class='button'>Delete</a>
    <a href='add-public.php?id=".$row["id"]."' class='button'>Create</a>
  </td>";

  
    // echo "<a href='edit_item.php?id=".$row["id"].">";
    echo "</tr>";
}
?>
</table> 
<h3 class="h3">SEE PRIVATE-EVENTS</h3>
<table>
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Alt</th>
        <th>Caption</th>
        <th>Actions</th>
    </tr>
    
    <?php
$sql = "SELECT * FROM private";
$result = $pdo->query($sql);


while($row = $result->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td><img src='assets/images/" . $row["image"] . "' alt='Image' class='table-image'></td>";


    echo "<td>".$row["alt"]."</td>";
    echo "<td>".$row["caption"]." </td>";
    echo "<td>
    <a href='edit-private.php?id=".$row["id"]."' class='button'>Edit</a>
    <a href='delete-private.php?id=".$row["id"]."' class='button'>Delete</a>
    <a href='add-private.php?id=".$row["id"]."' class='button'>Create</a>
  </td>";

  
    // echo "<a href='edit_item.php?id=".$row["id"].">";
    echo "</tr>";
}
?>
</table>
<br>

<h3 class="h3">SEE OUTDOOR-EVENTS</h3>
<table>
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Alt</th>
        <th>Caption</th>
        <th>Actions</th>
    </tr>
    
    <?php
$sql = "SELECT * FROM outdoor";
$result = $pdo->query($sql);


while($row = $result->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td><img src='assets/images/" . $row["image"] . "' alt='Image' class='table-image'></td>";


    echo "<td>".$row["alt"]."</td>";
    echo "<td>".$row["caption"]." </td>";
    echo "<td>
    <a href='edit-outdoor.php?id=".$row["id"]."' class='button'>Edit</a>
    <a href='delete-outdoor.php?id=".$row["id"]."' class='button'>Delete</a>
    <a href='add-outdoor.php?id=".$row["id"]."' class='button'>Create</a>
  </td>";

  
    // echo "<a href='edit_item.php?id=".$row["id"].">";
    echo "</tr>";
}
?>
</table>
<br>
<h3 class="h3">PUBLIC RESERVATION</h3>
<table>
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Nr.Telefonit</th>
        <th>Date</th>
        <th>Guests</th>
        <th>Actions</th>
    </tr>
    
    <?php
    $sql = "SELECT * FROM rprivate";
    $result = $pdo->query($sql);

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["cell"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "<td>" . $row["guests"] . "</td>";
        echo "<td>
                  <a href='edit-reservation-public.php?id=".$row["id"]."' class='button'>Edit</a>
                  <a href='delete-reservation-public.php?id=".$row["id"]."' class='button'>Delete</a>
                  <a href='add-reservation-public.php?id=".$row["id"]."' class='button'>Create</a>
              </td>";
        echo "</tr>";
    }
    ?>
</table>

<br>
<h3 class="h3">PRIVATE RESERVATION</h3>
<table>
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Nr.Telefonit</th>
        <th>Date</th>
        <th>Guests</th>
        <th>Actions</th>
    </tr>
    
    <?php
    $sql = "SELECT * FROM rprivate";
    $result = $pdo->query($sql);

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["cell"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "<td>" . $row["guests"] . "</td>";
        echo "<td>
                  <a href='edit-reservation-public.php?id=".$row["id"]."' class='button'>Edit</a>
                  <a href='delete-reservation-public.php?id=".$row["id"]."' class='button'>Delete</a>
                  <a href='add-reservation-public.php?id=".$row["id"]."' class='button'>Create</a>
              </td>";
        echo "</tr>";
    }
    ?>
</table>
<br>
<h3 class="h3">OUTDOOR RESERVATION</h3>
<table>
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Nr.Telefonit</th>
        <th>Date</th>
        <th>Guests</th>
        <th>Actions</th>
    </tr>
    
    <?php
    $sql = "SELECT * FROM routdoor";
    $result = $pdo->query($sql);

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["cell"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "<td>" . $row["guests"] . "</td>";
        echo "<td>
                  <a href='edit-reservation-outdoor.php?id=".$row["id"]."' class='button'>Edit</a>
                  <a href='delete-reservation-outdoor.php?id=".$row["id"]."' class='button'>Delete</a>
                  <a href='add-reservation-outdoor.php?id=".$row["id"]."' class='button'>Create</a>
              </td>";
        echo "</tr>";
    }
    ?>
</table>
<br>

<h3 class="h3">SEE OUR TEAM</h3>
<table>
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Alt</th>
        <th>Caption</th>
        <th>Actions</th>
    </tr>
    
    <?php
$sql = "SELECT * FROM team";
$result = $pdo->query($sql);


while($row = $result->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td><img src='assets/images/" . $row["image"] . "' alt='Image' class='table-image'></td>";


    echo "<td>".$row["alt"]."</td>";
    echo "<td>".$row["caption"]." </td>";
    echo "<td>
    <a href='edit-team.php?id=".$row["id"]."' class='button'>Edit</a>
    <a href='delete-team.php?id=".$row["id"]."' class='button'>Delete</a>
    <a href='add-team.php?id=".$row["id"]."' class='button'>Create</a>
  </td>";

  
    // echo "<a href='edit_item.php?id=".$row["id"].">";
    echo "</tr>";
}
?>
</table>
<br>
<h3 class="h3">APPLICATIONS</h3>
<table>
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Nr.Telefonit</th>
        <th>Position</th>
      
        <th>Actions</th>
    </tr>
    
    <?php
    $sql = "SELECT * FROM apply";
    $result = $pdo->query($sql);

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["cell"] . "</td>";
        echo "<td>" . $row["position"] . "</td>";
        echo "<td>
                  <a href='edit-apply.php?id=".$row["id"]."' class='button'>Edit</a>
                  <a href='delete-apply.php?id=".$row["id"]."' class='button'>Delete</a>
                  <a href='add-apply.php?id=".$row["id"]."' class='button'>Create</a>
              </td>";
        echo "</tr>";
    }
    ?>
</table>
<br>
<h3 class="h3">SEE GOODS</h3>
<table>
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Alt</th>
        <th>Caption</th>
        <th>Actions</th>
    </tr>
    
    <?php
$sql = "SELECT * FROM bakery";
$result = $pdo->query($sql);


while($row = $result->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td><img src='assets/images/" . $row["image"] . "' alt='Image' class='table-image'></td>";


    echo "<td>".$row["alt"]."</td>";
    echo "<td>".$row["caption"]." </td>";
    echo "<td>
    <a href='edit-bakery.php?id=".$row["id"]."' class='button'>Edit</a>
    <a href='delete-bakery.php?id=".$row["id"]."' class='button'>Delete</a>
    <a href='add-bakery.php?id=".$row["id"]."' class='button'>Create</a>
  </td>";

  
    // echo "<a href='edit_item.php?id=".$row["id"].">";
    echo "</tr>";
}
?>
</table>
<br>
<h3 class="h3">SEE TREATS</h3>
<table>
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Alt</th>
        <th>Caption</th>
        <th>Actions</th>
    </tr>
    
    <?php
$sql = "SELECT * FROM treats";
$result = $pdo->query($sql);


while($row = $result->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td><img src='assets/images/" . $row["image"] . "' alt='Image' class='table-image'></td>";


    echo "<td>".$row["alt"]."</td>";
    echo "<td>".$row["caption"]." </td>";
    echo "<td>
    <a href='edit-treat.php?id=".$row["id"]."' class='button'>Edit</a>
    <a href='delete-treat.php?id=".$row["id"]."' class='button'>Delete</a>
    <a href='add-treat.php?id=".$row["id"]."' class='button'>Create</a>
  </td>";

  
    // echo "<a href='edit_item.php?id=".$row["id"].">";
    echo "</tr>";
}
?>
</table>
<br>

<h3 class="h3">SEE Banka57796</h3>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
       
        <th>Actions</th>
    </tr>
    
    <?php
$sql = "SELECT * FROM Banka57796";
$result = $pdo->query($sql);



    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row["ID57796"] . "</td>";
        echo "<td>" . $row["Emri57796"] . "</td>";
     
        echo "<td>
                  <a href='edit-banka57796.php?id=".$row["ID57796"]."' class='button'>Edit</a>
                  <a href='delete-banka57796.php?id=".$row["ID57796"]."' class='button'>Delete</a>
                  <a href='add-Banka57796.php?id=".$row["ID57796"]."' class='button'>Create</a>
              </td>";
        echo "</tr>";
    }
    ?>
</table>
<br>
<h3 class="h3">SEE Banka57796</h3>
<table>
    <tr>
        <th>ID</th>
        <th>Emri57796</th>
        <th>Mbiemri</th>
        <th>BanakID</th>
      
        <th>Actions</th>
    </tr>
    
    <?php
    $sql = "SELECT * FROM person57796";
    $result = $pdo->query($sql);

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row["id57796"] . "</td>";
        echo "<td>" . $row["emri57796"] . "</td>";
        echo "<td>" . $row["mbiemri57796"] . "</td>";
        echo "<td>" . $row["BankaID"] . "</td>";
        echo "<td>
                  <a href='edit-personi57796.php?id=".$row["id57796"]."' class='button'>Edit</a>
                  <a href='delete-personi57796.php?id=".$row["id57796"]."' class='button'>Delete</a>
                  <a href='add-personi57796.php?id=".$row["id57796"]."' class='button'>Create</a>
              </td>";
        echo "</tr>";
    }
    ?>
</table>
</section>

</body>
</html>
