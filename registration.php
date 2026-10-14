<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran KursusKu</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<div class="container">

    <div class="card">

        <h1>Pendaftaran Kursus</h1>

        <p>Silakan isi data pendaftaran berikut.</p>

        <form action="process-registration.php" method="POST">

            <label>Nama Lengkap</label>
            <input
                type="text"
                name="nama"
                placeholder="Masukkan nama lengkap"
                required
            >

            <label>Email</label>
            <input
                type="email"
                name="email"
                placeholder="Masukkan email"
                required
            >

            <label>Nomor HP</label>
            <input
                type="text"
                name="no_hp"
                placeholder="Masukkan nomor HP"
                required
            >

            <label>Pilih Kursus</label>

            <select name="kursus" required>

                <option value="">
                    -- Pilih Kursus --
                </option>

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

            <label>Durasi Kursus</label>

            <select name="durasi" required>

                <option value="1">1 Bulan</option>
                <option value="2">2 Bulan</option>
                <option value="3">3 Bulan</option>
                <option value="4">4 Bulan</option>
                <option value="5">5 Bulan</option>

            </select>

            <button type="submit">
                Daftar Sekarang
            </button>

        </form>

    </div>

</div>

</body>
</html>