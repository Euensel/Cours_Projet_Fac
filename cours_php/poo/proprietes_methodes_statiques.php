<?php

/*
========================
STATIC : PROPRIÉTÉS & MÉTHODES
========================

👉 "static" signifie que l’élément appartient à la CLASSE
et non à un objet (instance).

👉 Donc :
- Pas besoin de faire new
- On accède directement avec le nom de la classe


========================
DIFFÉRENCE AVEC NORMAL
========================

Sans static :
- On doit créer un objet :
  $obj = new Database();
  $obj->connect();

Avec static :
- Pas besoin d'objet :
  Database::connect();

👉 static = accès direct à la classe


========================
PROPRIÉTÉ STATIC
========================

Une propriété static est une variable partagée par toute la classe.

👉 Il n’y a qu’UNE seule valeur pour tous
👉 Pas liée à un objet

Ici :
$_sgbd = 'MySql'

👉 On y accède avec :
Database::$_sgbd


========================
MÉTHODE STATIC
========================

Une méthode static est une fonction qu’on peut appeler
sans créer d’objet.

👉 On utilise :
NomClasse::methode()

Ici :
Database::connect();


========================
IMPORTANT
========================

Dans une méthode static :
❌ On ne peut PAS utiliser $this

👉 Pourquoi ?
Parce que $this représente un objet,
et en static → il n’y a pas d’objet.

👉 À la place, on utilise "self" pour accéder à la classe :
self::$_sgbd


========================
UTILITÉ
========================

On utilise static quand :
- On n’a pas besoin d’état (pas besoin d’objet)
- On veut une valeur globale partagée
- Exemple : config, connexion, outils (helpers)
*/

class Database
{
    // Propriété static (partagée par toute la classe)
    public static $_sgbd = 'MySql';

    // Méthode static (appelable sans objet)
    public static function connect()
    {
        echo "Je me connecte...";
    }
}


// Appel d'une méthode static (sans instanciation)
Database::connect();

// Accès à une propriété static
echo Database::$_sgbd;