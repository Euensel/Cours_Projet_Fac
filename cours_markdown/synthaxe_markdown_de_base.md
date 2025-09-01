# LA SYNTHAXE MARKDOWN

## Les titres

# Titre de niveau 1

## Titre de niveau 2

## Titre de niveau 3

## Paragraphe et retour à la ligne

paragraphe 1 (espacer d'une ligne pour le retour à la ligne du deuxième paragraphe)

paragraphe 2  (on peut également avoir un retour à la ligne avec deux espace à la fin du paragraphe)  
retour à la ligne

## Italique, gras et mise en exergue
On met un texte en *italique* en plaçant entre 2 étoiles.  
On met un texte en **gras** en plaçant entre 4 étoiles ( 2 de chaque coté)  

>On met un paragraphe entier en exergue en le faisant précéder du symbole >.(utiliser pour les citations)

## Listes

**Listes à puces:**
on utilise un - suivi d'un espace pour lister mais on peut utiliser aussi un + ou un * (déconseillé car déjà utilisé pour l'italique et le gras)
- item 1
- item 2
- item 3
+ item 4
* item 5

On peut imbriquer des listes en mettant deux espaces avant le -
- liste
  - liste imbriqué
On peut créer des listes numérotées en remplaçant les tirets par un numéro suivi d'un puis espace (on peut juste mettre 1. partout l'éditeur va automatiquement compléter selon l'ordre 1 2 3...)

**Listes numérotée:**
1. item 1
1. item 2
1. item 3    
   - sous
   - sous

## Liens hypertextes

on peut créer des liens vers des pages web, avec la syntaxe suivante :
[site Markdown Guide](hhtps://www.markdowguide.org/).

Le texte entre crochets est celui qui s'affcihe en bleu souligné dans le rendu final.  
Le texte entre parenthèses est l'url de la page

On peut créer de la meme façon des [lien](../html_css_cours/essai.html) vers un fichier local

## Images 

On insère des images avec une syntaxe semblable aux liens hypertextes. Note simplement le point d'exclamation avant les crochets.

![La nature](../html_css_cours/nature.jpg)

Le texte entre crochets donne une description textuelle de l'image. Il n'est pas obligatoire, mais les crochets restent tout de meme obligatoires.

## Extraits et blocs de code 

On peut insérer des extraits de code dans le texte, comme ceci: la classe `EmployeeController` dérive de `Controller`

ou bin créer des blocs de code comme ceci entre back tics :
```php
$my_error_handler=function(int $errno,string $errmsg,string $errfile,int $errline)
{
    
    switch($errno)
    {
        case E_USER_ERROR:
            echo $errmsg;
            break;
        case E_USER_WARNING:
            echo $errmsg.'sur le fichier'.$errfile;
            exit (1);/*quitter le programme*/ 
            break;
        case E_USER_NOTICE:
            echo $errmsg;
            break;
        default:
            echo 'ERREUR :'.$errmsg;
            break;
    }
};
```
