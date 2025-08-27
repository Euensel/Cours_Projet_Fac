/*
    ->Les jointures permettent de relier les tables d'une base entre elles
    [TYPES DE JOINTURES]
        [JOINTURE INTERNE]
            avec INNER JOIN Affiche seulement les lignes avec correspondance dans les deux tables.
            Pas de correspondance = pas de ligne dans le résultat.


        [JOINTURE NATURELLE]
            avec NATURAL JOIN relie les champs de deux tables s'ils ont le meme nombre de colonne et ont le meme type
            Fait une jointure automatique sur les colonnes qui ont le même nom dans les deux tables.
            Attention : il faut que les noms des colonnes soient identiques.
        [JOINTURE EXTERNE GAUCHE]
            avec LEFT JOIN Affiche toutes les lignes de la table de gauche, même si aucune correspondance n’est trouvée dans la table de droite. Les colonnes de la table de droite seront null s’il n’y a pas de correspondance. 
            Avec une clause where peut prendre uniquement ceux qui ne sont pas repris
        [JOINTURE EWXTERNE DROITE]
            avec RIGHT JOIN Affiche toutes les lignes de la table de droite, même si aucune correspondance n’est trouvée dans la table de gauche. Les colonnes de la table de gauche seront null s’il n’y a pas de correspondance.
        [JOINTURE CROISEE]
            avec CROSS JOIN Produit le produit cartésien : chaque ligne de la table A est combinée avec chaque ligne de la table B.
            Pas de condition, très vite volumineux.


        
*/

SELECT player_name,player_level,ability_name
FROM fv_players
INNER JOIN fv_abilities ON fv_players.player_ability=fv_abilities.id_ability;--relier la table ds joueurs (fv_players) à la table des abilités(fv_abilities) en joignant le champ player_ability au champ des id_ability donc le nombre dans player_ability correspond à id_ability

SELECT *
FROM fv_players
NATURAL JOIN fv_abilities ON fv_players.id = fv_abilities.id;--uniquement si les deux ont meme colonnes et meme type

SELECT *
FROM fv_abilities
LEFT JOIN fv_players ON fv_abilities.id_ability=fv_players.player_ability;--affiche tous les champs de fv_abilities meme s'ils y en a qui ne sont pas repris dans player_ability

SELECT *
FROM fv_abilities
LEFT JOIN fv_players ON fv_abilities.id_ability=fv_players.player_ability
WHERE fv_players.player_ability IS NULL;--affiche uniquement les champ de fv_abilities non reprises dans player_ability

SELECT *
FROM fv_items
RIGHT JOIN  fv_playertrades ON fv_items.id_item=fv_playertrades.playertrade_item;--affiche la listes des objet vendu (playertrade_item) l'id de vente (id_item) prendra la valeur de chaque ogjet correspondant dans playertrade_item puis on affichera juste le nom

SELECT item_name
FROM fv_items
FULL OUTER JOIN  fv_playertrades ON fv_items.id_item=fv_playertrades.playertrade_item;--affiche tous les champs (pas pris en charge par mysql)

SELECT * 
FROM fv_players
CROSS JOIN fv_abilities;--relie tous les champs des deux tables entre eux