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

        <h3 style="color: #0b5c53; font-size: 0.9rem; font-weight: bold; margin-bottom: 5px;">MILESTONE 6 • FORM LANJUTAN</h3>
        <h1>Daftar Kursus</h1>
        <p style="color: #6b7280; font-size: 0.85rem; margin-bottom: 25px;">Alur: landing page ❭ form ❭ proses PHP ❭ ringkasan. Memakai database.</p>

        <form action="process-registration.php" method="POST">

            <div style="display: flex; gap: 20px; margin-bottom: 15px;">
                <div style="flex: 1;">
                    <label style="font-weight: 600; font-size: 0.9rem; margin-bottom: 5px; display: block;">Nama lengkap</label>
                    <input type="text" name="nama" placeholder="" required style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px;">
                </div>
                <div style="flex: 1;">
                    <label style="font-weight: 600; font-size: 0.9rem; margin-bottom: 5px; display: block;">Email</label>
                    <input type="email" name="email" placeholder="" required style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px;">
                </div>
            </div>

            <div style="margin-bottom: 15px;">
                <label style="font-weight: 600; font-size: 0.9rem; margin-bottom: 5px; display: block;">Pilih kursus</label>
                <select name="kursus" required style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px; background: #fff;">
                    <option value="">-- Pilih kursus --</option>
                    <option value="Web Development">Web Development</option>
                    <option value="UI/UX Design">UI/UX Design</option>
                    <option value="Digital Marketing">Digital Marketing</option>
                    <option value="Data Analysis">Data Analysis</option>
                </select>
            </div>

            <div style="margin-bottom: 15px;">
                <label style="font-weight: 600; font-size: 0.9rem; margin-bottom: 8px; display: block;">Tipe peserta</label>
                <div style="display: flex; gap: 30px;">
                    <label style="font-weight: normal; cursor: pointer;"><input type="radio" name="tipe_peserta" value="Mahasiswa" required> Mahasiswa</label>
                    <label style="font-weight: normal; cursor: pointer;"><input type="radio" name="tipe_peserta" value="Guru"> Guru</label>
                    <label style="font-weight: normal; cursor: pointer;"><input type="radio" name="tipe_peserta" value="Umum"> Umum</label>
                </div>
            </div>

            <div style="margin-bottom: 15px;">
                <label style="font-weight: 600; font-size: 0.9rem; margin-bottom: 8px; display: block;">Minat belajar</label>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
                    <label style="font-weight: normal; cursor: pointer;"><input type="checkbox" name="minat[]" value="Frontend"> Frontend</label>
                    <label style="font-weight: normal; cursor: pointer;"><input type="checkbox" name="minat[]" value="Backend"> Backend</label>
                    <label style="font-weight: normal; cursor: pointer;"><input type="checkbox" name="minat[]" value="Database"> Database</label>
                    <label style="font-weight: normal; cursor: pointer;"><input type="checkbox" name="minat[]" value="UI/UX"> UI/UX</label>
                </div>
            </div>

            <div style="display: flex; gap: 20px; margin-bottom: 15px;">
                <div style="flex: 1;">
                    <label style="font-weight: 600; font-size: 0.9rem; margin-bottom: 5px; display: block;">Metode belajar</label>
                    <select name="metode" required style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px; background: #fff;">
                        <option value="">-- Pilih metode --</option>
                        <option value="Online">Online</option>
                        <option value="Offline">Offline</option>
                        <option value="Hybrid">Hybrid</option>
                    </select>
                </div>
                <div style="flex: 1;">
                    <label style="font-weight: 600; font-size: 0.9rem; margin-bottom: 5px; display: block;">Jumlah paket</label>
                    <select name="durasi" required style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px; background: #fff;">
                        <option value="1">1 paket</option>
                        <option value="2">2 paket</option>
                        <option value="3">3 paket</option>
                        <option value="4">4 paket</option>
                        <option value="5">5 paket</option>
                    </select>
                </div>
            </div>

            <div style="margin-bottom: 20px;">
                <label style="font-weight: 600; font-size: 0.9rem; margin-bottom: 5px; display: block;">Catatan tambahan</label>
                <textarea name="catatan" rows="4" style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px;" placeholder=""></textarea>
            </div>

            <!-- Tiga Tombol Bawah (Proses Pendaftaran, History Dummy, Loop Lab) -->
            <div style="display: flex; gap: 10px; margin-top: 20px;">
                <button type="submit" style="background-color: #0b5c53; color: white; border: none; padding: 10px 20px; border-radius: 6px; font-weight: 600; cursor: pointer;">Proses Pendaftaran</button>
                <a href="history.php" style="background-color: #0b5c53; color: white; text-decoration: none; padding: 10px 20px; border-radius: 6px; font-weight: 600; display: inline-block; text-align: center;">History Dummy</a>
                <a href="loop-lab.php" style="background-color: #0b5c53; color: white; text-decoration: none; padding: 10px 20px; border-radius: 6px; font-weight: 600; display: inline-block; text-align: center;">Loop Lab</a>
            </div>

        </form>

    </div>

</div>

</body>
</html>