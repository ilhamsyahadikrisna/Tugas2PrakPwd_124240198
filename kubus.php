<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volume Kubus</title>
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
                    <a class="nav-link" href="segitiga.php">Luas Segitiga</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="kubus.php">Volume Kubus</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="card p-4 shadow">
            <h2 class="text-center text-primary">Hitung Volume Kubus</h2>
            <form action="" method="post">
                <div class="mb-3">
                    <label class="form-label">Masukkan Panjang Sisi:</label>
                    <input type="number" name="sisi" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Hitung</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $sisi = $_POST['sisi'];
                $volume = $sisi * $sisi * $sisi;
                echo "<div class='alert alert-success mt-3'>Volume Kubus: $volume cm³</div>";
            }
            ?>
        </div>
    </div>
</body>

</html>