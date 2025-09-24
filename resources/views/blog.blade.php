@extends('layouts.home')

@section('content')
<!-- Blog / News Page -->

<section class="blog-hero">
    <div class="hero-text">
        <h1>Blog & News</h1>
        <p>Updates on fieldwork, research, and conservation insights.</p>
    </div>
</section>

<section class="blog-posts">
    <article class="post-card">
        <h2>Fieldwork in Sinharaja Rainforest</h2>
        <p class="date">August 2024</p>
        <p>
            Documenting endemic amphibians in one of Sri Lanka’s richest biodiversity hotspots.
            Exciting observations of rare species!
        </p>
    </article>

    <article class="post-card">
        <h2>New Publication on Amphibian Diversity</h2>
        <p class="date">June 2024</p>
        <p>
            Co-authored research on amphibian habitats, published in the Journal of Tropical Biology.
        </p>
    </article>

    <article class="post-card">
        <h2>PhD Journey Begins</h2>
        <p class="date">January 2025</p>
        <p>
            Excited to start my doctoral research focusing on species conservation
            and habitat protection.
        </p>
    </article>
</section>

@endsection
