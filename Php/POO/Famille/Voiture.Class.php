<?php
//M.S

class Voiture
{
    // Attributs
    private $_marque;
    private $_modele;
    private $_km;

    // Assesseurs

    //GETTER

    public function getMarque()
    {
        return $this->_marque;
    }
    public function getModele()
    {
        return $this->_modele;
    }
    public function getKm()
    {
        return $this->_km;
    }

    // SETTER

    public function setMarque($ma)
    {
        $this->_marque = strtoupper($ma);
    }
    public function setModele($mo)
    {
        $this->_modele = strtoupper($mo);
    }
    public function setKm($k)
    {
        $this->_km = $k > 0 ? $k : null;
    }

    // Constructeur
    public function __construct($options)
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

    public function toString()
    {
        $reponse = "C'est une voiture de la marque " . $this->_marque . " Modèle " . $this->_modele . ". Elle a " . $this->_km . " kilomètres au compteur.\n";
        return $reponse;
    }

    public function equalsTo($obj)
    {
        if ($this->_marque == $obj && $this->_modele == $obj && $this->_km == $obj) {
            return true;
        }
        return false;
    }

    public function compareTo($obj)
    {
        if ($this->_km == $obj->getKm()) {
            return 0;
        } else if ($this->_km > $obj->getKm()) {
            return 1;
        } else {
            return -1;
        }
    }
}

