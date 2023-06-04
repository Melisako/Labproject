<?php


// Start a session

session_start();

include "menagdb.php";



// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Validate input and sanitize data

    $name=$_POST['name'];
    
    $rating=$_POST['rating'];
    $comment=$_POST['comment'];
 

$sqlInsert="Insert into review(name, rating, comment)
VALUES (:name,  :rating,:comment)";

$statement=$pdo->prepare($sqlInsert);
$statement-> execute(array(':name'=>$name,  ':rating'=>$rating,':comment'=>$comment ));

if (!$statement) {
  // Redirect to error page with message
  header('Location: error.php?msg=Unable to submit review');
  exit();
}

// Redirect to a success page
header('Location: index.php');
exit();
}

?>











<!DOCTYPE html>
<html>
  <head>
    <title>Mrizi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/main.css" />
    
   
    <style>
      .mySlides {display:none;}
      body {
        background-image:  url("assets/images/aa.jpeg");
        font-family: "Times New Roman", Georgia, Serif;
      }
      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
        font-family: "Playfair Display";
        letter-spacing: 8px;
      }
      .w3-bar {
  height: 65px;
}

.review-container form {
align-items: center;
  width: 700px;
  padding: 15px;
  justify-content: center;
  display: flex;
  flex-direction: column;
  flex-wrap: wrap;

margin-top: 4px;
margin-left: 340px;
border: 10px solid #606060;

}

.review-container label {
  width: 20%;
  margin-right: 30px;
 

}

.review-container select {
  width: 50%;
  height: 30px;
  margin-right: 20px;
}

.review-container textarea {
  width: 80%;

}
.review-container label[for="name"]{
font-size: 25px;
margin-left: 80px;
font-weight: bold;

}
.review-container label[for="comment"]{
  font-size: 25px;
  display: flex;
  flex-direction: row;
 margin-left: 76px;
font-weight: bold;
}
.review-container label[for="rating"]{
font-size: 25px;
margin-left: 50px;
font-weight: bold;
}
.review-container input[name="name"]{
background-color: transparent;
border: 3px solid #ccc;

}
.review-container select[name="rating"]{
background-color: transparent;
border: 3px solid #ccc;
}
.review-container textarea[name="comment"]{
background-color: transparent;
border: 3px solid #ccc;
font-weight: bold;
}
.review-container input[type="submit"]{
background-color: transparent;
border: 5px solid #ccc;
font-weight: bold;
padding: 5px;
font-size: 20px;
}
.fa {
  display: inline-block;

}
.star{
margin-right: 19px;

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
          <a href="lokacioni.php" class="w3-bar-item w3-button">Lokacioni</a>
         
        </div>
      </div>
    </div>
  
    
    <div class="w3-container">
  <h2>Slideshow Caption</h2>
  
</div>



<br><br>


      <div class="review-container">
      <form method="post" action="review.php">
  
  <br><br>
  <label for="name">Emri:</label>
  <input type="text" name="name" required>
  <br><br>
  <label for="rating">Rate Us:</label><div class="star" style="display: flex;">
  <span class="fa fa-star"></span>
  <span class="fa fa-star"></span>
  <span class="fa fa-star"></span>
  <span class="fa fa-star"></span>
  <span class="fa fa-star"></span>
</div>


  <br>
  <select name="rating" required>
  
    <option value="">Selekto rating</option>
    <option value="1">1 star</option>
    <option value="2">2 stars</option>
    <option value="3">3 stars</option>
    <option value="4">4 stars</option>
    <option value="5">5 stars</option>
  </select>
  <br><br>
  <label for="comment">Koment:</label>
  <textarea name="comment" required></textarea>
  <br>
  <input type="submit" value="Dergoje">
</form>

</div>











<script>


function submitReview() {
  const rating = document.querySelector('input[name="rating"]:checked').value;
  const comment = document.getElementById("comment").value;
  console.log(`Rating: ${rating}, Comment: ${comment}`);
  // send the data to server or do something else with it
}








reviewsForm.addEventListener('submit', function(e) {
  e.preventDefault();
  
  const name = this.elements['name'].value;
  const email = this.elements['email'].value;
  const rating = rating.getAttribute('data-rating');
  const comment = this.elements['comment'].value;
  
  const reviewItem = document.createElement('li');
  reviewItem.classList.add('review-item');
  
  const reviewName = document.createElement('h4');
  reviewName.innerText = name;
  reviewItem.appendChild

}
)
  </script>

  </body>
  </html>