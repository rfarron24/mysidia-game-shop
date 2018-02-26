<?php


class pesanan {
    Private $noorder, $kodebarang, $jmlorder, $hargabarang;
    
    public function __construct() {
        ;
    }
    
    function setNoorder($no){
        $this->noorder=$no;
    }
    
    function getNoorder(){
        return $this->noorder;
    }
    function setKodebarang($kode){
        $this->kodebarang=$kode;
    }
    
    function getKodebarang(){
        return $this->kodebarang;
    }
    function setJumlahorder($jumlah){
        $this->jmlorder=$no;
    }
    
    function getJumlahorder(){
        return $this->jmlorder;
    }
    function setHargabarang($harga){
        $this->hargabarang=$harga;
    }
    
    function getHargabarang(){
        return $this->hargabarang;
    }
}

?>
