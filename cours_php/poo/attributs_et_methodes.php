<?php

class Vehicle
{
    // Attributs (données de l'objet)
    private $_name;
    private $_power;

    // Constructeur (initialisation de l'objet)
    public function __construct(string $name, int $power)
    {
        $this->_name = $name;
        $this->_power = $power;
    }

    // Méthode (action de l'objet)
    public function move()
    {
        echo $this->_name . " se deplace..." . " et a une puissance de " . $this->_power;
    }
}

// Création d'un objet (instance)
$obj1 = new Vehicle('Mon bolide', 650);

// Appel d'une méthode publique
$obj1->move();

/*
========================
ATTRIBUTS & MÉTHODES
========================

👉 Attributs :
Ce sont les variables d'une classe.
Ils servent à stocker des informations sur un objet.

Exemple ici :
- $_name  → nom du véhicule
- $_power → puissance du véhicule

👉 Méthodes :
Ce sont les fonctions d'une classe.
Elles définissent les actions que peut faire un objet.

Exemple ici :
- move() → permet au véhicule de "se déplacer"


========================
VISIBILITÉ (public / private)
========================

Ces mots-clés définissent qui peut accéder aux attributs ou méthodes.

👉 private :
- Accessible UNIQUEMENT à l'intérieur de la classe
- Impossible d'y accéder directement depuis l'extérieur

Exemple :
$this->_name → OK (car on est dans la classe)
$obj1->_name → ❌ interdit (erreur)

👉 public :
- Accessible partout (dans la classe ET à l'extérieur)

Exemple :
$obj1->move(); → OK car move() est public

👉 Résumé :
- private = protégé, interne
- public = accessible de partout

👉 Pourquoi utiliser private ?
Pour protéger les données et éviter les erreurs
(on contrôle l'accès aux informations)


========================
ACCÈS AUX DONNÉES
========================

On utilise $this pour accéder aux attributs à l'intérieur de la classe.

Exemple :
$this->_name
$this->_power

👉 $this représente l'objet actuel.


========================
CONSTRUCTEUR
========================

Quand on crée un objet, on envoie des valeurs :

new Vehicle('Mon bolide', 650);

Ces valeurs sont reçues dans le constructeur :
- $name reçoit 'Mon bolide'
- $power reçoit 650

Puis on les stocke dans les attributs :
$this->_name = $name;
$this->_power = $power;


========================
MÉTHODE move()
========================

Cette méthode utilise les attributs de l'objet pour afficher un message.

👉 Elle accède aux données avec $this
👉 Elle montre comment un objet utilise ses propres informations
*/