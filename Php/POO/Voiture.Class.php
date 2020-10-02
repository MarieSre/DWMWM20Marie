<?php
//M.S

class Voiture
{
    // Attributs
    private $_marque;
    private $_modele;
    private $_km;


    // Constructeur
    function __construct($marque,$modele,$km)
    {
        $this->setMarque($marque);
        $this->setModele($modele);
        $this->setKm($km);
    }

    // Assesseurs

    //GETTER

    function getMarque($ma)
    {
        return $this->_marque;
    }
    function getModele($mo)
    {
        return $this->_modele;
    }
    function getKm($k)
    {
        return $this->_km;
    }

    // SETTER

    function setMarque($ma)
    {
        $this->_marque = strtoupper($ma);
    }
    function setModele($mo)
    {
        $this->_modele = strtoupper($mo);
    }
    function setKm($k)
    {
        $this->_km = $k > 0? $k : null;
    }

    // Autres Méthodes

    // toString

    function toString()
    {
        $reponse = "C'est une voiture de la marque " . $this->_marque . " Modèle ". $this->_modele. ". Elle a ". $this->_km. " kilomètres au compteur.";
    }
}