<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Lab - KursusKu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root { --primary-color: #0b5c53; }
        body { background-color: #e8f3f1; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .navbar-custom { background-color: var(--primary-color); }
    </style>
</head>
<body>
    <nav class="navbar navbar-custom py-3 text-white">
        <div class="container">
            <span class="fw-bold">KursusKu - Loop Lab</span>
            <a href="registration.php" class="btn btn-light btn-sm fw-semibold">Kembali ke Form</a>
        </div>
    </nav>
    <div class="container my-5">
        <div class="card p-4 shadow-sm border-0 rounded-4">
            <h3 class="fw-bold text-dark">Latihan Perulangan (Loop Lab)</h3>
            <p class="text-muted">Halaman simulasi loop PHP untuk pendaftaran kursus.</p>
            <ul class="list-group">
                <?php 
                for ($i = 1; $i <= 5; $i++) {
                    echo "<li class='list-group-item'>Paket Kursus ke-$i: Terverifikasi</li>";
                }
                ?>
            </ul>
        </div>
    </div>
</body>
</html>