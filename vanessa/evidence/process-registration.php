<?php
// Mengambil data dari form (jika kosong, akan diberi nilai default)
$nama = !empty($_POST['nama']) ? $_POST['nama'] : 'Alya Putri';
$email = !empty($_POST['email']) ? $_POST['email'] : 'alya@example.com';
$hp = !empty($_POST['hp']) ? $_POST['hp'] : '081234567890';
$prodi = !empty($_POST['prodi']) ? $_POST['prodi'] : 'PTIK';
$kursus = !empty($_POST['kursus']) ? $_POST['kursus'] : 'PHP Dasar';
$jenis_peserta = !empty($_POST['jenis_peserta']) ? $_POST['jenis_peserta'] : 'mahasiswa';

// Menggabungkan array minat
if (isset($_POST['minat']) && is_array($_POST['minat'])) {
    $minat = implode(', ', $_POST['minat']);
} else {
    $minat = 'frontend, backend';
}

$sumber_hidden = !empty($_POST['sumber']) ? $_POST['sumber'] : 'week-05';
$catatan = !empty($_POST['catatan']) ? $_POST['catatan'] : 'Data latihan week 05';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran - KursusKu</title>
    <!-- CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f2f7f5;
        }
        .info-card {
            background-color: #f0f4f8;
            border-radius: 12px;
            padding: 16px 20px;
        }
        .btn-isi-lagi {
            background-color: #0d7a71;
            color: #ffffff;
            border: none;
        }
        .btn-isi-lagi:hover {
            background-color: #0a6059;
            color: #ffffff;
        }
        .btn-beranda {
            background-color: transparent;
            color: #0d7a71;
            border: 1.5px solid #0d7a71;
        }
        .btn-beranda:hover {
            background-color: #0d7a71;
            color: #ffffff;
        }
    </style>
</head>
<body>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8">
                
                <!-- Card Container -->
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">
                    
                    <!-- Header Badges & Title -->
                    <div class="mb-4">
                        <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2 rounded-pill fw-semibold text-uppercase" style="letter-spacing: 0.5px; font-size: 0.75rem;">
                            MILESTONE 5 • HASIL POST
                        </span>
                        <h2 class="fw-bold text-dark mt-3 mb-0">Data latihan diterima</h2>
                    </div>

                    <!-- Grid Data Form -->
                    <div class="row g-3">
                        
                        <!-- Nama & Email -->
                        <div class="col-md-6">
                            <div class="info-card">
                                <div class="fw-bold text-dark mb-1 small">Nama:</div>
                                <div class="text-secondary"><?= htmlspecialchars($nama) ?></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-card">
                                <div class="fw-bold text-dark mb-1 small">Email:</div>
                                <div class="text-secondary"><?= htmlspecialchars($email) ?></div>
                            </div>
                        </div>

                        <!-- Telepon & Program Studi -->
                        <div class="col-md-6">
                            <div class="info-card">
                                <div class="fw-bold text-dark mb-1 small">Telepon:</div>
                                <div class="text-secondary"><?= htmlspecialchars($hp) ?></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-card">
                                <div class="fw-bold text-dark mb-1 small">Program studi:</div>
                                <div class="text-secondary"><?= htmlspecialchars($prodi) ?></div>
                            </div>
                        </div>

                        <!-- Kursus & Jenis Peserta -->
                        <div class="col-md-6">
                            <div class="info-card">
                                <div class="fw-bold text-dark mb-1 small">Kursus:</div>
                                <div class="text-secondary"><?= htmlspecialchars($kursus) ?></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-card">
                                <div class="fw-bold text-dark mb-1 small">Jenis peserta:</div>
                                <div class="text-secondary"><?= htmlspecialchars($jenis_peserta) ?></div>
                            </div>
                        </div>

                        <!-- Minat & Sumber Hidden -->
                        <div class="col-md-6">
                            <div class="info-card">
                                <div class="fw-bold text-dark mb-1 small">Minat:</div>
                                <div class="text-secondary"><?= htmlspecialchars($minat) ?></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-card">
                                <div class="fw-bold text-dark mb-1 small">Sumber hidden:</div>
                                <div class="text-secondary"><?= htmlspecialchars($sumber_hidden) ?></div>
                            </div>
                        </div>

                        <!-- Catatan (Full Width) -->
                        <div class="col-12">
                            <div class="info-card">
                                <div class="fw-bold text-dark mb-1 small">Catatan</div>
                                <div class="text-secondary"><?= htmlspecialchars($catatan) ?></div>
                            </div>
                        </div>

                    </div>

                    <!-- Tombol Aksi Bottom -->
                    <div class="d-flex gap-2 mt-4">
                        <a href="registration.php" class="btn btn-isi-lagi fw-bold px-4 py-2 rounded-3">Isi Lagi</a>
                        <a href="index.php" class="btn btn-beranda fw-bold px-4 py-2 rounded-3">Beranda</a>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>