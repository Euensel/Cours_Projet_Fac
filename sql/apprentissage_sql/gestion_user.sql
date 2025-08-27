/*
    [COMMANDES DE SELECTIONS USER]
        SELECT USER FROM base.table; (montre les utilisateurs de la base)
        SELECT CURRENT_USER();(montre l'utilisateur en cours)
    [USER]
        ->secéma user :name_user@hote_de_connexion ex: eureka@localhost
    [DROITS UTILISATEUR]
        ->supprimer ou ajouter des privilèges à un user
        GRANT ALL (tous les droits)
        ON  *.*(toutes les bases et toues les tables)
            base.* (toutes les tables de la base nomée base)
            base.table(la table table de la base base)
        TO user@hote
        WITH droits voulu (optionnel)

*/
CREATE USER IF NOT EXISTS 'eurekaeale'@'localhost' IDENTIFIED BY 'pass_word';
ALTER USER 'eurekaeale'@'localhost' IDENTIFIED BY 'new_word_pass'; --changer le mot de passe
RENAME USER 'eurekaeale'@'localhost' TO 'eureka'@'localhost';--changer de nom utilisateur
DROP USER 'jason'@'localhost';--supprimer un utilisateur

GRANT ALL --ajouter des droits à un user
ON SQLformation.*
TO 'eurekaeale'@'localhost';
REVOKE ALL --supprimer les droits d'un user
ON SQL_formation.*
TO 'eurekaeale'@'localhost';