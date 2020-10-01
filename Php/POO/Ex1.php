<?php

class Personne
{
    // Attributs
    private $_nom;
    private $_prenom;

    // Constructeur
    public function __construct()
    {

    }

    //Assesseurs

    //GETTER
    public function getNom()
    {
        return $this->_nom;
    }
    public function getPrenom()
    {
        return $this->_prenom;
    }

    // SETTER
    public function setNom($n)
    {
        $this->_nom = $n;
    }
    public function setPrenom($p)
    {
        $this->_prenom = $p;
    }
}
$a = "toto";
var_dump($a);
$n1 = new Personne();
var_dump($n1);
$n1->setNom("Pouet");
var_dump($n1);
echo $n1->getNom();
echo"\n";
$n1->setPrenom("Marie");
var_dump($n1);
echo $n1->getPrenom();