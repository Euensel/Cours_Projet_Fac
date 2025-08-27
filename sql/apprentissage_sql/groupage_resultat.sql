/*
    GROUP BY        (permet de grouper les données en fonction d'un champ)
    WITH ROLLUP     (permet d'afficher la somme de toutes les données)
    HAVING          (comme WHERE est une clause qui permet de filtrer les   données mais pour des grpoupements)
*/
SELECT COUNT(*) AS "Nombre de résidents", user_country
FROM fv_users
GROUP BY user_country;--grouper les données selon les pays

SELECT user_country,SUM(user_age)
FROM fv_users
GROUP BY user_country WITH ROLLUP;--afficher les sommes des ages par pays puis afficher la somme total des ages

SELECT user_country, SUM(user_age)
FROM fv_users
GROUP BY user_country
HAVING SUM(user_age)>50;--afficher les pays dont la somme est superieur à 50