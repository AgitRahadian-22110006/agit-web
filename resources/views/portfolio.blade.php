<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agit Rahadian - Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://unpkg.com/scrollreveal"></script>
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

    <section class="breadcrumb">
        <p><a href="{{ route('home') }}">Home</a> > Portfolio</p>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <h1>PORTFOLIO</h1>
        <div class="about-grid">
            <div class="profile">
                <img src="{{ asset('images/profile.jpg') }}" alt="Profile Picture">
                <h2>AGIT RAHADIAN</h2>
            </div>
            <div class="info">
                <p><strong>Tanggal Lahir:</strong> Garut, 14 Juli 2002</p>
                <p><strong>Umur:</strong> 22 Tahun</p>
                <p><strong>Alamat:</strong> Garut</p>
                <p><strong>Jabatan:</strong> Web Developer, UI/UX Designer</p>
                <p><strong>Bio:</strong> Saya adalah pengembang web dengan pengalaman 3+ tahun di Laravel dan frontend modern.</p>
                <p><strong>Kampus:</strong> STMIK Mardira Indonesia</p>
                <p><strong>Jurusan:</strong> Teknik Informatika / Sistem Informasi</p>
            </div>
        </div>
        <div class="columns">
            <div class="skills">
                <h3>Skillset</h3>
                <ul>
                    <li>Laravel, PHP, MySQL</li>
                    <li>JavaScript, Vue/React</li>
                    <li>HTML, CSS, Bootstrap/Tailwind</li>
                </ul>
            </div>
            <div class="contacts">
                <h3>Kontak & Sosial</h3>
                <p><strong>Email:</strong> agitrahadian140702@gmail.com</p>
                <p><strong>Telepon:</strong> +6287758263820</p>
                <p><strong>LinkedIn:</strong> <a href="https://linkedin.com/in/username" target="_blank">linkedin.com/in/username</a></p>
                <p><strong>GitHub:</strong> <a href="https://github.com/username" target="_blank">github.com/username</a></p>
            </div>
        </div>
    </section>

    <!-- Experience & Education -->
    <section id="experience" class="experience">
        <h2>Experience & Education</h2>
        <div class="columns">
            <div class="experience-list">
                <h3>Pengalaman Kerja</h3>
                <ul>
                    <li>2022–Sekarang: Web Developer di [Nama Perusahaan]</li>
                    <li>2021–2022: Freelancer Laravel Developer</li>
                </ul>
            </div>
            <div class="education-list">
                <h3>Riwayat Pendidikan</h3>
                <ul>
                    <li>2020–2024: STMIK Mardira Indonesia, Teknik Informatika</li>
                    <li>SMA Negeri 10 Garut – Jurusan IPA</li>
                    <li>SMP Negeri 1 Leuwigoong</li>
                    <li>SD SindangSari 2</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Project Section -->
    <section id="projects" class="portfolio">
        <h2>My Projects</h2>
        <div class="projects">
            <div class="project">
                <img src="{{ asset('images/project1.jpg') }}" alt="Project 1">
                <h3>Sistem Top-Up Game</h3>
                <p>Platform transaksi digital item MLBB.</p>
                <p><strong>Teknologi:</strong> Laravel, Bootstrap, MySQL</p>
                <p><strong>Peran:</strong> Full-stack Developer</p>
                <a href="#" class="btn">View Details</a>
            </div>
            <div class="project">
                <img src="{{ asset('images/project2.jpg') }}" alt="Project 2">
                <h3>Website E-Commerce</h3>
                <p>Platform belanja online dengan fitur pembayaran.</p>
                <p><strong>Teknologi:</strong> Laravel, Vue.js, Tailwind</p>
                <p><strong>Peran:</strong> Backend Developer</p>
                <a href="#" class="btn">View Details</a>
            </div>
            <div class="project">
                <img src="{{ asset('images/project3.jpg') }}" alt="Project 3">
                <h3>Portfolio Website</h3>
                <p>Website pribadi untuk menampilkan karya.</p>
                <p><strong>Teknologi:</strong> HTML, CSS, JavaScript</p>
                <p><strong>Peran:</strong> Frontend Developer</p>
                <a href="#" class="btn">View Details</a>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section id="contact" class="cta">
        <h2>Let's Work Together</h2>
        <p>Tertarik bekerja sama? Hubungi saya di <strong>agitrahadian140702@gmail.com</strong> atau telepon <strong>+6287758263820</strong>!</p>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} Agit Rahadian. All rights reserved.</p>
    </footer>

    <script>
        ScrollReveal().reveal('.about-grid, .columns, .project, .cta', {
            distance: '50px',
            duration: 1000,
            easing: 'ease-out',
            origin: 'bottom',
            interval: 200
        });
    </script>
</body>
</html>
