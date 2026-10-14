<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pendaftaran Kursus - KursusKu</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<div class="container">

    <div class="card">

        <h1>Pendaftaran Kursus</h1>

        <p class="subtitle">
            Silakan isi data berikut untuk melakukan pendaftaran.
        </p>

        <form action="process-registration.php" method="POST">

            <label for="name">Nama Lengkap</label>

            <input
                type="text"
                id="name"
                name="name"
                placeholder="Masukkan nama lengkap"
                required
            >

            <label for="email">Email</label>

            <input
                type="email"
                id="email"
                name="email"
                placeholder="Masukkan email"
                required
            >

            <label for="phone">Nomor HP</label>

            <input
                type="text"
                id="phone"
                name="phone"
                placeholder="Masukkan nomor HP"
                required
            >

            <label for="course">Pilih Kursus</label>

            <select id="course" name="course" required>

                <option value="">-- Pilih Kursus --</option>

                <option value="Web Development">
                    Web Development
                </option>

                <option value="UI/UX Design">
                    UI/UX Design
                </option>

                <option value="Digital Marketing">
                    Digital Marketing
                </option>

                <option value="Data Analysis">
                    Data Analysis
                </option>

            </select>

            <label for="duration">Durasi Kursus</label>

            <select id="duration" name="duration" required>

                <option value="1">1 Bulan</option>
                <option value="2">2 Bulan</option>
                <option value="3">3 Bulan</option>
                <option value="4">4 Bulan</option>
                <option value="5">5 Bulan</option>

            </select>

            <!-- Bagian Tombol Aksi (Daftar Sekarang, History Dummy, Loop Lab) -->
            <div class="button-group" style="display: flex; gap: 10px; margin-top: 15px; margin-bottom: 15px;">
                <button type="submit" class="button">
                    Daftar Sekarang
                </button>
                <a href="history.php" class="button button-secondary">
                    History Dummy
                </a>
                <a href="loop-lab.php" class="button button-secondary">
                    Loop Lab
                </a>
            </div>

        </form>

        <a href="index.php" class="back-link">
            &larr; Kembali ke Beranda
        </a>

    </div>

</div>

</body>
</html>