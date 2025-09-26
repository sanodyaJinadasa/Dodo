@extends('layouts.home')

@section('content')

    
    <section id="about-hero" class="wow fadeIn"
        style="background: url('{{ asset('images/about-bg.jpg') }}') center/cover no-repeat; padding: 40px 0; color: white; text-align: center;">
        <div class="container">
                        <h2 style="font-size:2.8rem; color:#061d02; margin-bottom:20px;text-align: center;">About Me</h2>

            <p class="animate__animated animate__fadeInUp"
                style="font-size:1.2rem; max-width:700px; margin:20px auto;color:#000000;    padding: 0px 20px;
    text-align: justify;">
                I began my career as a nature enthusiast, inspired by a family background that valued the natural world.
                With a growing passion for wildlife, I completed my schooling from Grade 1 to 11 at Kandy Model School and
                my G.C.E. Advanced Level studies at St. Anthony’s College, Kandy.
            </p>
            <div class="about-img wow animate__animated animate__fadeInRight">
                <img src="{{ asset('img/profile.jpeg') }}" style="width: 350px;height: auto;margin:0 auto;display:block; " alt="Profile">
            </div>
        </div>
    </section>

    <!-- Academic Journey Section -->
    <section id="education" class="wow fadeInUp" style="padding:10px 0; background-color:#f9f9f9;">
        <div class="container">
            <h2 style="text-align:center; margin-bottom:50px;">Academic Journey</h2>
            <div class="education-items" style="display:flex; flex-wrap:wrap; gap:40px; justify-content:center;">
                <div class="education-item"
                    style="flex:1 1 300px; background:white; padding:30px; border-radius:12px; box-shadow:0 8px 20px rgba(0,0,0,0.1);">
                    <h3>Faculty of Science, University of Peradeniya</h3>
                    <p><strong>First Class Honours in Zoology, 2017</strong></p>
                    <p>Focused on evolutionary ecology, ichthyology, herpetology, and scorpion research. Developed strong
                        research skills combining fieldwork, molecular phylogenetics, and morphology.</p>
                </div>
                <div class="education-item"
                    style="flex:1 1 300px; background:white; padding:30px; border-radius:12px; box-shadow:0 8px 20px rgba(0,0,0,0.1);">
                    <h3>St. Anthony's College & Kandy Model School</h3>
                    <p><strong>Advanced Level & High School</strong></p>
                    <p>Built a solid foundation in biology and sciences, fostering curiosity for nature and wildlife.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Professional Experience -->
    <section id="experience" class="wow fadeIn" style="padding:10px 0;">
        <div class="container">
            <h2 style="text-align:center; margin-bottom:50px;">Professional Experience</h2>
            <div class="experience-item"
                style="max-width:800px; margin:0 auto; background:#061d02; color:white; padding:40px; border-radius:12px; box-shadow:0 8px 20px rgba(0,0,0,0.1);">
                <h3>Lecturer (Probationary) - Department of Zoology, University of Peradeniya</h3>
                <p><em>2023 - Present</em></p>
                <p>Previously worked as a Temporary Demonstrator after graduation. Currently mentoring students, teaching
                    undergraduate courses, and conducting research on Sri Lanka's scorpions, amphibians, reptiles, and
                    freshwater fishes.</p>
            </div>
        </div>
    </section>

    <!-- Research Interests -->
    <section id="research" class="wow fadeInUp" style="padding:10px 0; background:#f9f9f9;">
        <div class="container">
            <h2 style="text-align:center; margin-bottom:50px;">Research Interests</h2>
            <p style="max-width:800px; margin:0 auto; text-align:center; line-height:1.8;">
                My research focuses on the evolutionary history and conservation of Sri Lanka’s unique scorpions,
                amphibians, reptiles, and freshwater fishes. I use an integrative approach combining field ecology,
                molecular phylogenetics, and morphology to study biodiversity and promote conservation awareness.
            </p>
        </div>
    </section>

    <!-- Fieldwork & Photography -->
    <section id="fieldwork" class="wow fadeIn" style="padding:10px 0 55px 0px;">
        <div class="container">
            <h2 style="text-align:center; margin-bottom:50px;">Fieldwork & Photography</h2>
            <p style="max-width:800px; margin:0 auto; text-align:center; line-height:1.8;">
                An avid field biologist and macro photographer, I have conducted extensive surveys across Sri Lanka’s
                rainforests and highlands, documenting biodiversity and engaging schoolchildren, university students, and
                budding zoologists in conservation.
            </p>
        </div>
    </section>
@endsection
