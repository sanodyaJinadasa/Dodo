

// window.addEventListener("scroll", function () {
//     const navbar = document.querySelector(".navbar");
//     if (window.scrollY > 50) {
//         navbar.classList.add("scrolled");
//     } else {
//         navbar.classList.remove("scrolled");
//     }
// });

const menuToggle = document.getElementById("menu-toggle");
const navMenu = document.getElementById("nav-menu");
const menuBackdrop = document.getElementById("menu-backdrop");
const navLinks = document.querySelectorAll("nav ul li a");

// Toggle mobile menu
function toggleMenu() {
    navMenu.classList.toggle("active");
    menuToggle.classList.toggle("active");
    menuBackdrop.classList.toggle("active");

    // Toggle hamburger icon
    const icon = menuToggle.querySelector("i");
    if (navMenu.classList.contains("active")) {
        icon.classList.replace("fa-bars", "fa-times");
    } else {
        icon.classList.replace("fa-times", "fa-bars");
    }
}

// Close mobile menu
function closeMenu() {
    navMenu.classList.remove("active");
    menuToggle.classList.remove("active");
    menuBackdrop.classList.remove("active");

    const icon = menuToggle.querySelector("i");
    icon.classList.replace("fa-times", "fa-bars");
}

// Event listeners
menuToggle.addEventListener("click", toggleMenu);
menuBackdrop.addEventListener("click", closeMenu);

// Close menu when clicking nav links on mobile
navLinks.forEach((link) => {
    link.addEventListener("click", () => {
        if (window.innerWidth <= 768) {
            closeMenu();
        }
    });
});

// Handle window resize
window.addEventListener("resize", () => {
    if (window.innerWidth > 768) {
        closeMenu();
    }
});

// Add smooth scroll behavior for anchor links
navLinks.forEach((link) => {
    link.addEventListener("click", (e) => {
        const href = link.getAttribute("href");
        if (href.startsWith("#")) {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                const offsetTop = target.offsetTop - 80; // Account for fixed header
                window.scrollTo({
                    top: offsetTop,
                    behavior: "smooth",
                });
            }
        }
    });
});







// Lightbox
const lightbox = document.getElementById("lightbox");
const lightboxImg = document.getElementById("lightbox-img");
const captionText = document.getElementById("caption");
const closeBtn = document.querySelector(".close");

document.querySelectorAll(".grid-item img").forEach(img => {
    img.addEventListener("click", function() {
        lightbox.style.display = "block";
        lightboxImg.src = this.src;
        captionText.innerHTML = this.alt;
    });
});

closeBtn.addEventListener("click", () => {
    lightbox.style.display = "none";
});

window.addEventListener("click", e => {
    if (e.target === lightbox) {
        lightbox.style.display = "none";
    }
});
