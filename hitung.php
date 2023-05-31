<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="kalkulator">
        <center><h2 class="judul">kalkulator</h2></center>
        <!-- <a class="brand">Tugas oop</a> -->
        <form method="post" action="hitung.php">
            <input type="number" name="bil1" class="bil" placeholder="input angka pertama">
            <input type="number" name="bil2" class="bil" placeholder="input angka kedua">
            <select class="opt" name="operasi">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">*</option>
                <option value="bagi">/</option>
            </select>
            <input type="submit" name="hitung" value="Hitung" class="tombol">
            <input type="reset" value="reset" class="tombol">
        </form>
        <?php
        if(isset($_POST['hitung'])){
            include "kalkulator.php";
            $angka1 = $_POST['bil1'];
            $angka2 = $_POST['bil2'];
            $operasi = $_POST['operasi'];
            $hasil = new kalkulator($angka1, $angka2);
            Switch($operasi){
                case'tambah':
                    echo "<input type'text'  value=".$angka1."+".$angka2."=".$hasil->tambah()." class='bil'";
                    break;
                case'kurang':
                    echo "<input type'text'  value=".$angka1."-".$angka2."=".$hasil->kurang()." class='bil'";
                    break;
                case'kali':
                    echo "<input type'text'  value=".$angka1."*".$angka2."=".$hasil->kali()." class='bil'";
                     break;
                case'bagi':
                    echo "<input type'text'  value=".$angka1."/".$angka2."=".$hasil->bagi()." class='bil'";
                    break;
                default:
                    break;
    

            }
        }else{
            echo "<input type='text' value='0' class='bil'>";
        }
        
        ?>
    </div>
</body>
</html>