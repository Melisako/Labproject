<?php
session_start();
include 'menagdb.php';
?>


<!DOCTYPE html>
<html>
<head>
<title>Mrizi</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="assets/css/main.css">
<style>
    /* Add your CSS styles here */
    body {
    font-family: "Times New Roman", Georgia, Serif;
}
.w3-bar-item {
    font-size: 14px;
  }
  .w3-bar {
  height: 72px;
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
.w3-content {
    position: relative;
}


.portfolio-item p {
  padding: 35px;
  background: url('wood-texture.jpg') center center fixed;
  background-size: cover;
  border-radius: 0;
  border: 1px solid #cccc;
  cursor: pointer;
  display: flex;
  flex-direction: column;
  font-family: 'Lucida Console', monospace;
  font-size: 40px;serif;
font-weight: bold;
 

  justify-content: center;
  align-items: center;
  position: absolute;
  text-align: center;
  top: 50%;
  left: 15%;
  transform: translate(-50%, -50%);
  transition: all 0.3s ease-in-out;
  width: 410px;
  height: 800px;
  overflow-y: auto;
  clip-path: polygon(0 0, 100% 0, 100% 90%, 50% 100%, 0 90%);
  box-shadow: inset 0px 0px 20px 10px rgba(255, 255, 255, 0.8);
  background-color: rgba(255, 255, 255, 0.7);
  color: #2F4F4F; /* White text color */
}

    /* Slideshow */
    .slideshow {
        display: flex;
        overflow: hidden;
    }

    .portfolio-item {
        flex: 0 0 100%;
        border: 1px solid rgba(255, 255, 255, 0.5);
        padding: 10px;
        margin-bottom: 20px;
    }



    .portfolio-item img {
        width: 1400px;
        height: 750px;
    }
</style>
</head>

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

    <div class="slideshow">
  <?php
  // Assuming you have already established a PDO database connection
  
  $sql = "SELECT * FROM treats";
  $result = $pdo->query($sql);
  
  while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      echo "<div class='portfolio-item'>";
      echo "<h2>" . $row["alt"] . "</h2>";
      echo "<p>" . $row["caption"] . "</p>";
      echo "<img src='assets/images/" . $row["image"] . "' alt='" . $row["alt"] . $row["caption"] ."'>";
      echo "</div>";
  }
  ?>
</div>

<script>

(function() {
  let slides = document.querySelectorAll('.slideshow .portfolio-item');
  let currentIndex = 0;

  function showSlide() {
    
    slides.forEach(slide => slide.style.display = 'none');
    slides[currentIndex].style.display = 'block';
    currentIndex = (currentIndex + 1) % slides.length;
  }

  showSlide();
  setInterval(showSlide, 3000);
})();


</script>



</body>
</html>