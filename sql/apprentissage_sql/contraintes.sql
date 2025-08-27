/*
    [CONTRAINTES]
        ->les contraintes sont un ensemble de règles que nous allons définir sur les tables et meme sur certaines colonnes de nos tables qui permettront d'établir des règles à respecter lors de l'enregistrement de nouvelles informations
    [QUELQUES CONTRAINTES]
        NOT NULL (colonne obligatoire)
        DEFAULT (valeur par défaut)
        CHECK (vérification d'une valeur)
        UNIQUE (valeur de champ unique)
        PRIMARY KEY (clé primaire)
        AUTO_INCREMENT (permet d'auto incrémenter un champ )
        FOREINGN KEY(clé étrangère)
        INDEX (index - pour la lecture et la recherche

        
*/
CREATE DATABASE IF NOT EXISTS cours_sql;
USE cours_sql;


CREATE TABLE IF NOT EXISTS table_users
(
    id_user SMALLINT(6) NOT NULL AUTO_INCREMENT,
    user_name VARCHAR(30) NOT NULL ,
    user_email VARCHAR(100) NOT NULL,
    user_registration DATE NOT NULL,
    user_admin BOOLEAN DEFAULT 0,
    PRIMARY KEY(id_user)
)
ENGINE = MyISAM CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;--changer de moteur


CREATE TABLE IF NOT EXISTS table_news
(
    id_news SMALLINT(6) NOT NULL AUTO_INCREMENT,
    news_title VARCHAR(80) NOT NULL,
    news_content TEXT NOT NULL,
    new_author SMALLINT(6) NOT NULL,
    PRIMARY KEY(id_news),
    FOREIGN KEY (new_author) REFERENCES table_users(id_user)--le champ auteur fait référence à l'id de table_users pour la relier à table_news
);
CREATE INDEX idx_users ON table_users(user_name,user_email);
ALTER TABLE
DROP INDEX idx_users;
/*
ALTER TABLE table_news
ADD FOREIGN KEY (news_author) REFERENCES tables_user(id_user);
ADD CONSTRAINT FK_cle FOREIGN KEY (news_author) REFERENCES tables_user(id_user);
DROP FOREIGN KEY FK_cle;*/
/*ALTER TABLE table_users
ADD CHECK(id_user<=10000);(ajouter une contrainte check à une colonne*/
/*ALTER TABLE table_users
ALTER user_admin SET DEFAULT 0;(changer la valeur par défaut*/
--ALTER user_admin DROP DEFAULT; (supprimer la valeur par défaut)
/*ALTER TABLE table_users
ADD CONSTRAINT CHK_idtoobig CHECK (id_user <=10000 AND user_admin >1);( créer une contarinte qui ajoute une valeur check pour plusieurs colonnes en meme temps)*/
--DROP CHECK CHK_idtoobig (supp la contrainte créer)
/*ALTER TABLE table_users
ADD UNIQUE(user_name);(ajouter l'unicité pour un champ)*/
/*ALTER TABLE table_users
ADD CONSTRAINT UC_userid UNIQUE(id_user,user_name);(Créer une contrainte qui ajoute l'unicité à plusieurs champs en meme temps)*/
/*ALTER TABLE table_users
DROP INDEX UC_userid;(supprimer la contrainte)*/
--ALTER TABLE table_user AUTO_INCREMENT =100;(ajouter une incrémentation aller de 100 à ...)
/*ALTER TABLE table_users
ADD PRIMARY KEY user_name;(ajouter une clé rimaire)
ALTER TABLE
ADD CONSTRAINT id_primary PRIMARY KEY (user_name, id_user);(mettre une clé primaire sur plusieurs champ)*/