<?php

$name = trim($_POST['name'] ?? '');

$participantType = $_POST['participant_type'] ?? '';

$course = $_POST['course'] ?? '';

$interests = $_POST['interest'] ?? [];


/*
|--------------------------------------------------------------------------
| VALIDASI
|--------------------------------------------------------------------------
*/

$errors = [];

if ($name === '') {
    $errors[] = 'Nama wajib diisi.';
}

if ($participantType === '') {
    $errors[] = 'Tipe peserta wajib dipilih.';
}

if ($course === '') {
    $errors[] = 'Kursus wajib dipilih.';
}


/*
|--------------------------------------------------------------------------
| JIKA ADA ERROR
|--------------------------------------------------------------------------
*/

if (!empty($errors)) {

    echo '<h2>Data Belum Lengkap</h2>';

    echo '<ul>';

    foreach ($errors as $error) {

        echo '<li>' . htmlspecialchars($error) . '</li>';

    }

    echo '</ul>';

    echo '<a href="registration.php">Kembali ke Form</a>';

    exit;
}


/*
|--------------------------------------------------------------------------
| HARGA KURSUS
|--------------------------------------------------------------------------
*/

$courses = [

    'PHP Dasar' => 150000,

    'HTML & CSS' => 100000,

    'JavaScript Dasar' => 175000,

    'Laravel Fundamental' => 250000

];

$price = $courses[$course];


/*
|--------------------------------------------------------------------------
| DISKON BERDASARKAN TIPE PESERTA
|--------------------------------------------------------------------------
*/

$discountPercent = 0;

if ($participantType === 'mahasiswa') {

    $discountPercent = 10;

} elseif ($participantType === 'guru') {

    $discountPercent = 15;

} elseif ($participantType === 'umum') {

    $discountPercent = 5;

}


/*
|--------------------------------------------------------------------------
| HITUNG TOTAL
|--------------------------------------------------------------------------
*/

$discount = $price * $discountPercent / 100;

$total = $price - $discount;

?>

<!DOCTYPE html>

<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Ringkasan Pendaftaran</title>

    <link rel="stylesheet"
        href="assets/css/style.css">

</head>

<body>

    <main>

        <h1>Ringkasan Pendaftaran</h1>

        <p>
            <strong>Nama:</strong>

            <?= htmlspecialchars($name) ?>
        </p>

        <p>
            <strong>Tipe Peserta:</strong>

            <?= htmlspecialchars(ucfirst($participantType)) ?>
        </p>

        <p>
            <strong>Kursus:</strong>

            <?= htmlspecialchars($course) ?>
        </p>

        <p>
            <strong>Minat:</strong>

            <?php if (!empty($interests)): ?>

                <?= htmlspecialchars(implode(', ', $interests)) ?>

            <?php else: ?>

                Tidak ada minat yang dipilih.

            <?php endif; ?>

        </p>

        <hr>

        <p>
            <strong>Harga Kursus:</strong>

            Rp<?= number_format($price, 0, ',', '.') ?>
        </p>

        <p>
            <strong>Diskon:</strong>

            <?= $discountPercent ?>%
        </p>

        <p>
            <strong>Potongan:</strong>

            Rp<?= number_format($discount, 0, ',', '.') ?>
        </p>

        <h2>

            Total Bayar:

            Rp<?= number_format($total, 0, ',', '.') ?>

        </h2>

        <br>

        <a href="registration.php">
            Kembali ke Form
        </a>

    </main>

</body>

</html>