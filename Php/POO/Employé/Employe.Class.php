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
    private static $_compteur;
    private $_agence;

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

    public function setDateEmbauche(DateTime $dateEmbauche)
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

    /*************** Méthode static ********************** */

    public static function getCompteur()
    {
        return self::$_compteur;
    }

    public static function setCompteur($compteur)
    {
        self::$_compteur = $compteur;
    }

    public function getAgence()
    {
        return $this->_agence;
    }

    public function setAgence($agence)
    {
        $this->_agence = $agence;
    }

    /*****************Constructeur***************** */

    public function __construct($options)
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
        self::$_compteur ++;
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
    public function toString() // Affichage

    {
        return "M/Mme  " . $this->getNom() . " " . $this->getPrenom() . " a été embauché le " . $this->getDateEmbauche()->format('Y') . " pour le poste de " . $this->getJob() . " au service " . $this->getService() . ".\nLe salaire annuel de ce poste est de " . $this->getSalaire();
    }


    public static function compareTonNomPrenom($obj1, $obj2)
    {
        if ($obj1->getNom() < $obj2->getNom())
        {
            return -1;
        }
        else if ($obj1->getNom > $obj2->getNom())
        {
            return 1;
        }

    }

/**
 *
 * @param int inval Retourne la valeur numérique entière équivalente d'une variable
 * @param new DateTime()  DateTime est une classe représentant une date précise
 */

    public function anciennete() // Fonction calculant les années d'ancienneté

    {

        $entree = $this->getDateEmbauche();
        $actuelle = new DateTime('now');
        $interval = $entree->diff($actuelle, true);
        return intval(($interval->format('%Y'))); // Retourne l'entier contenant l'année d'ancienneté
    }

    private function primeSalaireAnnuel()
    {
        $primeSalaire = ($this->getSalaire() * 1000) * 0.05;
        return floatval($primeSalaire);
    }

    private function primeAnciennete()
    {
        $primeAnciennete = ($this->getSalaire() * 1000) * 0.02 * $this->anciennete();
        return floatval($primeAnciennete);
    }

    public function prime()
    {
        return $this->primeAnciennete() + $this->primeSalaireAnnuel();

    }



}
