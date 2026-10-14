<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KursusKu - Belajar Teknologi, Bangun Masa Depan</title>
    <!-- CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #0b5c53;
            --primary-hover: #084841;
            --bg-light: #e8f3f1;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #ffffff;
        }

        /* Navbar Styling */
        .navbar-custom {
            background-color: var(--primary-color);
            padding-top: 12px;
            padding-bottom: 12px;
        }

        .navbar-custom .navbar-brand {
            color: #ffffff;
            font-weight: 700;
        }

        .navbar-custom .nav-link {
            color: #ffffff;
            font-size: 0.875rem;
            font-weight: 500;
            padding-left: 12px !important;
            padding-right: 12px !important;
            opacity: 0.9;
        }

        .navbar-custom .nav-link:hover {
            opacity: 1;
            color: #ffffff;
        }

        .btn-nav-badge {
            background-color: rgba(255, 255, 255, 0.2);
            color: #ffffff;
            border-radius: 20px;
            padding: 4px 15px;
            font-size: 0.8rem;
            text-decoration: none;
        }

        .btn-nav-action {
            background-color: #ffffff;
            color: #333333;
            font-weight: 600;
            border-radius: 6px;
            padding: 6px 16px;
            font-size: 0.85rem;
            text-decoration: none;
        }

        /* Hero Section */
        .hero-section {
            background-color: var(--bg-light);
            padding-top: 60px;
            padding-bottom: 60px;
            min-height: 80vh;
            display: flex;
            align-items: center;
        }

        .badge-category {
            color: var(--primary-color);
            font-weight: 700;
            font-size: 0.75rem;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .hero-title {
            color: #111827;
            font-weight: 800;
            font-size: 3.2rem;
            line-height: 1.15;
            margin-top: 15px;
            margin-bottom: 20px;
        }

        .hero-desc {
            color: #4b5563;
            font-size: 1.05rem;
            line-height: 1.6;
            margin-bottom: 30px;
            max-width: 500px;
        }

        .btn-main {
            background-color: var(--primary-color);
            color: #ffffff;
            font-weight: 600;
            padding: 10px 24px;
            border-radius: 8px;
            border: none;
        }

        .btn-main:hover {
            background-color: var(--primary-hover);
            color: #ffffff;
        }

        .btn-secondary-custom {
            background-color: #0d7a71;
            color: #ffffff;
            font-weight: 600;
            padding: 10px 24px;
            border-radius: 8px;
            border: none;
        }

        .btn-secondary-custom:hover {
            background-color: #0a6059;
            color: #ffffff;
        }

        /* Illustration Mockup */
        .illustration-card {
            background-color: #cde6e2;
            border-radius: 20px;
            padding: 40px;
            text-align: center;
            position: relative;
        }

        .screen-mockup {
            background: #ffffff;
            border: 12px solid #2d3748;
            border-radius: 16px;
            padding: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

    <!-- NAVBAR (NAVIGASI) -->
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
        <div class="container-fluid px-lg-5">
            <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">
                <span class="bg-white text-dark fw-bold rounded-2 px-2 py-1" style="font-size: 1.1rem;">K</span>
                <div>
                    <div class="lh-1 fw-bold" style="font-size: 1.1rem;">KursusKu</div>
                    <small class="text-white-50" style="font-size: 0.65rem;">Pemrograman Web III</small>
                </div>
            </a>

            <button class="navbar-toggler border-0 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active fw-bold" href="#beranda">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#keunggulan">Keunggulan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#katalog">Katalog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#cara-daftar">Cara Daftar</a></li>
                    <li class="nav-item"><a class="nav-link" href="#media">Media</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link" href="registration.php">Form P5</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Daftar P6</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">History</a></li>
                </ul>

                <div class="d-flex align-items-center gap-2">
                    <span class="btn-nav-badge">Milestone 6</span>
                    <a href="registration.php" class="btn-nav-action">Estimasi Biaya</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section id="beranda" class="hero-section">
        <div class="container px-lg-5">
            <div class="row align-items-center g-5">
                
                <!-- Text Content -->
                <div class="col-lg-6">
                    <div class="badge-category">LANDING PAGE KURSUSKU</div>
                    <h1 class="hero-title">Belajar Teknologi, Bangun Masa Depan</h1>
                    <p class="hero-desc">
                        Temukan kursus teknologi yang relevan untuk meningkatkan keterampilan melalui pembelajaran bertahap, latihan terarah, dan proyek nyata.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#katalog" class="btn btn-main">Lihat Katalog Kursus</a>
                        <a href="registration.php" class="btn btn-secondary-custom">Daftar Sekarang</a>
                    </div>
                </div>

                <!-- Visual Illustration -->
                <div class="col-lg-6">
                    <div class="illustration-card">
                        <div class="screen-mockup mx-auto" style="max-width: 380px;">
                            <div class="text-center py-4">
                                <h5 class="fw-bold text-dark mb-1">KursusKu</h5>
                                <small class="text-muted d-block mb-3" style="font-size: 0.75rem;">Belajar • Praktik • Bangun Proyek</small>
                                <div class="bg-light rounded p-2 mb-2">
                                    <div class="bg-secondary bg-opacity-20 rounded py-1 px-3 w-75 mx-auto mb-2"></div>
                                    <div class="bg-success rounded py-2 px-3 w-50 mx-auto"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>