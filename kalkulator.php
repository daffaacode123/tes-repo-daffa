<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form method="post" action="">
        <input type="number" name="angka1" placeholder="Masukkan angka pertama" required>
        <select name="operator">
            <option value="+">Tambah (+)</option>
            <option value="-">Kurang (-)</option>
            <option value="*">Kali (*)</option>
            <option value="/">Bagi (/)</option>
        </select>
        <input type="number" name="angka2" placeholder="Masukkan angka kedua" required>
        <br><br>
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <div class="jumlah">
    <?php 
    if(isset($_POST['hitung'])){
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operator = $_POST['operator'];
        
        switch($operator) {
            case '+':
                $hasil = $angka1 + $angka2;
                break;
            case '-':
                $hasil = $angka1 - $angka2;
                break;
            case '*':
                $hasil = $angka1 * $angka2;
                break;
            case '/':
                if ($angka2 != 0) {
                    $hasil = $angka1 / $angka2;
                } else {
                    $hasil = "Error: Tidak dapat membagi dengan nol";
                }
                break;
            default:
                $hasil = "Operator tidak valid";
        }
        echo "<h3>hasil: $hasil</h3>";
    }
    ?>
</div>


</body>
</html>
