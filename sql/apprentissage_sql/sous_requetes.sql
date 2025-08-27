
--on fait juste une requete qui sera exécuter en fonction du resultat d'une autre (des requetes imbriquées)


SELECT *FROM fv_players
WHERE player_name=
(
    SELECT playertrade_seller
    FROM fv_playertrades
    WHERE playertrade_seller = 'Icekissy'
    LIMIT 1
);/*
en gros là la sous requetes demande de selectioné les joueurs (playertrade_seller) dans la tables des vendeurs et acheteurs (fv_playertrades) qui ont pour pseudo 'Icekissy'

comme y en a plusieurs on met la mimite à un nom car le signe = ne peut comparer plusieurs elements à la fois
*/
SELECT *FROM fv_players
WHERE player_name=
(
    SELECT playertrade_seller
    FROM fv_playertrades
    WHERE playertrade_seller = 'Nephion'
    LIMIT 1
);--là ça ne va rien retourner car "Nephion n'a jamais vrien vendu"

SELECT *FROM fv_players
WHERE player_name IN
(
    SELECT playertrade_seller
    FROM fv_playertrades
    WHERE playertrade_seller = 'Icekissy'
);--pour contourner la limite à 1 du sih-gne = on met IN à la place qui va afficher toutes les fois où 'Icekissy' a vendu

SELECT *FROM fv_players
WHERE player_name IN
(
    SELECT playertrade_seller
    FROM fv_playertrades
);--affiche tous les joueurs qui ont déjà vendu

SELECT *FROM fv_players
WHERE player_name =ANY 
(
    SELECT playertrade_seller
    FROM fv_playertrades
    WHERE playertrade_item='Épée en mousse'
);--ANY veut dire que l'egalité doit retourner au moins une valeur de la sous requetes
SELECT *FROM fv_players
WHERE EXISTS--si la sous requetes est vraie on selectionne tous les joueurs
(
    SELECT *
    FROM fv_playertrades
    WHERE playertrade_item ='Épée en mousse'

) AND player_level > 10
ORDER BY player_level ASC;--si parmi toutes les données de fv_playertrades il y a des vente d''Épée en mousse' (playertrade_item ='Épée en mousse') alors ça retourne true et donc il va affhicher tous les jouers avec un niveau (player_level) superieur à 10 par ordre croissant
