<?php 
    require_once "products.php";

    class Medicine extends Product {
       private $dose;
       private $type;
       private $expirationDate;

       function setDose($dose){
        $this->dose = $dose;
       }
       function setType($type){
        $this->type = $type;
       }
       function setExpirationDate($expirationDate){
        $this->expirationDate = $expirationDate;
       }
       
       function getDose(){
        echo $this->dose;
       }
       function getType(){
        echo $this->type;
       }
       function getExpirationDate(){
        echo $this->expirationDate;
       }
       
       function computeSRP() {
        echo ($this->price * 2);
       } 
    }
?>