<?php

/*
========================
INTERFACES
========================

👉 Une interface est un "contrat".

Elle définit CE QU’UNE CLASSE DOIT FAIRE,
mais PAS COMMENT elle le fait.

👉 Une interface contient :
- des méthodes (sans code ❌)
- des constantes ✅

👉 On utilise le mot-clé :
interface


========================
RÈGLES DES INTERFACES
========================

1. Toutes les méthodes sont automatiquement :
   → public (même si tu ne l’écris pas)

2. Pas de corps de méthode :
   public function create(); ✅
   public function create() { } ❌

3. Pas d’attributs (variables) ❌

4. Une classe doit implémenter TOUTES les méthodes


========================
IMPLEMENTS
========================

👉 Pour utiliser une interface :

class MaClasse implements MonInterface

👉 La classe est OBLIGÉE de définir toutes les méthodes

Sinon → ERREUR
*/

interface IArticle 
{
    // Constante dans une interface
    const NB_ART_PAR_PAGE = 10;

    public function create();
    public function save($author, $content);
    public function delete();
    public function getNbComment();
}

interface IAuthor
{
    public function profile();
}


/*
========================
CLASSE QUI IMPLÉMENTE
========================

👉 BlogArticle implémente 2 interfaces :
- IArticle
- IAuthor

👉 Donc elle doit définir TOUTES les méthodes
des deux interfaces
*/

class BlogArticle implements IArticle, IAuthor
{
    public function profile()
    {
        echo "New author";
    }

    public function create()
    {
        echo 'Create()';
    }

    public function save($author, $content)
    {
        echo $content;
    }

    public function delete()
    {
        echo "supprime";
    }

    public function getNbComment()
    {
        return 15;
    }
}


/*
========================
UTILISATION
========================
*/

$test = new BlogArticle();
$test->create();

/*
Accès à une constante d’interface

👉 On utilise ::
NomInterface::CONSTANTE
*/
echo IArticle::NB_ART_PAR_PAGE;


/*
========================
DIFFÉRENCE : INTERFACE vs CLASSE ABSTRAITE
========================

👉 Classe abstraite :
- Peut contenir du code (méthodes normales) ✅
- Peut avoir des attributs ✅
- Peut avoir des constructeurs ✅
- Héritage simple (une seule classe parent)

👉 Interface :
- AUCUN code (que des signatures) ❌
- PAS d’attributs ❌
- Pas de constructeur ❌
- Une classe peut implémenter PLUSIEURS interfaces ✅

👉 Résumé simple :

Classe abstraite = modèle + logique partielle
Interface = contrat strict (obligations uniquement)


========================
QUAND UTILISER QUOI ?
========================

👉 Interface :
- Quand tu veux imposer un comportement
- Exemple : save(), delete(), create()

👉 Classe abstraite :
- Quand tu veux partager du code + structure


========================
RÉSUMÉ
========================

👉 interface = contrat
👉 implements = obligation d’implémenter
👉 plusieurs interfaces possibles
👉 méthodes sans corps
👉 constantes accessibles avec ::

👉 Différence clé :
interface = 100% règles
abstract = règles + logique
*/