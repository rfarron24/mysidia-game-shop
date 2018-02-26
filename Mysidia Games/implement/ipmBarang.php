<?php

require_once '../Model/barang.php';
require_once 'connection.php';

class ipmBarang {
    private $c, $sql;
    public function _construct(){
       $this->c =new connection();
    }
    
    function tambahData(Barang $b){
        $m=$this->c->setConnection();
        $this->sql="inser into tbBarang (id, nama, harga, platform satuan, jmlStock) VALUES 
            ('".$b->getIdbarang().
                "','".$b->getNamabarang().
                 "','".$b->getPlatform().
                "','".$b->getHargaBarang().
                "','".$b->getSatuan().
                "','".$b->getJumlah()."')'";  
        
        mysql_query($this->sql);
        $this->c->closeConnection($m);
    }
    
    function ubahData($idBarang){
        
        
    }
    function hapusData($idBarang){
        $m=$this->c->setConnection();
        $this->sql="delete from tbBarang where idBarang='".$idBarang."'";
        mysql_query($this->sql);
        $this->c->closeConnection($m);
    }
    function ambilSatuBarang($idBarang){
        
    }
    function ambilSemuaBarang(){
        
    }
}

?>
