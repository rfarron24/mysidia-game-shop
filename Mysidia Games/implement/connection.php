<?php


class connection {
     private $HOST;
    private $USER;
    private $PASS;
    private $DATA;
    private $CONN;
    private $PORT;
    
    public function _construct(){
        $this->HOST="localhost";
        $this->PORT="3306";
        $this->USER="root";
        $this->PASS="";
        $this->DATA="mysidiagame";   
} 
public function setURL($cURL, $cUSER, $cPASS, $cDATA){
        $this->HOST=$cURL;
        $this->USER=$cUSER;
        $this->PASS=$cPASS;
        $this->DATA=$cDATA;
}
function setConnection(){
    $this->CONN = mysql_pconnect($this->HOST, $this->USER, $this->PASS);
    mysql_select_db($this->DATA, $this->CONN);
    return $this->CONN;
}
function closeConnection($param){
    mysql_close($param);
}
}

?>
