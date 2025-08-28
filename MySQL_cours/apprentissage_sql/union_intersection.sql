/*
    UNION   (permet d'effectuer plusieurs requetes en une mais la condition est que les tables selectionnées doivent avoir les meme nombre de lignes avoir les memes types de données)

    INTERSECT   (selectionne uniquement les elements communs des tables)
    EXCEPT      (selectionne les elements non communs de la premiere table )
*/

SELECT * FROM fv_site1_users 
UNION
SELECT * FROM fv_site2_users;
--union n'affiche pas les doublons cad dire si les deux tables ont des champs parfaitement identiques il va affiche qqu'une fois
SELECT user_name FROM fv_site1_users 
UNION
SELECT user_name FROM fv_site2_users;
--pour afficher les doublons on va utiliser UNION ALL
SELECT user_name FROM fv_site1_users 
UNION ALL
SELECT user_name FROM fv_site2_users;

SELECT user_name FROM fv_site1_users --afficher les elements communs des deux tables
INTERSECT
SELECT user_name FROM fv_site2_users;

SELECT user_name FROM fv_site1_users --affiche uniquement les elements de la premiere table qui ne sont pas dans la deuxieme
EXCEPT
SELECT user_name FROM fv_site2_users;

SELECT user_name FROM fv_site1_users --afficher par ordre alphabetique
UNION
SELECT user_name FROM fv_site2_users
ORDER BY user_name;