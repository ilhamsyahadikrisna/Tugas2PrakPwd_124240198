<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Bulan</title>
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
                    <a class="nav-link active" href="bulan.php">Cek Bulan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="segitiga.php">Luas Segitiga</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kubus.php">Volume Kubus</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="card p-4 shadow">
            <h2 class="text-center text-primary">Cek Nama Bulan</h2>
            <form action="" method="post">
                <div class="mb-3">
                    <label class="form-label">Masukkan Angka (1-12):</label>
                    <input type="number" name="bulanInput" class="form-control" min="1" max="12" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Cek Bulan</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $bulan = [
                    "Januari",
                    "Februari",
                    "Maret",
                    "April",
                    "Mei",
                    "Juni",
                    "Juli",
                    "Agustus",
                    "September",
                    "Oktober",
                    "November",
                    "Desember"
                ];
                $input = $_POST['bulanInput'];
                if ($input >= 1 && $input <= 12) {
                    echo "<div class='alert alert-success mt-3'>Bulan: " . $bulan[$input - 1] . "</div>";
                } else {
                    echo "<div class='alert alert-danger mt-3'>Masukkan angka antara 1-12!</div>";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>