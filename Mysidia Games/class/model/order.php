<?php


class order {
    
    
       Private $noorder, $namapemesan, $alamat, $nohp, $email, $buktibayar, $statuskirim, $tglorder, $tglkirim;
    
    public function __construct() {
        ;
    }
    
    function setNoorder($no){
        $this->noorder=$no;
    }
    
    function getNoorder(){
        return $this->noorder;
    }
    function setNamapemesan($nama){
        $this->namapemesan=$nama;
    }
    
    function getNamapemesan(){
        return $this->namapemesan;
    }
    function setAlamatpemesan($alamat){
        $this->alamat=$alamat;
    }
    
    function getAlamatpemesan(){
        return $this->alamat;
    }
    function setNoph($hp){
        $this->nohp=$hp;
    }
    
    function getNohp(){
        return $this->$nohp;
    }
    function setEmail($email){
        $this->email=$email;
    }
    
    function getEmail(){
        return $this->email;
    }
    function setBuktibayar($bayar){
        $this->buktibayar=$bayar;
    }
    
    function getBuktibayar(){
        return $bayar->buktibayar;
    }
    function setStatuskirim($status){
        $this->statuskirim=$status;
    }
    
    function getStatuskirim(){
        return $this->statuskirim;
    }
    function setTanggalorder($tglorder){
        $this->tglorder=$tglorder;
    }
    
    function getTanggalorder(){
        return $this->tglorder;
    }
    function setTanggalkirim($tglkirim){
        $this->tglkirim=$tglkirim;
    }
    
    function getTanggalkirim(){
        return $this->tglkirim;
    }
}

?>
