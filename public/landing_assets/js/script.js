
// Enhanced Mobile Menu Functionality
document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menuToggle');
    const sidebarMenu = document.getElementById('sidebarMenu');
    const overlay = document.getElementById('overlay');
    const body = document.body;

    // Mobile Menu Toggle
    menuToggle.addEventListener('click', function (e) {
        e.stopPropagation();
        sidebarMenu.classList.toggle('active');
        overlay.classList.toggle('active');
        body.classList.toggle('no-scroll');

        // Change icon
        const icon = menuToggle.querySelector('i');
        if (sidebarMenu.classList.contains('active')) {
            icon.classList.remove('fa-bars');
            icon.classList.add('fa-times');
        } else {
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        }
    });

    // Close menu when clicking outside
    overlay.addEventListener('click', function () {
        sidebarMenu.classList.remove('active');
        overlay.classList.remove('active');
        body.classList.remove('no-scroll');
        menuToggle.querySelector('i').classList.remove('fa-times');
        menuToggle.querySelector('i').classList.add('fa-bars');
    });

    // Close menu when clicking on a link
    const sidebarLinks = document.querySelectorAll('.sidebar-menu a');
    sidebarLinks.forEach(link => {
        link.addEventListener('click', function () {
            sidebarMenu.classList.remove('active');
            overlay.classList.remove('active');
            body.classList.remove('no-scroll');
            menuToggle.querySelector('i').classList.remove('fa-times');
            menuToggle.querySelector('i').classList.add('fa-bars');
        });
    });

    // Prevent body scroll when menu is open
    function preventBodyScroll(prevent) {
        if (prevent) {
            body.style.overflow = 'hidden';
            body.style.height = '100vh';
        } else {
            body.style.overflow = '';
            body.style.height = '';
        }
    }

    // Simple Slider Functionality
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.slider-dot');
    let currentSlide = 0;
    let slideInterval;

    // Function to change slide
    function changeSlide(newSlide) {
        slides[currentSlide].classList.remove('active');
        dots[currentSlide].classList.remove('active');

        currentSlide = (newSlide + slides.length) % slides.length;

        slides[currentSlide].classList.add('active');
        dots[currentSlide].classList.add('active');
    }

    // Dot click event
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            changeSlide(index);
            resetSlideInterval();
        });
    });

    // Auto slide change every 5 seconds
    function startSlideInterval() {
        slideInterval = setInterval(() => {
            changeSlide(currentSlide + 1);
        }, 5000);
    }

    function resetSlideInterval() {
        clearInterval(slideInterval);
        startSlideInterval();
    }

    startSlideInterval();

    // Pause slider on hover (for desktop)
    if (window.innerWidth > 767) {
        const slider = document.querySelector('.hero-slider');
        slider.addEventListener('mouseenter', () => {
            clearInterval(slideInterval);
        });

        slider.addEventListener('mouseleave', () => {
            startSlideInterval();
        });
    }

    // Clickable phone numbers
    const phoneNumbers = document.querySelectorAll('.clickable-phone');
    phoneNumbers.forEach(number => {
        number.addEventListener('click', function () {
            window.location.href = 'tel:6281218473429';
        });

        // Add visual feedback
        number.addEventListener('touchstart', function () {
            this.style.transform = 'scale(0.95)';
        });

        number.addEventListener('touchend', function () {
            this.style.transform = '';
        });
    });

    // Back to Top Button
    const backToTopButton = document.querySelector('.back-to-top');

    window.addEventListener('scroll', function () {
        if (window.pageYOffset > 300) {
            backToTopButton.style.opacity = '1';
            backToTopButton.style.visibility = 'visible';
        } else {
            backToTopButton.style.opacity = '0';
            backToTopButton.style.visibility = 'hidden';
        }
    });

    backToTopButton.addEventListener('click', function () {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Add touch effect for buttons on mobile
    const buttons = document.querySelectorAll('.btn, .service-btn, .sidebar-contact-btn');
    buttons.forEach(button => {
        button.addEventListener('touchstart', function () {
            this.style.transform = 'scale(0.95)';
            this.style.opacity = '0.9';
        });

        button.addEventListener('touchend', function () {
            this.style.transform = '';
            this.style.opacity = '';
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const slider = document.querySelector('.lawyers-slider');
    const prevBtn = document.querySelector('.slider-prev');
    const nextBtn = document.querySelector('.slider-next');
    const cards = document.querySelectorAll('.lawyer-card');
    let currentIndex = 0;
    let autoSlideInterval;
    let cardWidth = 100; // Default to 100% for mobile
    let cardsToShow = 1; // Default to 1 card for mobile

    function updateCardWidth() {
        // Check screen width to determine how many cards to show
        if (window.innerWidth >= 992) {
            cardsToShow = 3;
            cardWidth = 100 / cardsToShow;
        } else if (window.innerWidth >= 768) {
            cardsToShow = 2;
            cardWidth = 100 / cardsToShow;
        } else {
            cardsToShow = 1;
            cardWidth = 100;
        }

        // Update all cards' flex basis
        cards.forEach(card => {
            card.style.flex = `0 0 ${cardWidth}%`;
        });

        // Show/hide navigation arrows based on screen size
        if (cardsToShow < cards.length) {
            prevBtn.style.display = 'block';
            nextBtn.style.display = 'block';
        } else {
            prevBtn.style.display = 'none';
            nextBtn.style.display = 'none';
        }
    }

    // Clone first few cards and append to end for infinite loop
    function cloneCards() {
        const cardsToClone = Math.min(cardsToShow, cards.length);
        const firstCards = Array.from(cards).slice(0, cardsToClone).map(card => card.cloneNode(true));
        firstCards.forEach(card => slider.appendChild(card));
    }

    function updateSlider() {
        slider.style.transform = `translateX(-${currentIndex * cardWidth}%)`;
    }

    function nextSlide() {
        currentIndex++;
        if (currentIndex > cards.length) {
            // When we reach the cloned cards, instantly jump back to start
            currentIndex = 0;
            slider.style.transition = 'none';
            updateSlider();
            // Force reflow
            void slider.offsetWidth;
            slider.style.transition = 'transform 0.5s ease';
        }
        updateSlider();
    }

    function prevSlide() {
        currentIndex--;
        if (currentIndex < 0) {
            // When we go before first card, jump to cloned cards at end
            currentIndex = cards.length;
            slider.style.transition = 'none';
            updateSlider();
            // Force reflow
            void slider.offsetWidth;
            slider.style.transition = 'transform 0.5s ease';
        }
        updateSlider();
    }

    // Auto slide every 3 seconds
    function startAutoSlide() {
        autoSlideInterval = setInterval(nextSlide, 3000);
    }

    function stopAutoSlide() {
        clearInterval(autoSlideInterval);
    }

    // Event listeners
    nextBtn.addEventListener('click', function () {
        stopAutoSlide();
        nextSlide();
        startAutoSlide();
    });

    prevBtn.addEventListener('click', function () {
        stopAutoSlide();
        prevSlide();
        startAutoSlide();
    });

    // Pause auto slide on hover
    slider.addEventListener('mouseenter', stopAutoSlide);
    slider.addEventListener('mouseleave', startAutoSlide);

    // Handle window resize
    window.addEventListener('resize', function () {
        updateCardWidth();
        updateSlider();
    });

    // Initialize
    updateCardWidth();
    cloneCards();
    updateSlider();
    startAutoSlide();
});

const images = document.querySelectorAll('.mansory-gallery img');
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.querySelector('.lightbox-img');
const closeBtn = document.querySelector('.lightbox .close');
const prevBtn = document.querySelector('.nav.prev');
const nextBtn = document.querySelector('.nav.next');

let currentIndex = 0;
let imageList = Array.from(images);

images.forEach((img, index) => {
    img.addEventListener('click', () => {
        currentIndex = index;
        showImage();
    });
});

function showImage() {
    lightbox.style.display = 'flex';
    lightboxImg.src = imageList[currentIndex].src;
}

function closeLightbox() {
    lightbox.style.display = 'none';
}

function showPrev() {
    currentIndex = (currentIndex - 1 + imageList.length) % imageList.length;
    showImage();
}

function showNext() {
    currentIndex = (currentIndex + 1) % imageList.length;
    showImage();
}

closeBtn.addEventListener('click', closeLightbox);
prevBtn.addEventListener('click', showPrev);
nextBtn.addEventListener('click', showNext);

// Optional: close lightbox on outside click
lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox) closeLightbox();
});

// Optional: keyboard navigation
document.addEventListener('keydown', (e) => {
    if (lightbox.style.display === 'flex') {
        if (e.key === 'ArrowLeft') showPrev();
        if (e.key === 'ArrowRight') showNext();
        if (e.key === 'Escape') closeLightbox();
    }
});