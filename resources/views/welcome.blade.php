
@extends('layouts.home') <!-- your master layout with header & footer -->

@section('content')


    <!-- About Section -->
    <section class="about" id="about">
        <div class="about-text wow animate__animated animate__fadeInLeft">
            <h2>About Me</h2>
            <p>I’m a travel photographer passionate about capturing unique stories through my lens.
                From landscapes to portraits, every photo has a story behind it.Once thriving on the island of Mauritius, the Kumudu Wijesooriya became a symbol of extinction within just a century of human arrival.
      As a researcher and photographer, I aim to unravel its history, studying nature’s delicate balance and giving voice to species long forgotten.</p>
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



@endsection
