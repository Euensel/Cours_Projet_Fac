/*
    CHAR_LENGTH()     ->compte le nombre de caractère d'une chaine
    CONCAT()          ->faire de la concaténation de chaine
    LOWER()           ->mettre en minuscule
    UPPER()           ->mettre en majuscuke
    REVERSE()         ->Inversion de chaine
    TRIM()            ->Suppression d'espace blanc
    REPLACE()         ->remplacement d'une chaine
    LOCATE            ->position d'une occurence dans une chaine
    SUBSTR            ->extraction d'une sous chaine
*/


SELECT carbrand_name, CHAR_LENGTH(carbrand_name)
FROM fv_carbrands;

SELECT CONCAT(carbrand_name, '(',carbrand_country,')')
FROM fv_carbrands;

SELECT UPPER(carbrand_name) FROM fv_carbrands;

SELECT REVERSE(carbrand_name) FROM fv_carbrands;

SELECT TRIM('    bonjour    ');--va supprimer les espaces autour de la chaine

UPDATE fv_carbrands
SET carbrand_website=REPLACE(carbrand_website,'group','groupe')
WHERE carbrand_name='Renault';--remplace group par groupe dans la chaine carbrand_website associé à carbrand_name='Renault'

SELECT carbrand_name, LOCATE('y',carbrand_name) FROM fv_carbrands;

SELECT carbrand_name, SUBSTR(carbrand_name,2) FROM fv_carbrands;

SELECT carbrand_name, SUBSTR(carbrand_name,2,3) FROM fv_carbrands;--commence au 2 eme caractère et prend 3 caactères