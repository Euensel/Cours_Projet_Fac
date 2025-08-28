<?php
/*
====================================================================================
 Auteur      : Eureka Eale Nsomb’aoleka (alias Euensel)
 Date        : [à compléter]
 Projet      : Connexion à une base de données MySQL via PDO (fv_database)
 Description : Ce script établit une connexion sécurisée à une base de données MySQL
               avec encodage UTF-8 et gestion des erreurs via exceptions.
====================================================================================

📘 CHAPITRE : Connexion à une base de données MySQL avec PDO (options + sécurité)

🎯 Objectif :
Connecter ton application PHP à une base MySQL avec PDO, tout en :
- Utilisant un encodage standard (UTF-8),
- Gérant les erreurs proprement (mode exception),
- Préparant un environnement stable pour exécuter des requêtes SQL.

====================================================================================
🔍 1. DSN (Data Source Name)
Format : 'mysql:host=HÔTE;dbname=BASE'
- localhost = le serveur MySQL local
- dbname = nom de la base ciblée

🔍 2. Identifiants
- $DB_USER = utilisateur MySQL (souvent 'root' en local)
- $DB_PASS = mot de passe (ici aussi 'root')

🔍 3. Options PDO recommandées
- PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' → encodage universel
- PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION → active les erreurs visibles

====================================================================================
*/

// ---------- Paramètres de connexion ----------
$DB_DSN = 'mysql:host=localhost;dbname=fv_database';
$DB_USER = 'root';
$DB_PASS = 'root';

try {
    // ---------- Options sécurisées ----------
    $options = [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',        // Force UTF-8 pour la base
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,             // Gère les erreurs via des exceptions
        // 🔒 Bonus :
        // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,     // Mode de récupération par défaut (tableau associatif)
        // PDO::ATTR_PERSISTENT => true                          // Connexion persistante (attention à ne pas abuser)
    ];

    // ---------- Connexion à la base ----------
    $PDO = new PDO($DB_DSN, $DB_USER, $DB_PASS, $options);
    echo "Connexion établie"; // Si tout va bien

} catch (PDOException $pe) {
    // ---------- Gestion des erreurs ----------
    echo 'Erreur : ' . $pe->getMessage(); // Affiche le message d’erreur exact
}
?>
