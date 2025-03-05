<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas Segitiga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kontak.php">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bulan.php">Cek Bulan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="segitiga.php">Luas Segitiga</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kubus.php">Volume Kubus</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="card p-4 shadow">
            <h2 class="text-center text-primary">Hitung Luas Segitiga</h2>
            <form action="" method="post">
                <div class="mb-3">
                    <label class="form-label">Masukkan Alas:</label>
                    <input type="number" name="alas" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Masukkan Tinggi:</label>
                    <input type="number" name="tinggi" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Hitung</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $alas = $_POST['alas'];
                $tinggi = $_POST['tinggi'];
                $luas = 0.5 * $alas * $tinggi;
                echo "<div class='alert alert-success mt-3'>Luas Segitiga: $luas cm²</div>";
            }
            ?>
        </div>
    </div>
</body>

</html>