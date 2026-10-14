<?php

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$course = $_POST['course'] ?? '';
$duration = $_POST['duration'] ?? 1;


// Harga kursus per bulan
$prices = [
    'Web Development' => 500000,
    'UI/UX Design' => 450000,
    'Digital Marketing' => 400000,
    'Data Analysis' => 550000
];


// Mengambil harga sesuai kursus
$price = $prices[$course] ?? 0;


// Menghitung total biaya
$total = $price * $duration;

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Pendaftaran Berhasil - KursusKu</title>

    <link rel="stylesheet"
          href="assets/css/style.css">

</head>

<body>

<div class="container">

    <div class="card">

        <h1>Pendaftaran Berhasil!</h1>

        <p class="subtitle">
            Data pendaftaran kamu berhasil diproses.
        </p>

        <div class="data">

            <p>
                <strong>Nama:</strong>
                <?= htmlspecialchars($name) ?>
            </p>

            <p>
                <strong>Email:</strong>
                <?= htmlspecialchars($email) ?>
            </p>

            <p>
                <strong>Nomor HP:</strong>
                <?= htmlspecialchars($phone) ?>
            </p>

            <p>
                <strong>Kursus:</strong>
                <?= htmlspecialchars($course) ?>
            </p>

            <p>
                <strong>Durasi:</strong>
                <?= htmlspecialchars($duration) ?> Bulan
            </p>

            <p>
                <strong>Total Biaya:</strong>
                Rp<?= number_format($total, 0, ',', '.') ?>
            </p>

        </div>

        <a href="registration.php" class="button">
            Kembali ke Pendaftaran
        </a>

        <a href="index.php" class="back-link">
            ← Kembali ke Beranda
        </a>

    </div>

</div>

</body>

</html>