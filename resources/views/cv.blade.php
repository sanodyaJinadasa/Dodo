@extends('layouts.home')

@section('content')
<!-- CV / Downloads Page -->

<section class="cv-hero">
    <div class="hero-text">
        <h1>Curriculum Vitae</h1>
        <p>Download my academic CV and supporting materials.</p>
    </div>
</section>

<section class="cv-downloads">
    <h2>Downloads</h2>
    <ul class="download-list">
        <li>
            <a href="{{ asset('files/cv.pdf') }}" target="_blank">📄 Academic CV (PDF)</a>
        </li>
        <li>
            <a href="{{ asset('files/teaching-statement.pdf') }}" target="_blank">📑 Teaching Statement</a>
        </li>
        <li>
            <a href="{{ asset('files/research-statement.pdf') }}" target="_blank">🔬 Research Statement</a>
        </li>
    </ul>
</section>

@endsection
