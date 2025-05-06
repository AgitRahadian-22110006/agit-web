<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - My Portfolio</title>
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

    <section id="contact" class="cta">
        <h1>Contact Me</h1>
        <p>If you'd like to work together, feel free to reach out!</p>
        <p><strong>Email:</strong> [email@example.com]</p>
        <p><strong>Phone:</strong> [+62 xxx-xxxx-xxxx]</p>
    </section>

    <footer>
        <p>&copy; {{ date('Y') }} My Portfolio. All rights reserved.</p>
    </footer>
</body>
</html>