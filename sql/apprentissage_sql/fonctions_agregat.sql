/*
->Les fonctions d'agrégations servent à faire des statistiques
->synthaxe fonction(champ visé)//*si tous les champs sont visés
    [QUELQUES FONCTIONS]
        COUNT   (compter le nombre de données d'une table)
        AVG     (calculer la moyenne)
        MAX     (la valeur maximum d'un champ)
        MIN     (la valeur minimum)
        SUM     (la somme de donnée d'un champ)

*/
SELECT COUNT(*) FROM fv_games;

SELECT AVG(game_price) FROM fv_games;

SELECT MAX(game_price) FROM fv_games;

SELECT MIN(game_price) FROM fv_games;

SELECT SUM(game_stock) FROM fv_games: