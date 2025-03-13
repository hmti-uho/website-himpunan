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

function lombaSection() {
    return {
        showContent: false,
        days: "00",
        hours: "00",
        minutes: "00",
        seconds: "00",
        init() {
            // Show content with delay
            setTimeout(() => {
                this.showContent = true;
            }, 300);

            // Set countdown date (example: 45 days from now)
            const countdownDate = new Date();
            countdownDate.setDate(countdownDate.getDate() + 45);

            // Update countdown timer
            this.updateCountdown(countdownDate);
            setInterval(() => {
                this.updateCountdown(countdownDate);
            }, 1000);
        },
        updateCountdown(countdownDate) {
            const now = new Date().getTime();
            const distance = countdownDate - now;

            if (distance > 0) {
                this.days = String(
                    Math.floor(distance / (1000 * 60 * 60 * 24))
                ).padStart(2, "0");
                this.hours = String(
                    Math.floor(
                        (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
                    )
                ).padStart(2, "0");
                this.minutes = String(
                    Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))
                ).padStart(2, "0");
                this.seconds = String(
                    Math.floor((distance % (1000 * 60)) / 1000)
                ).padStart(2, "0");
            }
        },
    };
}
