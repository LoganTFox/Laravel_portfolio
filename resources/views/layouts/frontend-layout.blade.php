<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to my portfolio</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body id="bg-img">
<header>
    <div class="menu-btn">
        <div class="btn-line"></div>
        <div class="btn-line"></div>
        <div class="btn-line"></div>
    </div>

    <nav class="menu">
        <div class="menu-branding">
            <div class="portrait"></div>
        </div>

        <ul class="menu-nav">
            <li class="nav-item current">
                <a href="/" class="nav-link">
                    Home
                </a>
            </li>

            <li class="nav-item">
                <a href="/about" class="nav-link">
                    About Me
                </a>
            </li>

            <li class="nav-item">
                <a href="/work" class="nav-link">
                    My Work
                </a>
            </li>

            <li class="nav-item">
                <a href="/contact" class="nav-link">
                    How To Reach Me
                </a>
            </li>
        </ul>
    </nav>
</header>

@yield('content')

<footer id="main-footer">
    Copyright &copy; - 2018
</footer>

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>