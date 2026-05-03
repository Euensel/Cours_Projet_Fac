<?php

/*
========================
INTRODUCTION À LA POO
========================

La POO (Programmation Orientée Objet) est une façon de programmer
où on organise le code autour de "classes" et "objets" au lieu
de simplement écrire des fonctions comme en procédural.

👉 Différence avec le procédural :
- Procédural : on écrit des fonctions + variables séparées
- POO : on regroupe tout dans des "objets" qui représentent des choses

👉 Ce que la POO apporte :
+ Code mieux organisé
+ Réutilisable
+ Plus proche du monde réel (ex: voiture, utilisateur, produit)

👉 Inconvénients :
- Plus complexe au début
- Demande de comprendre de nouveaux concepts

En PHP, la POO est très utilisée (ex: Laravel est 100% POO)
*/


/*
========================
CLASSE
========================

Une classe est un "modèle" ou un "plan" pour créer des objets.

Ici "Vehicle" (véhicule) est une classe.
C'est comme un moule pour créer plusieurs véhicules.
*/
class Vehicle
{
    /*
    ========================
    $this
    ========================

    $this représente l'objet courant (l'objet en cours d'utilisation).

    Exemple :
    Si on crée $obj1 et $obj2 :
    - dans $obj1, $this = $obj1
    - dans $obj2, $this = $obj2

    👉 Donc $this permet de manipuler l'objet actuel.
    */

    /*
    ========================
    CONSTRUCTEUR
    ========================

    __construct() est une fonction spéciale appelée automatiquement
    quand on crée un objet avec "new".

    👉 Son rôle :
    - Initialiser l'objet
    - Exécuter du code au moment de la création

    Ici, à chaque création d'objet, on affiche un message.
    */
    public function __construct()
    {
        echo "Je suis construis !";
    }

    /*
    ========================
    DESTRUCTEUR
    ========================

    __destruct() est appelé automatiquement quand l'objet est détruit
    (fin du script ou suppression de l'objet).

    👉 Son rôle :
    - Libérer des ressources
    - Faire du nettoyage

    ⚠️ En pratique, on l'utilise rarement en PHP.
    */
    public function __destruct()
    {
        echo "Je suis detruit !";
    }
}


/*
========================
OBJET / INSTANCE
========================

Un objet (ou instance) est une "copie" de la classe.

👉 La classe = le plan
👉 L'objet = l'objet réel créé à partir du plan
*/

/*
Création d'objets avec "new"
Chaque "new" crée un nouvel objet indépendant.
*/
$obj1 = new Vehicle(); // création d'un objet
$obj2 = new Vehicle(); // création d'un autre objet

/*
$obj1 et $obj2 sont deux objets différents,
même s'ils viennent de la même classe.
*/

/*
========================
INSTANCIATION DYNAMIQUE
========================

On peut aussi créer un objet à partir d'une variable.

Ici :
$name contient "Vehicle"
Donc new $name() = new Vehicle()
*/
$name = 'Vehicle';
$obj3 = new $name(); // équivalent à new Vehicle()