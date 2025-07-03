import "./bootstrap";

document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.getElementById("navbar");
    const navTitle = document.getElementById("nav-title");
    const navSubtitle = document.getElementById("nav-subtitle");
    const navLinks = document.querySelectorAll(".nav-link");
    const mobileNavLinks = document.querySelectorAll(".mobile-nav-link");
    const mobileMenu = document.getElementById("mobile-menu");
    const mobileMenuButton = document.getElementById("mobile-menu-button");

    function updateNavbar() {
        if (window.scrollY > 50) {
            // Saat di-scroll
            navbar.classList.add("bg-white", "shadow");
            navTitle.classList.remove("text-white");
            navTitle.classList.add("text-gray-800");
            navSubtitle.classList.remove("text-gray-200");
            navSubtitle.classList.add("text-gray-600");

            // Update semua link navbar (desktop)
            navLinks.forEach((link) => {
                link.classList.remove("text-white");
                link.classList.add("text-gray-900");
            });

            // Update semua link navbar (mobile)
            mobileNavLinks.forEach((link) => {
                link.classList.remove("text-white");
                link.classList.add("text-gray-800");
            });

            // Update warna ikon hamburger
            mobileMenuButton.classList.remove("text-white");
            mobileMenuButton.classList.add("text-gray-800");
        } else {
            // Saat di posisi awal (transparan)
            navbar.classList.remove("bg-white", "shadow");
            navTitle.classList.remove("text-gray-800");
            navTitle.classList.add("text-white");
            navSubtitle.classList.remove("text-gray-600");
            navSubtitle.classList.add("text-gray-200");

            // Update semua link navbar (desktop)
            navLinks.forEach((link) => {
                link.classList.remove("text-gray-900");
                link.classList.add("text-white");
            });

            // Update semua link navbar (mobile)
            mobileNavLinks.forEach((link) => {
                link.classList.remove("text-gray-800");
                link.classList.add("text-white");
            });

            // Update warna ikon hamburger
            mobileMenuButton.classList.remove("text-gray-800");
            mobileMenuButton.classList.add("text-white");
        }
    }

    updateNavbar();

    // Jalankan saat scroll
    window.addEventListener("scroll", updateNavbar);

    // Toggle menu mobile
    mobileMenuButton.addEventListener("click", function () {
        mobileMenu.classList.toggle("hidden");
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("animate-slide-in-left");
                entry.target.classList.remove("opacity-0");
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    document.querySelectorAll("#about-left, #about-right").forEach(el => {
        observer.observe(el);
    });

    let currentSlide = 0;
    const slides = document.querySelectorAll("#carousel > div");
    const dots = document.querySelectorAll("#carousel button[id^='dot-']");

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle("hidden", i !== index);
        });
        dots.forEach((dot, i) => {
            dot.classList.toggle("bg-yellow-400", i === index);
            dot.classList.toggle("bg-gray-300", i !== index);
        });
    }

    document.getElementById("prev-slide").addEventListener("click", () => {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    });

    document.getElementById("next-slide").addEventListener("click", () => {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    });

    dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            currentSlide = index;
            showSlide(currentSlide);
        });
    });

    // Initialize first slide
    showSlide(currentSlide);
});

