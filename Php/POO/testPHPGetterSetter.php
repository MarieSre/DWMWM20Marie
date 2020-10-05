<?php
class Test // Test du plugin Getter & Setter
{
    private $_test;
    private $_nom;
    private $_prenom;
    private $_voiture;


    public function getTest()
    {
        return $this->_test;
    }

    public function setTest($test)
    {
        $this->_test = $test;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    public function getVoiture()
    {
        return $this->_voiture;
    }

    public function setVoiture($voiture)
    {
        $this->_voiture = $voiture;
    }
}



