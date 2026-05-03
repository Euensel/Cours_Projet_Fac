<?php

/*
========================
RAPPEL : HÉRITAGE
========================

👉 L’héritage permet à une classe enfant de récupérer
les propriétés et méthodes d’une classe parent.

Syntaxe :
class Enfant extends Parent

Ici :
TrapCard hérite de Card
SpecialTrapCard hérite de TrapCard
*/


/*
========================
PROTECTED
========================

👉 protected :
- Accessible dans la classe
- Accessible dans les classes enfants ✅
- ❌ Pas accessible depuis l’extérieur

Ici :
$_name et $_description sont protected

👉 Donc :
- Card peut les utiliser
- TrapCard peut les utiliser
- Mais $obj->_name ❌ interdit
*/

class Card
{
    protected $_name;
    protected $_description;

    public function __construct($name, $description)
    {
        $this->_name = $name;
        $this->_description = $description;
    }

    public function hello()
    {
        echo "Je suis la carte " . $this->_name . '<br/>';
    }
}


/*
========================
OPÉRATEUR ::
========================

👉 "::" s'appelle l’opérateur de résolution de portée

Il permet d’accéder à :
- méthodes static
- propriétés static
- éléments du parent (avec parent::)

Exemple ici :
parent::__construct(...)

👉 Ça veut dire :
"Appelle le constructeur de la classe parent"
*/

class TrapCard extends Card
{
    private $_effect;

    public function __construct($name, $description, $effect)
    {
        // Appel du constructeur du parent avec ::
        parent::__construct($name, $description);

        $this->_effect = $effect;
    }

    /*
    ========================
    FINAL (MÉTHODE)
    ========================

    👉 final empêche la redéfinition (override)

    Ici :
    hello() est final

    👉 Donc :
    - TrapCard a hello()
    - ❌ Impossible de modifier hello() dans une classe enfant

    Si SpecialTrapCard essaie de redéfinir hello()
    → ERREUR
    */
    final public function hello()
    {
        echo 'Nom :' . $this->_name . '<br/>';
        echo 'Description :' . $this->_description . '<br/>';
        echo 'Effet :' . $this->_effect . '<br/>';
    }
}


/*
========================
FINAL (CLASSE)
========================

👉 final devant une classe :
❌ empêche l’héritage

Ici :
SpecialTrapCard est final

👉 Donc :
- On peut créer des objets SpecialTrapCard
- ❌ MAIS on ne peut PAS faire :
  class X extends SpecialTrapCard → ERREUR
*/

final class SpecialTrapCard extends TrapCard
{
    // Hérite de tout mais ne peut pas être héritée
}


/*
========================
UTILISATION
========================
*/

$mycard = new Card('Magicien sombre', 'Un magicien aux grands pouvoirs...');
$mycard->hello();

$mytrapcard = new TrapCard(
    'Fosse',
    'Une grande fosse qui piège tous les ennemis',
    'Détruit tous les ennemis'
);
$mytrapcard->hello();


/*
========================
RÉSUMÉ
========================

👉 protected :
Accessible dans la classe + enfants

👉 ::
- accéder au parent → parent::methode()
- accéder au static → Classe::methode()

👉 final (méthode) :
Empêche override

👉 final (classe) :
Empêche héritage

👉 Objectif :
Contrôler l’héritage et sécuriser le code
*/