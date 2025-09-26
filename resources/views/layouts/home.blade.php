<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kumudu Wijesooriya</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/my.js') }}" defer></script>
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- WOW.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ZO1u1XkZpD0oWfVjtI6X9VrGqXh+8yF+l6yXvV3WZCjNkq+E+8wXgk5rD+5sFj6F" crossorigin="anonymous">

<!-- Optional Bootstrap JS with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoHf9fQ5fj2xRlh5P9m+1pD1yt++V5ZZ5Xs6f0URy9Bv1WTR" crossorigin="anonymous"></script>

</head>

<body>

    <!-- Navbar -->
    <div class="menu-backdrop" id="menu-backdrop"></div>

    <header class="navbar" id="navbar">
        <div class="logo">
            <a href="#home">
                <img src="{{ asset('img/black_logo2.png') }}" alt="Logo">
            </a>
        </div>

        <!-- Hamburger -->
        <div class="menu-toggle" id="menu-toggle">
            <i class="fas fa-bars"></i>
        </div>

        <nav id="nav-menu">
            <ul>
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About
                        Me</a></li>
                <li><a href="{{ route('research') }}"
                        class="{{ request()->routeIs('research') ? 'active' : '' }}">Research</a></li>
                <li><a href="{{ route('publications') }}"
                        class="{{ request()->routeIs('publications') ? 'active' : '' }}">Publications</a></li>
                <li><a href="{{ route('teaching') }}"
                        class="{{ request()->routeIs('teaching') ? 'active' : '' }}">Teaching</a></li>
                <li><a href="{{ route('macro') }}" class="{{ request()->routeIs('macro') ? 'active' : '' }}">Fieldwork
                        & Photography</a></li>
                <li><a href="{{ route('outreach') }}"
                        class="{{ request()->routeIs('outreach') ? 'active' : '' }}">Outreach & Talks</a></li>
                <li><a href="{{ route('home') }}#contact" class="{{ request()->is('/') ? 'active' : '' }}">Contact</a>
                </li>
            </ul>
        </nav>


    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="overlay"></div>
        <div class="hero-content">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="hero-logo">
            <h1>Exploring Nature’s Secrets</h1>
            <p>Through research and photography, I capture the delicate balance of our living world.</p>
        </div>
    </section>

    <main class="main-content_pd">
        @yield('content')
    </main>


    <!-- Footer -->
    <footer id="contact">
        <p>&copy; {{ date('Y') }} Kumudu Wijesooriya. All rights reserved.</p>
        <div class="socials">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-researchgate"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>
    </footer>
</body>

<script>
    new WOW().init();
</script>

</html>
