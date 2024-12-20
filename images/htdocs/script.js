// Slideshow functionality
let currentSlide = 0;
const slides = document.querySelectorAll('.slides');

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.style.display = i === index ? 'block' : 'none';
    });
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}

// Change slide every 3 seconds
setInterval(nextSlide, 9000);
