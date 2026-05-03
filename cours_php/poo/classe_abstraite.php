<?php

/*
========================
CLASSE ABSTRAITE
========================

👉 Une classe abstraite est une classe qu’on ne peut PAS instancier.

❌ Interdit :
$obj = new Mere();

👉 Pourquoi ?
Parce qu’elle sert de "modèle" pour les classes enfants.

👉 On l’utilise avec le mot-clé :
abstract


========================
MÉTHODES ABSTRAITES
========================

Une méthode abstraite :
- n’a PAS de corps (pas de code)
- définit juste une "obligation"

Exemple :
abstract protected function hello();

👉 Ça veut dire :
"Toute classe enfant DOIT implémenter cette méthode"

👉 Si une classe enfant ne le fait pas :
→ ERREUR


========================
VISIBILITÉ (IMPORTANT)
========================

Une méthode abstraite peut être :
- protected
- public

⚠️ Règle importante :
La classe enfant doit respecter ou élargir la visibilité

Exemple :
protected → peut devenir public ✅
mais pas private ❌
*/

abstract class Mere
{
    // Méthodes abstraites (sans corps)
    abstract protected function hello();
    abstract protected function parler($message);
}


/*
========================
CLASSE ENFANT
========================

Fille hérite de Mere

👉 Elle est obligée d’implémenter :
- hello()
- parler()
*/

class Fille extends Mere
{
    public function hello()
    {
        echo " Hello, je suis une fille" . '<br>';
    }

    /*
    ========================
    SIGNATURE DE MÉTHODE
    ========================

    La méthode enfant doit être compatible avec celle du parent

    Ici :
    parent → parler($message)
    enfant → parler($message, $param = 10)

    👉 Autorisé car :
    - on garde $message
    - on ajoute un paramètre optionnel

    ❌ Interdit :
    - enlever $message
    */
    public function parler($message, $param = 10)
    {
        echo $message . ' | ' . $param . '<br>';
    }
}


/*
========================
UTILISATION
========================
*/

// ❌ Impossible (classe abstraite)
// $obj = new Mere();


// ✅ On instancie la classe enfant
$obj = new Fille();

// Appel des méthodes
$obj->hello();
$obj->parler("Comment vas-tu ? ", 56);
$obj->parler("t'aime quoi ?", 13);


/*
========================
RÉSUMÉ
========================

👉 abstract class :
- sert de modèle
- non instanciable

👉 abstract method :
- pas de code
- oblige les enfants à implémenter

👉 Classe enfant :
- DOIT implémenter toutes les méthodes abstraites

👉 Objectif :
Forcer une structure commune aux classes enfants
*/
?>