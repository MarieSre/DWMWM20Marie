<?php

class Agence
{
  
    /*****************Attributs***************** */
    private $_nomAgence;
    private $_adresse;
    private $_codePostal;
    private $_ville;
    private $_employes;

    /*****************Accesseurs***************** */

    public function getNomAgence()
    {
        return $this->_nomAgence;
    }

    public function setNomAgence($nomAgence)
    {
        $this->_nomAgence = $nomAgence;
    }

    public function getAdresse()
    {
        return $this->_adresse;
    }

    public function setAdresse($adresse)
    {
        $this->_adresse = $adresse;
    }

    public function getCodePostal()
    {
        return $this->_codePostal;
    }

    public function setCodePostal($codePostal)
    {
        $this->_codePostal = $codePostal;
    }

    public function getVille()
    {
        return $this->_ville;
    }

    public function setVille($ville)
    {
        $this->_ville = $ville;
    }
    
    
    public function getEmployes()
    {
        return $this->_employes;
    }

    public function setEmployes($employes)
    {
        $this->_employes = $employes;
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
        foreach ($data as $key => $value)
        {
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
        return "M/Mme " . $this->getEmployes()->getNom(). " ". $this->getEmployes()->getPrenom(). " est rattaché à l'agence " . $this->getNomAgence(). " qui se situe à cette adresse : ". $this->getAdresse(). " ". $this->getCodePostal(). " ". $this->getVille();
    }

    

    public function restauration()
    {
        $ticketResto =($this->getNomAgence());
    }




    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] obj
     * @return bool
     */
    public function equalsTo()
    {
        return true;
    }
    /**
     * Compare 2 objets
     * Renvoi 1 si le 1er est >
     *        0 si ils sont égaux
     *        -1 si le 1er est <
     *
     * @param [type] obj1
     * @param [type] obj2
     * @return void
     */
    public static function compareTo($obj)
    {
        return 0;
    }

 

}