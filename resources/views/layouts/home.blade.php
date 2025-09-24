<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Photographer</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/my.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Alan+Sans:wght@300..900&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- WOW.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</head>

<body>

    <!-- Navbar -->
    <div class="menu-backdrop" id="menu-backdrop"></div>

    <header class="navbar" id="navbar">
        <div class="logo">
            <a href="#home">
                <img src="{{ asset('img/logo.png') }}" alt="Logo">
            </a>
        </div>

        <!-- Hamburger -->
        <div class="menu-toggle" id="menu-toggle">
            <i class="fas fa-bars"></i>
        </div>

        <nav id="nav-menu">
            <ul>
                <li><a href="{{ route('home') }}" class="active">Home</a></li>
                <li><a href="{{ route('publications') }}">Research & Publications</a></li>
                <li><a href="{{ route('teaching') }}">Teaching</a></li>
                <li><a href="{{ route('macro') }}">Fieldwork & Photography</a></li>
                <li><a href="{{ route('outreach') }}">Outreach & Talks</a></li>
                <li><a href="{{ route('cv') }}">CV / Downloads</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
               <li><a href="{{ route('home') }}#contact">Contact</a></li>
            </ul>
        </nav>

    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="overlay"></div>
        <div class="hero-content">
            <h1>Exploring Nature’s Secrets</h1>
            <p>Through research and photography, I capture the delicate balance of our living world.</p>
        </div>
    </section>

    <main>
        @yield('content')
    </main>


    <!-- Footer -->
    <footer id="contact">
        <p>&copy; {{ date('Y') }} Kumudu Wijesooriya. All rights reserved.</p>
        <div class="socials">
            <a href="#"><i class="fab fa-orcid"></i></a>
            <a href="#"><i class="fab fa-google"></i></a>
            <a href="#"><i class="fab fa-researchgate"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>
    </footer>
</body>

</html>
