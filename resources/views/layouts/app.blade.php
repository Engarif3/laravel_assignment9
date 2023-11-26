<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Portfolio')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>

    <header>
        <h1>My Portfolio</h1>
    </header>

    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/projects">Projects</a></li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2023 My Portfolio</p>

        <div class="social-media">
            <a href="https://github.com/Engarif3" target="_blank" rel="noopener noreferrer">
                <img src="{{ asset('images/github-icon.png') }}" alt="GitHub">
            </a>
            <a href="https://www.linkedin.com/in/engarif3/" target="_blank" rel="noopener noreferrer">
                <img src="{{ asset('images/linkedin-icon.png') }}" alt="LinkedIn">
            </a>

        </div>
    </footer>
</body>

</html>