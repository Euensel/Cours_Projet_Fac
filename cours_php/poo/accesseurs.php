<?php

/*
========================
ENCAPSULATION + GETTERS / SETTERS
========================

👉 Encapsulation :
C’est un principe de la POO qui consiste à cacher les données (attributs)
et contrôler leur accès.

Ici :
- $_name et $_speed sont en private ❌ (non accessibles directement)
- On est obligé de passer par des méthodes pour y accéder ✅

👉 Pourquoi ?
- Éviter les erreurs
- Contrôler les valeurs
- Sécuriser les données


========================
GETTER (ACCESSEUR)
========================

Un getter permet de LIRE la valeur d’un attribut privé.

Convention :
getNomAttribut()

Ici :
getName() → retourne le nom du véhicule

👉 On ne modifie rien, on lit juste la valeur
*/
class Vehicle
{
    private $_name;
    private $_speed;

    public function getName()
    {
        return $this->_name;
    }

    /*
    ========================
    SETTER (MUTATEUR)
    ========================

    Un setter permet de MODIFIER un attribut privé.

    Convention :
    setNomAttribut()

    👉 Avantage :
    On peut contrôler la valeur avant de l’enregistrer
    */

    public function setName(string $name)
    {
        // Validation : on contrôle la taille du nom
        if (strlen($name) > 10)
            echo "Erreur  nom de vehicule trop long";
        else
            $this->_name = $name;
    }

    public function setSpeed(int $speed)
    {
        // Ici pas de validation (mais on pourrait en ajouter)
        $this->_speed = $speed;
    }

    /*
    ========================
    CONSTRUCTEUR
    ========================

    Au lieu de remplir directement les attributs,
    on passe par les setters.

    👉 Pourquoi c’est bien ?
    - On réutilise la logique de validation
    - On évite de dupliquer le code
    */
    public function __construct(string $name, int $speed)
    {
        $this->setName($name);
        $this->setSpeed($speed);
    }

    /*
    ========================
    MÉTHODE move()
    ========================

    Utilise les données de l'objet pour afficher un message.
    */
    public function move()
    {
        echo 'Le vehicule ' . $this->_name . ' se deplace à ' . $this->_speed . ' km/h';
    }
}


/*
========================
UTILISATION
========================
*/

// Création d’un objet
$obj1 = new Vehicle('XC450', 650);

// Utilisation du getter (lecture)
echo $obj1->getName();

// Utilisation du setter (modification avec validation)
$obj1->setName('XFuibonk,pl;ùm'); // trop long → affiche une erreur


/*
========================
RÉSUMÉ
========================

Getter :
- Lire une donnée → getName()

Setter :
- Modifier une donnée → setName()

👉 Toujours utilisés avec des attributs private
👉 Permettent de contrôler et sécuriser les données
*/