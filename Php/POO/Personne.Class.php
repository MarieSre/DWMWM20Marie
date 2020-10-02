<?php
//M.S

class Personne
{
    //Attributs
    private $_nom;
    private $_prenom;
    private $_age;


    //Constructeur

    function __construct($nom, $prenom, $age)
    {
        $this ->setNom($nom);
        $this ->setPrenom($prenom);
        $this ->setAge($age);
    }

    //Assesseurs

    //GETTER
    function getNom()
    {
        return $this ->_nom;
    }
    function getPrenom()
    {
        return $this ->_prenom;
    }
    function getAge()
    {
        return $this ->_age;
    }
    
    //SETTER
    function setNom($n)
    {
        $this->_nom = strtoupper($n);
    }
    function setPrenom($p)
    {
        $this->_prenom = strtoupper($p);
    }
    function setAge($a)
    {
        $this->_age = $a > 0? $a : null;
    }


    // Autres Méthodes

    // toString

    function toString()
    {
        $reponse = "Cette personne s'appelle ". $this->_prenom. " " . $this->_nom .". Il/Elle est agé de ". $this->_age ." ans.\n";
        return $reponse;
    }

    function equalsTo($obj)
    {
        if ($this->_nom == $obj->getNom() && $this->_prenom == $obj->getPrenom() && $this->_age == $obj->getAge())
        {
            return true;
        }
        return false;
    }

    function compareTo($obj)
    {
        if ($this ->_age == $obj->getAge())
        {
            return 0;
        }
        else if ($this ->_age > $obj->getAge())
        {
            return 1;
        }
        else
        {
            return -1;
        }
    }
}
$n1 = new Personne("Serrure","Marie","24");
echo $n1->toString();
$n2 = new Personne("seRruRe","MarIs","24");
echo $n2->toString();
echo $n1->compareTo($n2);
$equal=$n1->equalsTo($n2);
echo "\n";
var_dump($equal);