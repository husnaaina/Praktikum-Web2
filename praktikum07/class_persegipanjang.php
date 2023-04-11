<?php 
class persegiPanjang{
    public $panjang, $lebar;

    function __construct($panjang, $lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function hitungKeliling(){
        return $this-> panjang + $this->lebar + $this-> panjang + $this->lebar;
    } 
    
    public function hitungLuas(){
        return $this-> panjang * $this->lebar;
    }
}
?>