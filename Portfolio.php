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
    font-size: 15px;
  }
  .w3-bar {
  height: 67px;
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
        border: 1px solid #ccc;
        padding: 10px;
        margin-bottom: 20px;
    }



    .portfolio-item img {
        width: 1000px;
        height: 700px;
    }
</style>
</head>

<body>
    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
            <a href="#home" class="w3-bar-item w3-button">Mrizi</a>
            <!-- Right-sided navbar links. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
                <a href="index.php" class="w3-bar-item w3-button">Rreth Nesh</a>
                <a href="menu.php" class="w3-bar-item w3-button">Menu</a>
                <a href="portfolio.php" class="w3-bar-item w3-button">Portfolio</a>
                <a href="registeer.php" class="w3-bar-item w3-button">Rezervo</a>
                <a href="lokacioni.php" class="w3-bar-item w3-button">Lokacioni</a>
									
            </div>
        </div>
    </div>


<?php
// Assuming you have already established a PDO database connection

$sql = "SELECT * FROM portfolio";
$result = $pdo->query($sql);

echo '<div class="slideshow">'; // Start of the slideshow container

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<div class='portfolio-item'>";
    echo "<h2>" . $row["alt"] . "</h2>";
    echo "<p>" . $row["caption"] . "</p>";
    echo "<img src='" . $row["image"] . "' alt='" . $row["caption"] . "'>";
    echo "</div>";
}

echo '</div>'; // End of the slideshow container
?>


<script>

(function() {
    // Get all the portfolio items within the slideshow container
    var portfolioItems = document.querySelectorAll('.slideshow .portfolio-item');
    var currentIndex = 0;

    // Function to show the next slide
    function showNextSlide() {
        // Reset the current slide to initial position
        portfolioItems[currentIndex].style.transform = 'translateX(-100%)';
        
        // Increment the current index
        currentIndex = (currentIndex + 1) % portfolioItems.length;
        
        // Move the next slide to the visible position
        portfolioItems[currentIndex].style.transform = 'translateX(0)';
    }

    // Automatically show the next slide every 3 seconds (adjust the interval as desired)
    setInterval(showNextSlide, 4000);
})();

</script>



</body>
</html>