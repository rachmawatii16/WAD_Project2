<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- style -->
    <style>
        {
            margin: 0;
	        padding: 0;
	        font-family: sans-serif;
        }
        .result-box {
            border: 5px solid #f5efdf;
            background-color: #fff;
            padding: 10px;
            margin: 10px auto;
            width: 800px;
            text-align: left;
            border-radius: 5px;
        }
        body {
            background-color: #fff;
        }
        .container {
            background-color: #f5efdf;
            border-radius: 8px;
            margin-top: 18px;
            padding: 18px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.75);
        }
        .btn-primary {
            background-color: #000;
            border: none;
        }
        .btn-primary:hover {
            background-color: #000;
        }
        .icon {
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mb-3">Selamat datang di latihan 2</h2>
        <p>Ini adalah kalkulator sederhana</p
        <!-- input 1 -->
        <p>Bilangan Pertama</p>
        <form method="POST" action="">
            <div class="form-group">
                <input type="text" class="form-control" name="bilangan1" placeholder="Bilangan pertama">
            </div>
            <!-- operasi -->
            <p>Pilih Operasi</p>
            <div class="form-group">
                <select class="form-control" name="operasi">
                    <option value="tambah">+</option>
                    <option value="kurang">-</option>
                    <option value="kali">*</option>
                    <option value="bagi">/</option>
                </select>
            </div>
            <!-- input 2 -->
            <p>Bilangan Kedua</p>
            <div class="form-group">
                <input type="text" class="form-control" name="bilangan2" placeholder="Bilangan kedua">
            <!-- hitung -->
            </div>
           <center><button type="submit" class="btn btn-primary" name="hitung"><i class="fas fa-calculator icon"></i> Hitung</button></center>
        </form>
        <?php
        // operasi
        if (isset($_POST['hitung'])){
            $bilangan1 = $_POST['bilangan1'];
            $bilangan2 = $_POST['bilangan2'];
            $operasi = $_POST['operasi'];
            if ($operasi == "tambah") {
                $hasil = $bilangan1 + $bilangan2;
            } elseif ($operasi == "kurang") {
                $hasil = $bilangan1 - $bilangan2;
            } elseif ($operasi == "kali") {
                $hasil = $bilangan1 * $bilangan2;
            } elseif ($operasi == "bagi") {
                if ($bilangan2 == 0) {
                    echo "<p class='result'>Error</p>";
                } else {
                    $hasil = $bilangan1 / $bilangan2;
                }
            }
            // hasil
            if (isset($hasil)) {
                echo "<div class='result-box'>";
                echo "<p class='result'>Hasil: $hasil</p>";
                echo "</div>";
            }
        }
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
