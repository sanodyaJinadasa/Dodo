@extends('layouts.home')

@section('content')



<!-- Intro Section -->
<section class="photographer-intro">
    <div class="intro-text">
        <h2>Research Meets Photography</h2>
        <img src="{{ asset('img/profile.jpeg') }}" alt="Profile" style="width:100%; display:block; transition: transform 0.5s; border-radius:20px;width:350px;height: auto;margin:20px auto; ">
        <p>
            I began wildlife photography in 2014 in England as a bird photographer, inspired by Chamara Sugathsiri. Since 2018 I have focused on macrophotography, documenting rare and elusive animals throughout Sri Lanka. My field expeditions and images capture the island’s diverse habitats and species, helping to showcase hidden biodiversity and promote conservation awareness.
        </p>
    </div>
</section>

<!-- Portfolio Grid -->
<section class="photographer-portfolio">
    <h2>Featured Work</h2>
    <div class="grid">
        <div class="grid-item"><img src="https://picsum.photos/id/1024/600/400" alt="Wildlife"></div>
        <div class="grid-item"><img src="https://picsum.photos/id/1018/600/400" alt="Forest"></div>
        <div class="grid-item"><img src="https://picsum.photos/id/1025/600/400" alt="Bird"></div>
        <div class="grid-item"><img src="https://picsum.photos/id/1039/600/400" alt="Ocean"></div>
        <div class="grid-item"><img src="https://picsum.photos/id/1040/600/400" alt="Research"></div>
        <div class="grid-item"><img src="https://picsum.photos/id/1050/600/400" alt="Landscape"></div>
    </div>
</section>

<!-- Lightbox Modal -->
<div id="lightbox" class="lightbox">
    <span class="close">&times;</span>
    <img class="lightbox-content" id="lightbox-img">
    <div id="caption"></div>
</div>

@endsection
