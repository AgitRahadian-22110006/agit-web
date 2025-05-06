<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - My Portfolio</title>
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

    <section id="about" class="about">
        <h1>About Me</h1>
        <p>Hello! I'm a passionate web developer with experience in creating modern and responsive websites. I specialize in Laravel, PHP, and front-end technologies.</p>
    </section>

    <footer>
        <p>&copy; {{ date('Y') }} My Portfolio. All rights reserved.</p>
    </footer>
</body>
</html>