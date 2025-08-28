/*
    pour filtrer les requetes on utilise la clause WHERE 
    [OPERATEUR CLAUSE WHERE]
        =égalité
        !=différence
        > < <= >= comparaison
        OR
        AND
        IN
        BETWHEEN
        LIKE
        IS NULL
        IS NOT NULL
*/
SELECT *FROM fv_games WHERE id_game=11;

SELECT *FROM fv_games WHERE id_game>5;

SELECT *FROM fv_games WHERE id_game=5 OR id_game=10; --un ou l'autre

SELECT *FROM fv_games WHERE game_price>5 AND game_price<30;--plusieurs à la fois

--plutot que:
SELECT *FROM fv_games WHERE game_stock = 2 OR game_stock =4 OR game_stock =6;

--on peut faire:
SELECT *FROM fv_games WHERE game_stock IN(2,4,6);
--si les données sont des chaines in met des '' IN('2','4','6')

--plutot que:
SELECT *FROM fv_games WHERE game_price >0 AND game_price<=20
;
--on peut faire:
SELECT *FROM fv_games WHERE game_price BETWEEN 0 AND 20;

--LIKE permet de récupérer des donées par leur titre 
SELECT *FROM fv_games WHERE game_title LIKE 'Pokemon%';--le % c'est pour dire tous titre commençant par pokemon avec d'autres mots après

SELECT *FROM fv_games WHERE game_title LIKE 'Tekken_';--le _ veut dire tout titre commençant par tekken ex;tekken2

SELECT *FROM fv_games WHERE game_price IS NOT NULL;--tous les prix non nul

SELECT *FROM fv_games WHERE game_price IS NULL;--tous les prix nul

--pour que le triage se fasse selon l'ordre alphabetique on utilise ORDER BY
SELECT *FROM fv_games ORDER BY game_title ASC;--croissant A à Z
SELECT *FROM fv_games ORDER BY game_title DESC;--decroissant Z à A
SELECT *FROM fv_games ORDER BY game_title, game_price DESC; --par ordre alphabétique tu met ceux du meme nom par prix décroissant

SELECT *FROM fv_games LIMIT 5; --tu te limites à 5 éléments

SELECT *FROM fv_games LIMIT 5 OFFSET 3;--5 éléments en commençant par celui qui a l'indice 3
SELECT *FROM fv_games LIMIT 3,5;--idem
