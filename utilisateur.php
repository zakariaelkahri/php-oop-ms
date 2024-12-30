<?php
class Utlisateur {

    private string $name ;
    private string $email ;
    function __construct($name,$email){

        $this->name = $name ; 
        $this->email = $email;
    }

    public function getName(){
        return $this->name ;
    }
    public function getEmail(){
        return $this->email ;
    }

    public function setName($name){

        $this->name = $name ; 
    }
    public function setEmail($email){

        $this->email = $email ; 
    }

    public function displayDetails($name,$email){
        $display = new Utlisateur($name,$email);
      echo  $display->$this->getName();
       echo $display->$this->getEmail();
    }
}



?>