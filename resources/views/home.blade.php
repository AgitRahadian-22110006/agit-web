<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - My Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <h1>Welcome to My Portfolio</h1>
        <p>Discover my work, skills, and passion for web development.</p>
        <a href="{{ route('portfolio') }}" class="btn">View Portfolio</a>
    </section>

    <section id="about" class="about">
        <h2>About Me</h2>
        <p>Hello! I'm a passionate web developer with experience in creating modern and responsive websites. I specialize in Laravel, PHP, and front-end technologies.</p>
    </section>

    <footer>
        <p>&copy; {{ date('Y') }} My Portfolio. All rights reserved.</p>
    </footer>
</body>
</html>