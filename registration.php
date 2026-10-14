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

        /* Form Card Styling */
        .form-card {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            padding: 40px;
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .form-label {
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 8px;
        }

        .form-control, .form-select {
            border-radius: 8px;
            padding: 10px 14px;
            border: 1px solid #d1d5db;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(11, 92, 83, 0.25);
        }

        /* Section Box Inside Form */
        .input-group-box {
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 16px;
            margin-bottom: 20px;
        }

        /* Buttons */
        .btn-custom-primary {
            background-color: var(--primary-color);
            color: #ffffff;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 8px;
            border: none;
            text-decoration: none;
        }

        .btn-custom-primary:hover {
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
            <div class="col-lg-8">
                <div class="form-card">
                    
                    <!-- Header Form -->
                    <div class="text-center mb-4">
                        <span class="badge bg-success bg-opacity-10 text-success fw-bold px-3 py-2 rounded-pill mb-2" style="font-size: 0.75rem;">MILESTONE 6 • FORM LANJUTAN</span>
                        <h1 class="fw-bold text-dark h2">Daftar Kursus</h1>
                        <p class="text-muted small">Alur: landing page → form → proses PHP → ringkasan. Belum memakai database.</p>
                    </div>

                    <form action="process-registration.php" method="POST">
                        
                        <!-- Nama & Email -->
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Nama lengkap</label>
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan nama lengkap" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Masukkan email aktif" required>
                            </div>
                        </div>

                        <!-- Pilih Kursus -->
                        <div class="mb-3">
                            <label class="form-label">Pilih kursus</label>
                            <select class="form-select" name="kursus" required>
                                <option value="">-- Pilih kursus --</option>
                                <option value="Web Development">Web Development</option>
                                <option value="UI/UX Design">UI/UX Design</option>
                                <option value="Data Science">Data Science</option>
                            </select>
                        </div>

                        <!-- Tipe Peserta -->
                        <div class="mb-3">
                            <label class="form-label d-block">Tipe peserta</label>
                            <div class="input-group-box d-flex gap-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tipe_peserta" id="mahasiswa" value="Mahasiswa" checked>
                                    <label class="form-check-label fw-semibold" for="mahasiswa">Mahasiswa</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tipe_peserta" id="guru" value="Guru">
                                    <label class="form-check-label fw-semibold" for="guru">Guru</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tipe_peserta" id="umum" value="Umum">
                                    <label class="form-check-label fw-semibold" for="umum">Umum</label>
                                </div>
                            </div>
                        </div>

                        <!-- Minat Belajar -->
                        <div class="mb-3">
                            <label class="form-label d-block">Minat belajar</label>
                            <div class="input-group-box d-flex flex-wrap gap-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="minat[]" id="frontend" value="Frontend">
                                    <label class="form-check-label fw-semibold" for="frontend">Frontend</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="minat[]" id="backend" value="Backend">
                                    <label class="form-check-label fw-semibold" for="backend">Backend</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="minat[]" id="database" value="Database">
                                    <label class="form-check-label fw-semibold" for="database">Database</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="minat[]" id="uiux" value="UI/UX">
                                    <label class="form-check-label fw-semibold" for="uiux">UI/UX</label>
                                </div>
                            </div>
                        </div>

                        <!-- Metode Belajar & Jumlah Paket -->
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Metode belajar</label>
                                <select class="form-select" name="metode" required>
                                    <option value="">-- Pilih metode --</option>
                                    <option value="Online">Online</option>
                                    <option value="Offline">Offline</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Jumlah paket</label>
                                <select class="form-select" name="jumlah_paket">
                                    <option value="1">1 paket</option>
                                    <option value="2">2 paket</option>
                                    <option value="3">3 paket</option>
                                </select>
                            </div>
                        </div>

                        <!-- Catatan Tambahan -->
                        <div class="mb-4">
                            <label class="form-label">Catatan tambahan</label>
                            <textarea class="form-control" name="catatan" rows="3"></textarea>
                        </div>

                        <!-- Tombol Aksi / Navigasi -->
                        <div class="d-flex flex-wrap gap-2 mb-4">
                            <button type="submit" class="btn btn-custom-primary">Proses Pendaftaran</button>
                            <a href="history.php" class="btn btn-custom-primary">History Dummy</a>
                            <a href="loop-lab.php" class="btn btn-custom-primary">Loop Lab</a>
                        </div>

                        <!-- Fasilitas Tambahan (Fitur Bawah Form) -->
                        <div class="mb-3">
                            <label class="form-label d-block">Fasilitas</label>
                            <div class="input-group-box bg-light">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="fasilitas[]" id="sertifikat" value="Sertifikat Digital" checked>
                                    <label class="form-check-label text-secondary" for="sertifikat">Sertifikat Digital</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="fasilitas[]" id="modul" value="Modul & Rekaman Kelas" checked>
                                    <label class="form-check-label text-secondary" for="modul">Modul & Rekaman Kelas</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="fasilitas[]" id="konsultasi" value="Grup Diskusi Mentoring">
                                    <label class="form-check-label text-secondary" for="konsultasi">Grup Diskusi Mentoring</label>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>