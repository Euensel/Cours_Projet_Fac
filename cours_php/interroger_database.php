<?php
/*
====================================================================================
 Auteur      : Eureka Eale Nsomb’aoleka (alias Euensel)
 Date        : [à compléter]
 Projet      : Affichage des marques de voiture depuis la base "fv_database"
====================================================================================

📘 CHAPITRE : Lire les données avec PDO → query(), fetch(), fetchAll(), FETCH_MODE

🎯 Objectifs pédagogiques :
- Exécuter une requête SQL avec PDO (`query`)
- Lire les résultats ligne par ligne avec `fetch()`
- Tout récupérer en une fois avec `fetchAll()`
- Utiliser différents modes de récupération : ASSOCIATIF, OBJET, etc.
- Libérer la mémoire avec `closeCursor()`

====================================================================================
🔍 FETCH_MODE disponibles :
- PDO::FETCH_BOTH (défaut)        → tableau indexé et associatif
- PDO::FETCH_ASSOC                → tableau associatif (clé = nom de colonne)
- PDO::FETCH_NUM                  → tableau numérique (clé = index colonne)
- PDO::FETCH_OBJ                  → chaque ligne est un objet PHP
- PDO::FETCH_CLASS                → récupérer sous forme de classe personnalisée

====================================================================================
💡 Remarques :
- `query()` est utilisé pour des requêtes simples sans paramètre
- Toujours **fermer le curseur** avec `closeCursor()` pour libérer les ressources
====================================================================================
*/

// ---------- Connexion à la base ----------
$DB_DSN = 'mysql:host=localhost;dbname=fv_database';
$DB_USER = 'root';
$DB_PASS = 'root';

try {
    $options = [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ];
    $PDO = new PDO($DB_DSN, $DB_USER, $DB_PASS, $options);

    // ---------- Requête SQL ----------
    $sql = 'SELECT * FROM fv_carbrands'; // table des marques de voitures
    $results = $PDO->query($sql); // exécution directe sans paramètre

    // ---------- Récupération ligne par ligne ----------
    echo "<h3>--- Affichage avec fetch(PDO::FETCH_ASSOC) ---</h3>";
    while ($data = $results->fetch(PDO::FETCH_ASSOC)) {
        echo '<pre>';
        print_r($data); // affiche chaque ligne sous forme de tableau associatif
        echo '</pre>';
    }

    // 🔁 Une fois terminé, le curseur doit être fermé avant de relancer une récupération
    $results->closeCursor();

    // ---------- Récupération complète ----------
    $results = $PDO->query($sql); // on relance la requête
    $list_clients = $results->fetchAll(PDO::FETCH_ASSOC); // tableau complet

    echo "<h3>--- Liste des marques (récupérées en bloc) ---</h3>";
    foreach ($list_clients as $client) {
        echo '<p>' . $client['carbrand_name'] . '</p>';
    }

    // ⚠️ Exemple ciblé (si on voulait un seul champ) :
    /*
    echo '<p>' . $data['id_carbrand'] . '/' . $data['carbrand_name'] . '</p>';
    */

    $results->closeCursor();

} catch (PDOException $pe) {
    echo 'Erreur : ' . $pe->getMessage();
}
?>
