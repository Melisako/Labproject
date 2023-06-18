<?php
session_start();
include "menagdb.php";



function deleteProduct($id){
    global $pdo;

    $sql = "DELETE FROM adrinks WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    if ($stmt->execute()){
        return true;
    }
    else{
        return false;
    }
}

if(isset($_GET['id'])){
    $productID = $_GET['id'];
    $deleteresult = deleteProduct($productID);

    if ($deleteresult){
        echo "Succesful";
        header("Location: dashboard.php");
        exit();
    }
    else{
        echo "Failed";
    }
}
else{
    echo "Invalid ID";
}
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
    background-image: url("assets/images/mik.jpg");

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

.update-button {
  background-color: #ffa07a;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: block;
  margin: auto;
  font-size: 16px;
  cursor: pointer;
  border-radius: 8px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
}


    </style>
  </head>

</html>