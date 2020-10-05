<?php

class Employe
{
    /*****************Attributs***************** */

    private $_nom;
    private $_prenom;
    private $_dateEmbauche;
    private $_job;
    private $_salaire;
    private $_service;

    /*****************Accesseurs***************** */

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

    public function getDateEmbauche()
    {
        return $this->_dateEmbauche;
    }

    public function setDateEmbauche($dateEmbauche)
    {
        $this->_dateEmbauche = $dateEmbauche;
    }

    public function getJob()
    {
        return $this->_job;
    }

    public function setJob($job)
    {
        $this->_job = $job;
    }

    public function getSalaire()
    {
        return $this->_salaire;
    }

    public function setSalaire($salaire)
    {
        $this->_salaire = $salaire;
    }

    public function getService()
    {
        return $this->_service;
    }

    public function setService($service)
    {
        $this->_service = $service;
    }



    /*****************Constructeur***************** */

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

    /*****************Autres Méthodes***************** */

    /**
     * Transforme l'objet en chaine de caractères
     *
     * @return String
     */
    public function toString()
    {
        return "M/Mme". $this->getNom(). " ". $this->getPrenom(). " a été embauché le ". $this->getDateEmbauche(). " pour le poste de ". $this->getJob(). " au service ". $this->getService(). ".\nLe salaire annuel de ce poste est de ". $this->getSalaire();
    }

    public function anciennete($entree)
    {
       $entree->$this->getDateEmbauche();
       $actuelle = new DateTime('now');
       $interval = $entree->diff($actuelle);
       return intval(($interval->format('%y'))); // Retourne l'entier contenant l'année d'ancienneté
    }


}
