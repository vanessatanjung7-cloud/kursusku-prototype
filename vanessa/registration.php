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

    <title>Form Pendaftaran Kursus</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <main>

        <h1>Form Pendaftaran Kursus</h1>

        <form action="process-registration.php" method="POST">

            <div>
                <label for="name">Nama Lengkap</label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Masukkan nama lengkap">
            </div>

            <br>

            <div>

                <p><strong>Tipe Peserta</strong></p>

                <label>
                    <input
                        type="radio"
                        name="participant_type"
                        value="mahasiswa">

                    Mahasiswa
                </label>

                <br>

                <label>
                    <input
                        type="radio"
                        name="participant_type"
                        value="guru">

                    Guru
                </label>

                <br>

                <label>
                    <input
                        type="radio"
                        name="participant_type"
                        value="umum">

                    Umum
                </label>

            </div>

            <br>

            <div>

                <label for="course">
                    <strong>Pilih Kursus</strong>
                </label>

                <br>

                <select id="course" name="course">

                    <option value="">
                        -- Pilih Kursus --
                    </option>

                    <?php foreach ($courses as $course): ?>

                        <option
                            value="<?= htmlspecialchars($course['name']) ?>">

                            <?= htmlspecialchars($course['name']) ?>
                            - Rp<?= number_format($course['price'], 0, ',', '.') ?>

                        </option>

                    <?php endforeach; ?>

                </select>

            </div>

            <br>

            <div>

                <p><strong>Minat</strong></p>

                <label>
                    <input
                        type="checkbox"
                        name="interest[]"
                        value="Pemrograman">

                    Pemrograman
                </label>

                <br>

                <label>
                    <input
                        type="checkbox"
                        name="interest[]"
                        value="Web Design">

                    Web Design
                </label>

                <br>

                <label>
                    <input
                        type="checkbox"
                        name="interest[]"
                        value="Database">

                    Database
                </label>

                <br>

                <label>
                    <input
                        type="checkbox"
                        name="interest[]"
                        value="Mobile">

                    Mobile
                </label>

            </div>

            <br>

            <button type="submit">
                Daftar Kursus
            </button>

        </form>

    </main>

</body>

</html>