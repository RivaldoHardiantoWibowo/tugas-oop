<?php
class kalkulator {
    public $angka1;
    public $angka2;
    
    function __construct($angka1, $angka2) {
        $this->angka1=$angka1;
        $this->angka2=$angka2;
    }

    function Tambah(){
            $hasil = $this->angka1 + $this->angka2;
            return $hasil;
        
    }

    function Kurang(){
            $hasil = $this->angka1 - $this->angka2;
            return $hasil;
    }

    function Kali(){  
        if($_POST['bil1'] !== " "){
            $hasil = $this->angka1 * $this->angka2;
            return $hasil;
            }else{
                return "jangan kosong datanya";
            }
    }

    function Bagi(){
        if($this->angka1 !=0 && $this->angka2 !=0){
            $hasil = $this->angka1 / $this->angka2;
            return $hasil;
        }else {
            echo "<script>
            alert('angkanya ngga boleh 0 tau!!');
            document.location.href = 'hitung.php';
            </script>";
        }
    }


}

?>