[TOC]
# LA SYNTHAXE MARKDOWN étendue

## tableau

| Nom   |Prénom     | Date de naissance|
|:------|:---------:|-----------------:|
|Madidi |Pitchou    |02/12/2009        |
|Moumour| Aboul Azir|10/11/2010        |

Les : avant les tirets c'est pour alignement en debut de tableau (par défaut donc on peut s'en passer).   
Les : des deux cotés pour alignement au milieu du tableau.  
et à la fin pour l'alignement en fin de tableau

NB: On est pas obliger de faire et taleau parfaitement aligner dans le code meme si on met deux -- en rendue web ça ne posera aucun problème on le fait juste pour la beauté du code

## Cases à cocher

les cases à cocher sont un moyen très commode de créer des listes de taches.  
Elles peuvent etre cochées et décochées par clic de souris, sans avoir éditer le code markdown

- [x] apprendre le markdown
- [x] installer Typora
- [ ] convertir mes docs en Markdown

## Exposant et indice

Pour mettre un texte en exposant, on l'entoure d'accents circonflexes : `1^er^` donne 1^er^  
Pour mettre un texte en indice, on l'entoutr de tildes : `H~2~O` donne : H~2~O 

## Surlignage et texte barré

Pour ==surligner un texte== afin de le faire ressortir, on l'entoure de doubles signes égal.

Pour barrer un texte ~comme ceci~ on l'entoure de tildes.

## Notes de bas de page et liens vers les titres

On créer une référence à une note de bas de page [^1] avec la synthaxe suivante : `[^1]`.  
On crée ensuite la note à l'endroit souhaité (typiquement au bas de la page ou à la fin), comme ceci : [^1] : le texte de la note.  

On peut ajouter un lien vers [un titre](#tableau) du document courant afin de faciliter la navigation dans les documents longs

## Autres éléments plus spécifiques 
### Icones GFM
Le Markdown saveur Github ( abrégé GFM) propose des codes courts sous la forme pour réprésenter des icones colorées.   
Les listes complètes (très longue) des codes courts GFM est consultable sur [cette page](https://github.com/ikatyang/emoji-cheat-sheet/blob/master/README.md)

### Tables des matières

Typora permet de créer automatiquement une table des matières à partir des titres du documents en mettant `[TOC]` au debut du document