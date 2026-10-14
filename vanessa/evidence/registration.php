<?php
$courses = [
    [
        'name' => 'PHP Dasar',
        'price' => 150000
    ],
    [
        'name' => 'HTML & CSS',
        'price' => 100000
    ],
    [
        'name' => 'JavaScript Dasar',
        'price' => 175000
    ],
    [
        'name' => 'Laravel Fundamental',
        'price' => 250000
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Kursus - KursusKu</title>
    <!-- CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                
                <!-- Card Container Tampilan Rapi -->
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5">
                    
                    <!-- Header Form -->
                    <div class="mb-4">
                        <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2 rounded-pill fw-semibold text-uppercase">
                            Milestone 5 • Form + POST
                        </span>
                        <h2 class="fw-bold text-dark mt-3 mb-2">Mulai belajar bersama KursusKu</h2>
                        <p class="text-secondary small">Gunakan data latihan. Field bertanda wajib harus diisi. Method akhir form adalah <strong>POST</strong>.</p>
                    </div>

                    <!-- Form Pendaftaran -->
                    <form action="process-registration.php" method="POST">
                        
                        <div class="row g-3">
                            <!-- Nama Lengkap -->
                            <div class="col-12">
                                <label class="form-label fw-bold small text-dark">Nama Lengkap *</label>
                                <input type="text" name="name" class="form-control py-2" placeholder="Masukkan nama lengkap" required>
                            </div>

                            <!-- Jenis Peserta -->
                            <div class="col-12">
                                <label class="form-label fw-bold small text-dark d-block">Tipe Peserta</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="participant_type" id="mahasiswa" value="Mahasiswa" checked>
                                    <label class="form-check-label small" for="mahasiswa">Mahasiswa</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="participant_type" id="guru" value="Guru">
                                    <label class="form-check-label small" for="guru">Guru</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="participant_type" id="umum" value="Umum">
                                    <label class="form-check-label small" for="umum">Umum</label>
                                </div>
                            </div>

                            <!-- Pilih Kursus -->
                            <div class="col-12">
                                <label class="form-label fw-bold small text-dark">Pilih Kursus *</label>
                                <select name="course" class="form-select py-2" required>
                                    <option value="" selected disabled>-- Pilih Kursus --</option>
                                    <?php foreach ($courses as $c): ?>
                                        <option value="<?= $c['name'] ?>"><?= $c['name'] ?> - Rp <?= number_format($c['price'], 0, ',', '.') ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <!-- Minat -->
                            <div class="col-12">
                                <label class="form-label fw-bold small text-dark d-block">Minat</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="interests[]" id="pemrograman" value="Pemrograman">
                                    <label class="form-check-label small" for="pemrograman">Pemrograman</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="interests[]" id="webdesign" value="Web Design">
                                    <label class="form-check-label small" for="webdesign">Web Design</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="interests[]" id="database" value="Database">
                                    <label class="form-check-label small" for="database">Database</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="interests[]" id="mobile" value="Mobile">
                                    <label class="form-check-label small" for="mobile">Mobile</label>
                                </div>
                            </div>

                            <!-- Tombol Submit -->
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-success w-100 py-2 fw-bold rounded-3">
                                    Daftar Kursus
                                </button>
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