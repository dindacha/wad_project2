<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Pink</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #ffdada;
}    
.container {
    max-width: 1300px;
    margin: auto;
    padding: 20px;
    border-radius: 20px;
    background-color: #ffffff;
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
}
.btn-primary {
    background-color: #E06469;
    color: white;
  }
</style>
<body>

<div class="container mt-5">
    <h1>Kalkulator</h1>
    <div class="containercal" style="">
    <form method="post" action="">
        <div class="form-group">
            <label for="angka1">Angka Pertama:</label>
            <input type="number" class="form-control" name="angka1" placeholder="isi angka di sini" id="angka1" required>
        </div>
        <div class="form-group">
            <label for="operasi">Pilih Operasi:</label>
            <select class="form-control" name="operasi" id="operasi">
                <option value="tambah">Tambah </option>
                <option value="kurang">Kurang</option>
                <option value="kali">Kali</option>
                <option value="bagi">Bagi</option>
            </select>
        </div>
        <div class="form-group">
            <label for="angka2">Angka Kedua:</label>
            <input type="number" class="form-control" name="angka2" placeholder="isi angka di sini" id="angka2" required>
        </div>
        <button type="submit" class="btn btn-primary" name="hitung">Hitung</button>
    </form>
    </div>

    <?php
    if (isset($_POST['hitung'])) {
        $angka1 = floatval($_POST['angka1']);
        $angka2 = floatval($_POST['angka2']);
        $operasi = $_POST['operasi'];
        $hasil = 0;

        switch ($operasi) {
            case 'tambah':
                $hasil = $angka1 + $angka2;
                break;
            case 'kurang':
                $hasil = $angka1 - $angka2;
                break;
            case 'kali':
                $hasil = $angka1 * $angka2;
                break;
            case 'bagi':
                if ($angka2 != 0) {
                    $hasil = $angka1 / $angka2;
                } else {
                    echo '<div class="alert alert-danger">Pembagian oleh nol tidak diizinkan</div>';
                }
                break;
            default:
                echo '<div class="alert alert-danger">Operasi tidak valid</div>';
                break;
        }

        echo '<div class="alert mt-3" style="background-color: pink;">Hasil perhitungan: ' . $hasil . '</div>';

    }
    ?>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
