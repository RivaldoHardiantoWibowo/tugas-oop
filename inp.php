<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>
<body>
    <form method="post" action="">
        <label for="">Masukkan nama anda</label><br>
        <input type="text" name="txnama" id=""><br>
        <label for="">Masukkan umur anda</label><br>
        <input type="text" name="txumur" id=""><br>
        <label for="">Masukkan nama panggilan anda</label><br>
        <input type="text" name="txnamap" id=""><br>
        <input type="submit" value="simpan" name="btsimpan">
    </form>
</body>
</html>

<?php
    class biodata{
        public $data;

        public function inputData($data){
            $this->data = $data;
            if ($this->data !="") {
                return $data;
            }else{
                return "Data butuh diisi!";
            }
        }
    }

    $data1 = new biodata();
    if (isset($_POST['btsimpan'])) {
        echo "nama anda adalah " .$data1->inputData($_POST['txnama'])."<br>";
        echo "umur anda adalah " .$data1->inputData($_POST['txumur'])."<br>";
        echo "nama panggilan anda adalah " .$data1->inputData($_POST['txnamap']);
    }

?>