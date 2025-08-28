/*
    Au niveau de la manipulation des données en sql nous avons 4 opérations essentielles CRUD
        C:create(INSERT TO)
        R:read(SELECT)
        U:update(UPDATE)
        D:delete(DELETE)
*/
--pour modifier les champ d'une table
UPDATE fv_clients--table à laquelle on veut appliquer une modification
SET client_loyalty=6,client_birthday="2005-05-06"--champ que nous modifions ainsi que leur nouvelles valeurs
WHERE id_client=1;--clause qui cible precisement sur quel element nous voulons faire nos modifications
--si on enlève la clause where les modifications se font pour toutes les tables
UPDATE fv_clients
SET client_loyalty=6,client_birthday="2005-05-06";
--supprimer des données 
DELETE FROM fv_clients WHERE id_client=1;
--supprimer toutes les données d'une table
TRUNCATE TABLE fv_clients;
