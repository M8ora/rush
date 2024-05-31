document.addEventListener('DOMContentLoaded', () => {
    const carouselImages = document.querySelectorAll('.carousel-container img');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    const slideShowImages = document.querySelectorAll('.slide-show img');
    const prevSlideBtn = document.querySelector('.prev-slide');
    const nextSlideBtn = document.querySelector('.next-slide');
    const requestBtn = document.querySelector('.request-btn');
    const modal = document.querySelector('.modal');
    const modalCloseBtn = document.querySelector('.modal-close');
  
    let currentSlide = 0;
    let slideInterval = null;
    let slideShowCurrentIndex = 0;
    const totalSlideShowImages = slideShowImages.length;
    const imagesToShow = 1.6;
  
    // Modal 
    requestBtn.addEventListener('click', () => {
        modal.classList.remove('hidden');
        modal.style.display = 'block'; // display
    });
  
    modalCloseBtn.addEventListener('click', () => {
        modal.classList.add('hidden');
        modal.style.display = 'none'; // Tago
    });
  
    // Carousel 
    const startCarousel = () => {
        slideInterval = setInterval(() => {
            currentSlide++;
            if (currentSlide === carouselImages.length) currentSlide = 0;
            carouselImages.forEach(image => image.classList.remove('active'));
            carouselImages[currentSlide].classList.add('active');
        }, 3000);
    };
  
    const stopCarousel = () => clearInterval(slideInterval);
  
    prevBtn.addEventListener('click', () => {
        currentSlide--;
        if (currentSlide < 0) currentSlide = carouselImages.length - 1;
        carouselImages.forEach(image => image.classList.remove('active'));
        carouselImages[currentSlide].classList.add('active');
    });
  
    nextBtn.addEventListener('click', () => {
        currentSlide++;
        if (currentSlide === carouselImages.length) currentSlide = 0;
        carouselImages.forEach(image => image.classList.remove('active'));
        carouselImages[currentSlide].classList.add('active');
    });
  
    // slideshow
    const updateSlideShow = () => {
        const slideShow = document.querySelector('.slide-show');
        slideShow.style.transform = `translateX(-${slideShowCurrentIndex * 100 / imagesToShow}%)`;
    };
  
    nextSlideBtn.addEventListener('click', () => {
        if (slideShowCurrentIndex < totalSlideShowImages / imagesToShow - 1) {
            slideShowCurrentIndex++;
            updateSlideShow();
        }
    });
  
    prevSlideBtn.addEventListener('click', () => {
        if (slideShowCurrentIndex > 0) {
            slideShowCurrentIndex--;
            updateSlideShow();
        }
    });
  
    updateSlideShow();
  
    startCarousel();
  });

  const body = document.querySelector("body");
  const toggleSwitch = document.querySelector(".toggle-switch");
  
  toggleSwitch.addEventListener("click", () => {
    body.classList.toggle("dark");
    toggleSwitch.classList.toggle("dark-bg");
    const toggleText = document.querySelector(".toggle-text");
    toggleText.textContent = body.classList.contains("dark") ? "Dark" : "Light";
  });
