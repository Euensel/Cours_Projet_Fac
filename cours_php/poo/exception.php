<?php

/*
========================
EXCEPTIONS
========================

👉 Une exception est une erreur "contrôlée".

Au lieu de laisser le programme planter brutalement,
on intercepte l’erreur pour réagir proprement.

👉 Mots-clés :
- try
- catch
- throw
- finally


========================
TRY / CATCH
========================

try {
    // code à tester
}
catch (Exception $e) {
    // code exécuté si erreur
}

👉 Le bloc try contient le code "à risque"
👉 Le catch récupère l’erreur


========================
THROW
========================

👉 throw permet de déclencher une exception

Ici :
throw new Exception("Tu n'es pas majeur");

👉 On crée une nouvelle erreur avec un message
*/

$age = 17;

try {
    if ($age < 18)
        throw new Exception("Tu n'es pas majeur"); // déclenche une exception
}

/*
========================
PLUSIEURS CATCH
========================

👉 On peut gérer différents types d’erreurs

⚠️ Attention :
- TypeError = erreur de type (ex: mauvais type de variable)
- Exception = erreur générale

👉 L’ordre compte (du plus spécifique au plus général)
*/

catch (TypeError) {
    // code pour erreur de type
}
catch (Exception $e) {
    /*
    $e représente l’exception

    Méthodes utiles :
    - getMessage() → message
    - getFile() → fichier
    - getLine() → ligne
    - getCode() → code erreur
    */
    echo $e->getMessage();
}


/*
========================
FINALLY
========================

👉 finally s’exécute TOUJOURS :
- qu’il y ait une erreur ou non

👉 utile pour :
- fermer une connexion
- libérer des ressources
*/
finally {

}


/*
========================
EXCEPTION PERSONNALISÉE
========================

👉 On peut créer sa propre exception
en héritant de Exception
*/

class MyExceptionClass extends Exception
{
    public function show_email_error_message()
    {
        return "Email invalide personnalisé";
    }
}


/*
========================
EXEMPLE FORMULAIRE
========================
*/

$email = 'tom@mail.com';

try {
    /*
    filter_var :
    fonction PHP pour valider des données

    Ici :
    FILTER_VALIDATE_EMAIL → vérifie si email valide
    */
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        throw new MyExceptionClass('E-mail incorrect');
}

/*
On capture notre exception personnalisée
*/
catch (MyExceptionClass $e) {

    // Méthode personnalisée
    // echo $e->show_email_error_message();

    // Méthode par défaut
    echo $e->getMessage();
}


/*
========================
RÉSUMÉ
========================

👉 try :
code à surveiller

👉 throw :
déclenche une exception

👉 catch :
capture l’erreur

👉 finally :
toujours exécuté

👉 Exception personnalisée :
permet de gérer des cas spécifiques

👉 Objectif :
éviter les crashs et gérer proprement les erreurs
*/