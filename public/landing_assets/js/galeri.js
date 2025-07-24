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
    const currentImg = imageList[currentIndex];
    lightboxImg.src = currentImg.src;
    const lightboxCaption = document.querySelector(".caption");
    const wrapper = currentImg.closest('.image-wrapper');
    const caption = wrapper?.getAttribute('data-keterangan') || '';
    lightboxCaption.textContent = caption;
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