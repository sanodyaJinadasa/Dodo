<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Photographer</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/my.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- WOW.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</head>

<body>

    <!-- Navbar -->
    <header class="navbar">
        <div class="logo">My Portfolio</div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-text animate__animated animate__fadeInUp">
            <h1>Capturing Moments</h1>
            <p>Travel Photography Around the World</p>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery" id="portfolio">
        <h2 class="wow animate__animated animate__fadeInDown">Portfolio</h2>
        <div class="grid">
            <div class="grid-item wow animate__animated animate__zoomIn"><img src="https://picsum.photos/400/300?1"
                    alt=""></div>
            <div class="grid-item wow animate__animated animate__zoomIn" data-wow-delay="0.2s"><img
                    src="https://picsum.photos/400/300?2" alt=""></div>
            <div class="grid-item wow animate__animated animate__zoomIn" data-wow-delay="0.4s"><img
                    src="https://picsum.photos/400/300?3" alt=""></div>
            <div class="grid-item wow animate__animated animate__zoomIn"><img src="https://picsum.photos/400/300?4"
                    alt=""></div>
            <div class="grid-item wow animate__animated animate__zoomIn" data-wow-delay="0.2s"><img
                    src="https://picsum.photos/400/300?5" alt=""></div>
            <div class="grid-item wow animate__animated animate__zoomIn" data-wow-delay="0.4s"><img
                    src="https://picsum.photos/400/300?6" alt=""></div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="about-text wow animate__animated animate__fadeInLeft">
            <h2>About Me</h2>
            <p>I’m a travel photographer passionate about capturing unique stories through my lens.
                From landscapes to portraits, every photo has a story behind it.</p>
        </div>
        <div class="about-img wow animate__animated animate__fadeInRight">
            <img src="https://picsum.photos/400/400" alt="Profile">
        </div>
    </section>



    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="contact-container">
            <div class="contact-info wow animate__animated animate__fadeInLeft">
                <h2>Contact Me</h2>
                <p>Have a question or want to work together? Send me a message!</p>
                <ul class="contact-details">
                    <li><i class="fas fa-envelope"></i> <a href="mailto:youremail@example.com">youremail@example.com</a>
                    </li>
                    <li><i class="fas fa-phone-alt"></i> <a href="tel:+1234567890">+1 234 567 890</a></li>
                    <li><i class="fas fa-map-marker-alt"></i> Your City, Country</li>
                </ul>
                <div class="social-links">
                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="contact-form wow animate__animated animate__fadeInRight">
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer id="contact">
        <p>&copy; {{ date('Y') }} My Portfolio. All rights reserved.</p>
        <div class="socials">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
    </footer>
</body>

</html>
