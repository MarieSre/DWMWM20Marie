<?php
//M.S

class Personne1
{
    //Attributs
    private $_nom;
    private $_prenom;
    private $_age;

    //Assesseurs

    //GETTER
    public function getNom()
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
    public function setNom($n)
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

    //Constructeur

    // Constructeur
    public function __construct()
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
    }
    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
            {
                $this->$methode($value);
            }
        }
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
