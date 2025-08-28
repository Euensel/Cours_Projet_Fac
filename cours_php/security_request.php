<?php
/*
====================================================================================
 Auteur      : Eureka Eale Nsomb’aoleka (alias Euensel)
 Date        : [à compléter]
 Projet      : Requêtes préparées avec PDO pour sécuriser les entrées utilisateur
====================================================================================

📘 CHAPITRE : Requêtes préparées → `prepare()`, `bindValue()`, `bindParam()`, `execute()`

🎯 Objectifs pédagogiques :
- Utiliser les requêtes préparées pour éviter les injections SQL
- Lier des valeurs dynamiquement avec `bindValue()` ou `bindParam()`
- Comprendre les différents types de données (`PDO::PARAM_*`)

====================================================================================
🔍 Différences entre `bindValue()` et `bindParam()` :
- `bindValue()` : lie une **valeur immédiate** (copiée)
- `bindParam()` : lie une **variable** (par référence)

🧪 Types PDO disponibles :
- `PDO::PARAM_STR` (chaîne, par défaut)
- `PDO::PARAM_INT` (entier)
- `PDO::PARAM_BOOL` (booléen)
- `PDO::PARAM_NULL` (null)

====================================================================================
💡 Bonnes pratiques :
- Utilise `ATTR_EMULATE_PREPARES => false` pour activer les vraies requêtes préparées
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
        PDO::ATTR_EMULATE_PREPARES => false // pour vraie sécurité
    ];

    $PDO = new PDO($DB_DSN, $DB_USER, $DB_PASS, $options);

    // ---------- Requête préparée ----------
    $request = $PDO->prepare(
        'SELECT * FROM fv_carbrands 
         WHERE carbrand_name = ? 
         AND carbrand_country = :nom'
    );

    // ---------- Première exécution ----------
    $request->bindValue(1, "Mazda", PDO::PARAM_STR);  // position 1
    $request->bindValue(":nom", "FR", PDO::PARAM_STR); // paramètre nommé

    $request->execute();
    echo "<h3>--- Résultats pour Mazda (FR) ---</h3><pre>";
    print_r($request->fetchAll(PDO::FETCH_ASSOC));
    echo "</pre>";

    // ---------- Deuxième exécution (recyclage de la requête) ----------
    $request->bindValue(1, "Peugeot", PDO::PARAM_STR); // change la valeur de carbrand_name
    $request->execute();
    echo "<h3>--- Résultats pour Peugeot (FR) ---</h3><pre>";
    print_r($request->fetchAll(PDO::FETCH_ASSOC));
    echo "</pre>";

} catch (PDOException $pe) {
    echo 'Erreur : ' . $pe->getMessage();
}
?>
