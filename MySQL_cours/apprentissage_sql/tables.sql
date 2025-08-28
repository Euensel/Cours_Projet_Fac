/*
    [TABLE]
        ->Une table est une sorte de boite qui va contenir nos infos.
        ->Elle a un nom, et va contenir un différents nombres de champ qui auront également des noms ainsi qu'un type et des contraintes
        ->Elle pourra également etre lié à d'autres tables ou meme etre isolé des autres tables de notre base de donnée

*/
--Requêtes sur les bases de données
SHOW DATABASES;
CREATE DATABASE IF NOT EXISTS SQLformation;
USE SQLformation;
--Requetes liées aux tables
SHOW TABLE FROM SQLformation;

CREATE TABLE t_users
(
    id_user INT, 
    user_name VARCHAR(65),
    user_birthday DATE
);
ALTER TABLE t_users
ADD user_points TINYINT(2);
--CREATE TABLE  IF NOT EXISTS t_users; (verifier si la table existe déjà)
--SHOW tables; (affiche toutes les tables de la base)
--DESCRIBE t_users; (affiche tout le contenu de la table)//EXPLAIN/DESC
--ALTER TABLE t_users (modifier les information d'une table)
--ADD user_points TINYINT(2); (ajouter un champ à une table)
--MODIFY id_user SAMLLINT (modifier le champ d'une table)
--DROP user_points; (supprimer un champ)
--CHANGE user_birthday user_birth DATE; (change le nom et si on veut egalement le type d'une colonne)
--SHOW TABLE STATUS; (affiche plusieurs information sur une table)
--DROP TABLE t_user (supprimer une table)