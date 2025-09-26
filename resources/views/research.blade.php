@extends('layouts.home')

@section('title', 'Research - Kumudu Wijesooriya')

@section('content')
<section id="research" class="research-section">
    <div class="container">
        <!-- Page Heading -->
        <h1 class="wow animate__animated animate__fadeInDown" style="text-align:center; margin-bottom:30px;">Research</h1>
        <p class="intro wow animate__animated animate__fadeInUp" style="text-align:center; max-width:700px; margin:0 auto 50px;">
            Explore my research contributions, grants, collaborations, and student mentorship in the field of biodiversity, conservation, and nature documentation.
        </p>



        <!-- Research Grants -->
        <div class="research-grants wow animate__animated animate__fadeInUp" style="margin-bottom:80px;">
            <h2 style="margin-bottom:30px; color:#061d02;">Research Grants</h2>
            <ul style="list-style-type: disc; padding-left:20px;">
                <li>2025 – Senior Research Grant, Malacological Society of London</li>
                <li>2025 – Conference/Meeting Grant, Malacological Society of London, for land-snail identification workshop at Central University of Kerala, India (co-applicant with Dinarzarde Raheem, Ramachandran Kotharambath, David Gower, and Amrut Bhosale)</li>
                <li>2024 – University of Peradeniya Research Grant</li>
                <li>2023 – Travel Grant, Malacological Society of London, for the Molluscs of South Asia conference, Bangalore, India</li>
                <li>2023 – Conference/Meeting Grant, Malacological Society of London, for a three-day residential land-snail identification workshop at Kanneliya Forest Reserve, Sri Lanka (co-applicant with Dinarzarde Raheem and Oshan Wedage)</li>
            </ul>

            <!-- Logos -->
            <div class="grant-logos" style="display:flex; flex-wrap:wrap; gap:30px; margin-top:30px; justify-content:center; align-items:center;">
                <img src="{{ asset('img/uop.png') }}" alt="UoP Logo" style="height:80px;">
                <img src="{{ asset('img/msl.jpg') }}" alt="MSL Logo" style="height:80px;">
            </div>
        </div>

        <!-- Collaborations -->
        <div class="collaborations wow animate__animated animate__fadeInUp" style="margin-bottom:80px;">
            <h2 style="margin-bottom:30px; color:#061d02;">Collaborations</h2>
            <div class="collab-photos" style="display:flex; flex-wrap:wrap; gap:20px; justify-content:center;">
                <div class="collab-photo">
                    <img src="{{ asset('img/Hiranya Sudasinghe and Tharindu Ranasinghe.JPG') }}" alt="Hiranya Sudasinghe and Tharindu Ranasinghe" style="width:200px; border-radius:12px; box-shadow:0 5px 20px rgba(0,0,0,0.1);">
                    <p style="text-align:center; margin-top:5px;">Hiranya Sudasinghe & Tharindu Ranasinghe</p>
                </div>
                <div class="collab-photo">
                    <img src="{{ asset('img/collab-lakshani.jpg') }}" alt="Lakshani Weerasekara" style="width:200px; border-radius:12px; box-shadow:0 5px 20px rgba(0,0,0,0.1);">
                    <p style="text-align:center; margin-top:5px;">Lakshani Weerasekara</p>
                </div>
                <div class="collab-photo">
                    <img src="{{ asset('img/collab-dinarzarde.jpg') }}" alt="Dinarzarde Raheem" style="width:200px; border-radius:12px; box-shadow:0 5px 20px rgba(0,0,0,0.1);">
                    <p style="text-align:center; margin-top:5px;">Dinarzarde Raheem</p>
                </div>
                <div class="collab-photo">
                    <img src="{{ asset('img/collab-kanishka.jpg') }}" alt="Kanishka Ukuwela" style="width:200px; border-radius:12px; box-shadow:0 5px 20px rgba(0,0,0,0.1);">
                    <p style="text-align:center; margin-top:5px;">Kanishka Ukuwela</p>
                </div>
                <div class="collab-photo">
                    <img src="{{ asset('img/collab-sanoj.jpg') }}" alt="Sanoj Wijayasekara" style="width:200px; border-radius:12px; box-shadow:0 5px 20px rgba(0,0,0,0.1);">
                    <p style="text-align:center; margin-top:5px;">Sanoj Wijayasekara</p>
                </div>
                <div class="collab-photo">
                    <img src="{{ asset('img/collab-gajaba.jpg') }}" alt="Gajaba Ellepola" style="width:200px; border-radius:12px; box-shadow:0 5px 20px rgba(0,0,0,0.1);">
                    <p style="text-align:center; margin-top:5px;">Gajaba Ellepola</p>
                </div>
            </div>
        </div>

        <!-- Students -->
        <div class="students wow animate__animated animate__fadeInUp" style="margin-bottom:80px;">
            <h2 style="margin-bottom:30px; color:#061d02;">Students</h2>
            <div class="student-photos" style="display:flex; flex-wrap:wrap; gap:20px; justify-content:center;">
                <div class="student-photo">
                    <img src="{{ asset('img/student-group.jpg') }}" alt="Students Group" style="width:300px; border-radius:12px; box-shadow:0 5px 20px rgba(0,0,0,0.1);">
                </div>
            </div>
            <ul style="list-style-type: disc; padding-left:20px; max-width:600px; margin:20px auto 0;">
                <li>Thakshila Dissanayake</li>
                <li>Paramee Madawala</li>
                <li>Hashini Dilmini</li>
            </ul>
        </div>

    </div>
</section>
@endsection
