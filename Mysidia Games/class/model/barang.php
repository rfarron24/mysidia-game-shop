<?php

class barang {
       Private $idbarang, $namabarang, $platform, $harga, $satuan, $stok;
    
    public function __construct() {
        ;
    }
    
    function setIdbarang($id){
        $this->idbarang=$id;
    }
    
    function getIdbarang(){
        return $this->idbarang;
    }
    
    function setNamabarang($nama){
        $this->namabarang=$nama;
    }
    
    function getNamabarang(){
        return $this->namabarang;
    }
       function setPlatform($platform){
        $this->platform=$platform;
    }
    
    function getPlatform(){
        return $this->platform;
    }
    function setHargabarang($harga){
        $this->harga=$harga;
    }
    
    function setHargabarang(){
        return $this->harga;
    }
    function setSatuanbarang($satuan){
        $this->satuan=$satuan;
        
    }
    function setSatuanbarang(){
        return $this->satuan;
    }
    
     function setStokbarang($stok){
        $this->stok=$stok;
        
    }
    function setStokbarang(){
        return $this->stok;
    } 
    
}

?>
