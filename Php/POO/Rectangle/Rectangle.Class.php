<?php

class Rectangle
{
    // Attributs

    private $_longueur;
    private $_largeur;

    // Assesseurs

    public function getLongueur()
    {
        return $this->_longueur;
    }

    public function setLongueur($longueur)
    {
        $this->_longueur = $longueur;
    }

    public function getLargeur()
    {
        return $this->_largeur;
    }

    public function setLargeur($largeur)
    {
        $this->_largeur = $largeur;
    }

    // Constructeur

    public function __construct(array $options = [])
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

    // Autres méthodes

    public function toString()
    {
        return "Longueur : " . $this->getLongueur() . "\n" . "Largeur : " . $this->getLargeur() . "\n" . "Périmètre : " . $this->perimetre() . "\n" . "Aire : " . $this->aire() . " m²" . "\n"; 
    }

    public function perimetre()
    {
        return ($this->getLongueur() + $this->getLargeur()) * 2;
    }

    public function aire()
    {
        return ($this->getLongueur() * $this->getLargeur());
    }

    public function estCarre()
    {
        if ($this->getLongueur() == $this->getLargeur()) {
            return "Il s'agit d'un carré.\n"; // Si la longueur est égal à la largeur alors c'est un carré
        }
        return "Il ne s'agit pas d'un carré.\n";
    }

    public function afficherRectangle()
    {
        echo $this->toString();
    }
}

$r1 = new Rectangle(["longueur" => 10, "largeur" => 10]);

var_dump($r1);
echo "\n";
echo $r1->estCarre(); // affichage de la fonction estCarre
