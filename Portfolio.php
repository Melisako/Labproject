<!DOCTYPE html>
<html>
<head>
<title>Mrizi</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href ="assets/css/main.css">


    </head>
 <!-- HEAD-->


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


<style>
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
.caption {
  padding: 35px;
  background: url('wood-texture.jpg') center center fixed;
  background-size: cover;
  border-radius: 0;
  border: 1px solid #fff;
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
  color: #fff; /* White text color */
}



.caption p {
  margin: 40px;
}



</style>
    





    <!-- Slides -->
    <div class="slide">
        <img src="assets/images/steak.jpeg" alt="Kotlet">
        <div class="caption">Kotlet  </div>
    </div>
    <div class="slide">
        <img src="assets/images/risoto.jpg" alt="Pite">
        <div class="caption">Rizoto</div>
    </div>
   
    <div class="slide">
        <img src="assets/images/pasta.jpeg" alt="Pasta">
        <div class="caption">Tagliatele </div>
    </div>
 
    <div class="slide">
        <img src="assets/images/sall.jpg" alt="Sallate pule">
        <div class="caption">Sallate pule </div>
    </div>
    <div class="slide">
        <img src="assets/images/flia.jpg" alt="Flia">
        <div class="caption">Fli  </div>
    </div>
    
  
    <div class="slide">
        <img src="assets/images/piz.jpg" alt="Pizza">
        <div class="caption">Pizza </div>
    </div>
 
    <!-- Navigation arrows -->
   
</div>
<script>

class Slideshow {
  constructor(slides) {
    this.slides = slides;
    this.currentSlideIndex = 0;
    this.numSlides = slides.length;
    this.init();
  }
  init() {
    // Set initial slide
    this.showSlide(this.currentSlideIndex);
    
    // Automatically move to next slide every 3 seconds
    setInterval(() => {
      this.nextSlide();
    }, 2900);
  }
  nextSlide() {
    this.currentSlideIndex++;
    if (this.currentSlideIndex >= this.numSlides) {
      this.currentSlideIndex = 0;
    }
    this.showSlide(this.currentSlideIndex);
  }
  showSlide(index) {
    // Remove active class from all slides
    this.slides.forEach(slide => slide.classList.remove('active'));
    // Add active class to current slide
    this.slides[index].classList.add('active');
  }
}
// Usage:
const slides = document.querySelectorAll('.slide');
const slideshow = new Slideshow(slides);


</script>



</body>
</html>