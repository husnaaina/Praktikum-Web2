<?php 
// Buat Class 
class bmiPasien{
    // Membuat property
    public $nama, $berat, $tinggi, $umur, $jk;
    
    // Bikin construct : data diset user
    function __construct($nama, $berat, $tinggi, $umur, $jk){
        // masukin data ke property
        $this->nama = $nama;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
        $this->umur = $umur;
        $this->jk = $jk;
        


    }
    
    // Buat Methode
    public function hasilBMI(){
        // buat tinggi dalam meter
        $tinggi_m = $this->tinggi / 100;
        $bmi = $this->berat / ($tinggi_m * $tinggi_m);
        // balikin data
        return round($bmi) ;
    }
    // buat methode status bmi
    public function statusBMI(){
        // Simpan data BMI
        $bmi = $this->hasilBMI();
        // Cek data jadi status
        if ($bmi < 18.5) {
            return " Kekurangan Berat Badan";
        } elseif ($bmi >= 18.5 && $bmi <= 24.9){
            return "Normal (Ideal)";
        }elseif ($bmi >= 25 && $bmi <= 29.9){
            return "Kelebihan Berat Badan";
        }
        else {
            return "Kegemukan(Obesitas)";
        }
        
    }
}
// Buat Objek
// $pasien = new bmiPasien("Husna Aina", "56","155", "19", "P");
// // tampilin data 
// echo $pasien->nama . "<br>";
// echo $pasien->berat . "<br>";
// echo $pasien->tinggi . "<br>";
// echo $pasien->umur . "<br>";
// echo $pasien->jk . "<br>";
// echo $pasien->hasilBMI() . "<br>";
// echo $pasien->statusBMI() . "<br>";
?>