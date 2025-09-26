@extends('layouts.home')

@section('content')
    <!-- About Section -->
 <section class="about" id="about" style="position:relative; background:#f0f4f8;">
    <div class="container" style="display:flex; flex-wrap:wrap; align-items:center; gap:50px;">

        <!-- Text Content -->
        <div class="about-text wow animate__animated animate__fadeInLeft" style="flex:1 1 500px;">
            <h1 class="animate__animated animate__fadeInDown" style="color:#000000;text-align: center;">Hi, I'm <span
                    style="color:#061d02;text-align: center;">Kumudu Wijesooriya</span></h1>
            <p style="font-size:1.1rem; line-height:1.8; color:#333;">
                I am <strong>Kumudu Wijesooriya</strong>, a zoologist, field biologist, and macro photographer from Kandy, Sri Lanka.
                Currently a <strong>Lecturer in Zoology</strong> at the University of Peradeniya, I explore the evolutionary history
                and conservation of Sri Lanka’s scorpions, amphibians, reptiles, and freshwater fishes through <em>fieldwork</em>
                and <em>molecular phylogenetics</em>. My passion for wildlife and science drives both my research and my outreach
                to inspire the next generation of naturalists.
            </p>

            <ul style="margin-top:30px; list-style:none; padding:0; display:grid; grid-template-columns:repeat(auto-fit, minmax(200px, 1fr)); gap:15px;">
                <li style="display:flex; align-items:center; gap:10px;">
                    <i class="fas fa-flask" style="color:#061d02; font-size:1.2rem;"></i>
                    Research & Fieldwork
                </li>
                <li style="display:flex; align-items:center; gap:10px;">
                    <i class="fas fa-chalkboard-teacher" style="color:#061d02; font-size:1.2rem;"></i>
                    Teaching & Mentorship
                </li>
                <li style="display:flex; align-items:center; gap:10px;">
                    <i class="fas fa-camera-retro" style="color:#061d02; font-size:1.2rem;"></i>
                    Wildlife Photography
                </li>
                <li style="display:flex; align-items:center; gap:10px;">
                    <i class="fas fa-globe" style="color:#061d02; font-size:1.2rem;"></i>
                    Conservation Outreach
                </li>
            </ul>
        </div>

        <!-- Image Content -->
        <div class="about-img wow animate__animated animate__fadeInRight" style="flex:1 1 400px; text-align:center; position:relative;">
            <div style="border-radius:20px; overflow:hidden; box-shadow:0 15px 40px rgba(0,0,0,0.2); display:inline-block;">
                <img src="{{ asset('img/profile.jpeg') }}" alt="Profile" style="width:100%; display:block; transition: transform 0.5s; border-radius:20px;">
            </div>
            <div style="position:absolute; top:0; left:0; width:100%; height:100%; border-radius:20px; background:linear-gradient(135deg, rgba(5, 69, 27, 0.3), rgba(52,152,219,0)); pointer-events:none;"></div>
        </div>

    </div>
</section>




    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="contact-container">
            <div class="contact-info wow animate__animated animate__fadeInLeft">
                <h2>Contact Me</h2>
                <p>Have a question or want to work together? Send me a message!</p>
                <ul class="contact-details">
                    <li><i class="fas fa-envelope"></i> <a href="mailto:youremail@example.com">KumuduWijesooriya@gmail.com</a>
                    </li>
                    <li><i class="fas fa-phone-alt"></i> <a href="tel:+1234567890">+94 234 567 890</a></li>
                    <li><i class="fas fa-map-marker-alt"></i> Kandy, Sri Lanka</li>
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
