<?php

class Période
{
    var $id;
    var $libelle;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getLibelle()
    {
        return $this->libelle;
    }
    
    public function __construct($id,$libelle)
    {
        $this->id=$id;
        $this->libelle=$libelle;
    }
}

?>