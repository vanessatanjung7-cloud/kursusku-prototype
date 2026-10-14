<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Kursus - KursusKu</title>
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
            background-color: var(--bg-light);
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
            opacity: 0.9;
        }

        .navbar-custom .nav-link:hover {
            opacity: 1;
            color: #ffffff;
        }

        /* Form Card Styling */
        .form-card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            padding: 40px;
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .form-label {
            font-weight: 600;
            color: #374151;
        }

        .btn-main {
            background-color: var(--primary-color);
            color: #ffffff;
            font-weight: 600;
            padding: 12px;
            border-radius: 8px;
            border: none;
            width: 100%;
        }

        .btn-main:hover {
            background-color: var(--primary-hover);
            color: #ffffff;
        }
    </style>
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
        <div class="container-fluid px-lg-5">
            <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">
                <span class="bg-white text-dark fw-bold rounded-2 px-2 py-1" style="font-size: 1.1rem;">K</span>
                <div>
                    <div class="lh-1 fw-bold" style="font-size: 1.1rem;">KursusKu</div>
                    <small class="text-white-50" style="font-size: 0.65rem;">Pemrograman Web III</small>
                </div>
            </a>
            <div class="d-flex align-items-center gap-2">
                <a href="index.php" class="btn btn-light btn-sm fw-semibold">Kembali ke Beranda</a>
            </div>
        </div>
    </nav>

    <!-- FORM CONTAINER -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="form-card">
                    <div class="text-center mb-4">
                        <span class="badge bg-success bg-opacity-10 text-success fw-bold px-3 py-2 rounded-pill mb-2">MILESTONE 6</span>
                        <h2 class="fw-bold text-dark">Pendaftaran Kursus</h2>
                        <p class="text-muted">Silakan isi data diri Anda dengan lengkap dan benar pada form di bawah ini.</p>
                    </div>

                    <form action="process-registration.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan nama lengkap" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Masukkan email aktif" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nomor HP</label>
                            <input type="text" class="form-control" name="no_hp" placeholder="Masukkan nomor HP / WhatsApp" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Pilih Kursus</label>
                            <select class="form-select" name="kursus" required>
                                <option value="">-- Pilih Kursus --</option>
                                <option value="Web Development">Web Development</option>
                                <option value="UI/UX Design">UI/UX Design</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                                <option value="Data Analysis">Data Analysis</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Durasi Kursus</label>
                            <select class="form-select" name="durasi" required>
                                <option value="1">1 Bulan</option>
                                <option value="2">2 Bulan</option>
                                <option value="3">3 Bulan</option>
                                <option value="4">4 Bulan</option>
                                <option value="5">5 Bulan</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-main">Daftar Sekarang</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>