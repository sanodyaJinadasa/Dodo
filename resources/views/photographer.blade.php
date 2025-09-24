@extends('layouts.home')

@section('content')



<!-- Intro Section -->
<section class="photographer-intro">
    <div class="intro-text">
        <h2>Research Meets Photography</h2>
        <p>
            My work blends scientific exploration with the art of photography.
            Each image is not just a visual, but a record of biodiversity, a reflection of conservation, and a voice for the voiceless.
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
