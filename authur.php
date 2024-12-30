<?php

require_once "./utilisateur.php"

class Author extends Utlisateur {
    private string $biographie ;

    function __construct($name,$email,$biographie){

        parent::__construct($name,$email);
  
        $this->biographie = $biographie;
    }

    public function getBiographie(){
        return $this->biographie ;
    }

    public function setEmail($biographie){

        $this->biographie = $biographie ; 
    }

    public function displayAuthor($name,$email,$biographie){
        $displayAuthrr = new Author($name,$email,$biographie);
       echo $display->$this->getName()."<br>";
       echo $display->$this->getEmail()."<br>";
       echo $display->$this->getBiographie();
    }

    public function createArticle($titre, $contenu):Article{
        $article = new Article($titre, $contenu);
        $article->$this->setTitre() ; 
        $article->$this->setContenu() ;
        return $article ;
    }

}



?>