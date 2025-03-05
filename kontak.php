<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link fw-bold text-white" href="#">Ilhamsyah Adi Krisna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kontak.php">Kontak</a>
                </li>
                <a class="nav-link" href="bulan.php">Cek Bulan</a>
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
            <h2 class="text-center text-primary">Formulir</h2>
            <form>
                <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email">
                </div>

                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin:</label><br>
                    <input type="radio" name="jk" value="L"> Laki-laki
                    <input type="radio" name="jk" value="P"> Perempuan
                </div>

                <div class="mb-3">
                    <label class="form-label">Hobi:</label><br>
                    <input type="checkbox" name="hobi" value="1"> Olahraga
                    <input type="checkbox" name="hobi" value="2"> Musik
                    <input type="checkbox" name="hobi" value="3"> Membaca
                </div>

                <div class="mb-3">
                    <label class="form-label">Kesan Pesan:</label>
                    <textarea class="form-control" name="kesan_pesan"></textarea>
                </div>

                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>