@extends('layouts.home') <!-- Use your main layout -->

@section('content')
<!-- Teaching Page -->

<!-- Hero Section -->
<section class="teaching-hero">
    <div class="hero-text">
        <h1>Teaching & Mentorship</h1>
        <p>
            Sharing knowledge, guiding curious minds, and inspiring the next generation of naturalists.
        </p>
    </div>
</section>

<!-- Courses Section -->
<section class="teaching-courses">
    <h2>Courses Taught</h2>
    <div class="course-list">
        <div class="course-card">
            <h3>Ecotourism</h3>
            <p><strong>Level:</strong> 300</p>
            <p>
                Exploring the intersection of ecology and sustainable travel.
                Topics include biodiversity conservation, eco-friendly practices, and community-based tourism.
            </p>
        </div>
        <div class="course-card">
            <h3>Zoogeography & Sri Lankan Fauna</h3>
            <p><strong>Level:</strong> 2000</p>
            <p>
                A deep dive into animal distribution patterns, endemism, and the unique richness of Sri Lanka’s biodiversity.
            </p>
        </div>
    </div>
</section>

<!-- Lecture Topics Section -->
<section class="teaching-lectures">
    <h2>Sample Lecture Topics</h2>
    <ul>
        <li>The Role of Ecotourism in Conservation</li>
        <li>Biogeographic Zones of South Asia</li>
        <li>Endemic Amphibians of Sri Lanka</li>
        <li>Field Methods in Biodiversity Research</li>
    </ul>
</section>

<!-- Mentorship Section -->
<section class="teaching-mentorship">
    <h2>Supervision & Mentorship</h2>
    <p>
        I have had the privilege of supervising undergraduate and postgraduate students, guiding them in their research
        on topics ranging from amphibian ecology to sustainable conservation strategies.
    </p>
    <p>
        Mentorship extends beyond the classroom, with active involvement in fieldwork, research collaborations,
        and academic publications.
    </p>
</section>

@endsection
