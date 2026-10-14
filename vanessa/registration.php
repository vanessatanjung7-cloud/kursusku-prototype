<?php
$courses = [
    ['name' => 'PHP Dasar', 'price' => 150000],
    ['name' => 'HTML & CSS', 'price' => 100000],
    ['name' => 'JavaScript Dasar', 'price' => 175000],
    ['name' => 'Laravel Fundamental', 'price' => 250000]
];

// Cek apakah mode GET diaktifkan
$is_get_mode = isset($_GET['mode']) && $_GET['mode'] === 'get';

// Ambil nilai dari parameter GET
$get_name = isset($_GET['name']) ? $_GET['name'] : (isset($_GET['nama']) ? $_GET['nama'] : '');
$get_course = isset($_GET['course']) ? $_GET['course'] : (isset($_GET['kursus']) ? $_GET['kursus'] : '');
$get_participant = isset($_GET['participant_type']) ? $_GET['participant_type'] : (isset($_GET['jenis_peserta']) ? $_GET['jenis_peserta'] : '');

// String query string untuk ditampilkan
$query_string = isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $is_get_mode ? 'Eksperimen GET' : 'Form Pendaftaran KursusKu' ?></title>
    <!-- CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f2f7f5;
        }
        .btn-custom {
            background-color: #0d7a71;
            color: #ffffff;
            border: none;
        }
        .btn-custom:hover {
            background-color: #0a6059;
            color: #ffffff;
        }
        .info-card {
            background-color: #f0f4f8;
            border-radius: 12px;
            padding: 20px;
        }
    </style>
</head>
<body>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8">
                
                <!-- Card Container -->
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">
                    
                    <?php if ($is_get_mode): ?>
                        <!-- ================= HALAMAN EKSPERIMEN GET ================= -->
                        <div class="mb-4">
                            <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2 rounded-pill fw-semibold text-uppercase" style="font-size: 0.75rem; letter-spacing: 0.5px;">
                                MILESTONE 5 • GET VS POST
                            </span>
                            <h2 class="fw-bold text-dark mt-3 mb-2">Eksperimen GET</h2>
                            <p class="text-secondary small">Berbeda dengan POST, parameter GET tampak pada query string URL.</p>
                        </div>

                        <!-- Ringkasan Query String yang Diterima -->
                        <div class="info-card mb-4">
                            <div class="fw-bold text-dark mb-2 small">Query string yang diterima:</div>
                            <div class="text-secondary mb-3 small font-monospace">
                                ?<?= htmlspecialchars($query_string ? $query_string : 'name=alya+putri&course=PHP+Dasar&participant_type=mahasiswa') ?>
                            </div>
                            
                            <div class="small text-dark fw-bold">Nama: <span class="fw-normal text-secondary"><?= htmlspecialchars($get_name ? $get_name : 'alya putri') ?></span></div>
                            <div class="small text-dark fw-bold">Kursus: <span class="fw-normal text-secondary"><?= htmlspecialchars($get_course ? $get_course : 'PHP Dasar') ?></span></div>
                            <div class="small text-dark fw-bold">Peserta: <span class="fw-normal text-secondary"><?= htmlspecialchars($get_participant ? $get_participant : 'mahasiswa') ?></span></div>
                        </div>

                        <!-- Form dengan Method GET -->
                        <form action="registration.php" method="GET">
                            <input type="hidden" name="mode" value="get">

                            <div class="mb-3">
                                <label class="form-label fw-bold small text-dark">Nama</label>
                                <input type="text" name="name" class="form-control py-2" value="<?= htmlspecialchars($get_name ? $get_name : 'alya putri') ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold small text-dark">Kursus</label>
                                <select name="course" class="form-select py-2">
                                    <?php foreach ($courses as $c): ?>
                                        <option value="<?= $c['name'] ?>" <?= ($get_course === $c['name'] || (!$get_course && $c['name'] === 'PHP Dasar')) ? 'selected' : '' ?>>
                                            <?= $c['name'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="mb-4">
                                <div class="border rounded-3 p-3">
                                    <label class="form-label fw-bold small text-dark d-block mb-2">Peserta</label>
                                    <div class="form-check me-4 mb-1">
                                        <input class="form-check-input" type="radio" name="participant_type" id="mhs_get" value="mahasiswa" <?= ($get_participant === 'mahasiswa' || !$get_participant) ? 'checked' : '' ?>>
                                        <label class="form-check-label small fw-semibold" for="mhs_get">Mahasiswa</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="participant_type" id="umum_get" value="umum" <?= ($get_participant === 'umum') ? 'checked' : '' ?>>
                                        <label class="form-check-label small fw-semibold" for="umum_get">Umum</label>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-custom fw-bold px-4 py-2 rounded-3">Kirim GET</button>
                                <a href="registration.php" class="btn btn-outline-secondary fw-bold px-4 py-2 rounded-3">Kembali ke Form POST</a>
                            </div>
                        </form>

                    <?php else: ?>
                        <!-- ================= FORM UTAMA (POST) ================= -->
                        <div class="mb-4">
                            <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2 rounded-pill fw-semibold text-uppercase">
                                Milestone 5 • Form + POST
                            </span>
                            <h2 class="fw-bold text-dark mt-3 mb-2">Form Pendaftaran KursusKu</h2>
                            <p class="text-secondary small">Form akhir menggunakan <strong>POST</strong>. Semua pasangan key-value berasal dari atribut name.</p>
                        </div>

                        <form action="process-registration.php" method="POST">
                            <input type="hidden" name="sumber" value="week-05">

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold small text-dark">Nama lengkap</label>
                                    <input type="text" name="nama" class="form-control py-2" placeholder="">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold small text-dark">Email</label>
                                    <input type="email" name="email" class="form-control py-2" placeholder="">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-bold small text-dark">Nomor telepon</label>
                                    <input type="text" name="hp" class="form-control py-2" placeholder="">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold small text-dark">Program studi</label>
                                    <input type="text" name="prodi" class="form-control py-2" placeholder="">
                                </div>

                                <div class="col-12">
                                    <label class="form-label fw-bold small text-dark">Pilih kursus</label>
                                    <select name="kursus" class="form-select py-2">
                                        <option value="" selected disabled>-- Pilih kursus --</option>
                                        <?php foreach ($courses as $c): ?>
                                            <option value="<?= $c['name'] ?>"><?= $c['name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <div class="border rounded-3 p-3">
                                        <label class="form-label fw-bold small text-dark d-block mb-2">Jenis Peserta</label>
                                        <div class="form-check form-check-inline me-4">
                                            <input class="form-check-input" type="radio" name="jenis_peserta" id="mahasiswa" value="mahasiswa">
                                            <label class="form-check-label small fw-semibold" for="mahasiswa">Mahasiswa</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jenis_peserta" id="umum" value="umum">
                                            <label class="form-check-label small fw-semibold" for="umum">Umum</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="border rounded-3 p-3">
                                        <label class="form-label fw-bold small text-dark d-block mb-2">Minat Tambahan</label>
                                        <div class="form-check form-check-inline me-4">
                                            <input class="form-check-input" type="checkbox" name="minat[]" id="frontend" value="frontend">
                                            <label class="form-check-label small fw-semibold" for="frontend">Frontend</label>
                                        </div>
                                        <div class="form-check form-check-inline me-4">
                                            <input class="form-check-input" type="checkbox" name="minat[]" id="backend" value="backend">
                                            <label class="form-check-label small fw-semibold" for="backend">Backend</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="minat[]" id="database" value="database">
                                            <label class="form-check-label small fw-semibold" for="database">Database</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="form-label fw-bold small text-dark">Catatan</label>
                                    <textarea name="catatan" class="form-control p-3" rows="3" placeholder="Tuliskan kebutuhan belajar Anda (opsional)"></textarea>
                                    <div class="form-text small text-muted mt-1">Maksimal 300 karakter.</div>
                                </div>

                                <div class="col-12 mt-4">
                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="submit" class="btn btn-custom fw-semibold px-4 py-2 rounded-3">
                                            Kirim Pendaftaran
                                        </button>
                                        <a href="registration.php?mode=get" class="btn btn-custom fw-semibold px-4 py-2 rounded-3">
                                            Eksperimen GET
                                        </a>
                                        <a href="index.php" class="btn btn-custom fw-semibold px-4 py-2 rounded-3">
                                            Beranda
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    <?php endif; ?>

                </div>

            </div>
        </div>
    </div>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>