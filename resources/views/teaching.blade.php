@extends('layouts.home')

@section('content')


<!-- Courses Section -->
<section class="teaching-courses wow fadeInUp" style=" background:#f9f9f9;">
    <div class="container">
        <h2 style="text-align:center; margin-bottom:50px;">Courses Taught</h2>
        <div class="course-list" style="display:flex; flex-wrap:wrap; gap:30px; justify-content:center;">
            <!-- 2000 Level Courses -->
            <div class="course-card" style="flex:1 1 300px; background:white; padding:30px; border-radius:12px; box-shadow:0 8px 20px rgba(0,0,0,0.1);">
                <h3>2000 Level Courses</h3>
                <ul style="list-style-type: disc; padding-left:20px;">
                    <li>Zoogeography and Sri Lankan Fauna</li>
                    <li>Vertebrate Diversity</li>
                </ul>
            </div>

            <!-- 3000 Level Courses -->
            <div class="course-card" style="flex:1 1 300px; background:white; padding:30px; border-radius:12px; box-shadow:0 8px 20px rgba(0,0,0,0.1);">
                <h3>3000 Level Courses</h3>
                <ul style="list-style-type: disc; padding-left:20px;">
                    <li>Fish Biology</li>
                    <li>Herpetology</li>
                    <li>Ecotourism</li>
                </ul>
            </div>
        </div>
    </div>
</section>


@endsection
