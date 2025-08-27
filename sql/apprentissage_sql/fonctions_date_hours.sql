/*
    [FORMATS D'IDENTIFICATION POUR FORMATAGE DES DATES ET HEURES]
        %d->jour
        %m->mois
        %y->année
        %H->heures (00 à 24)
        %i->minutes
        %S->secondes
    [FONCTIONS]
        NOW()               ->donne la date et l'heure actuelle

        DATEDIFF('','')     ->fait la différence entre la premiere et la deuxieme date

        TIMESTAMPDIFF(timeline,'','') ->fait la différence avec précision de la date (timeline=month,year or day) le 1er '' c'est le temps à soustraire et le 2 eme le temps qui soustrait

        DATE_FORMAT         ->permet de mettre le format auquel nous voulons que nos dates s'affiche
*/
SELECT NOW();

 insert into table_users(user_name,user_email,user_registration) values
    -> ('Dan','dan@gamil.com','2020-20-13 16:45:21'),
    -> ('Eureka','eureka@gmail.com','2020-20-13 16:45:21');

INSERT INTO''
VALUES
('bonjour','Tom',NOW());

SELECT DAY('2020-20-13 16:45:21');
SELECT MONTH('2020-20-13 16:45:21');
SELECT YEAR('2020-20-13 16:45:21');
SELECT HOURS('2020-20-13 16:45:21');

EXTRACT (MONTH, FROM TIMESTAMP '2020-03-15');

SELECT DATEDIFF ('2020-05-13','2019-05-17');

SELECT TIMESTAMPDIFF(MONTH,'2019-05-13','2020-05-17');

SELECT DATE_FORMAT('2020-12-06 14:07:23','%d/%m/%Y, %H:%i:%S');