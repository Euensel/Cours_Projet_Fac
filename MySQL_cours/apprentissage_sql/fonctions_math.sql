/*



*/



SELECT ABS (-1);--valeur absolue


COS(),SIN(),TAN(),ACOS(),ASIN(),ATAN()--trigo


SELECT PI()+0.0000000000000000;--le nombre de 0 montre combien de nombres après la virgule on veut pour PI


SELECT SIN(PI());--sinus de PI


SELECT RADIANS(60);--60° en radiant


SELECT DEGREES(60);--en dégré


SELECT CEIL(14.145);--arrondir à 15


SELECT FLOOR(14.356);--arrondir à 14


SELECT ROUND(14.345678,3);--arrondir à 3 chiffre apès la virgule 

SELECT TRUNCATE(14.345678,2);--couper à 3 chiffre après la virgule sans arrondir

SELECT POW(2,3);--2 exposant 3

SELECT CONV(145,10,2);--Convertir 145 de la base 10 en base 2
SELECT CONV(10010001,2,10);--base 2 à base 10 (marche pour toutes les bases)

SELECT EXP(2); --exponetielle de 2

SELECT LOG(2);--logarithme népérien (LN(2) alias)
SELECT LOG(2,10);--logarithme en base 2
SELECT LOG(10,10);--logarithme en base 10 (peut mettre n'importe quelle base)

SELECT MOD(5,2);-- 5 modulo 2

SELECT SQRT(4);--RACINE carrée

SELECT RAND(15);--prendre un nombre aléatoire


