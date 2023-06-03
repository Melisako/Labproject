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
    }, 2700);
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