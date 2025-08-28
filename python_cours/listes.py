"""
n element == n indice + 1

list() == [] 
["a"]* n        : pour rajouter un n fois "a" 


liste[n]        : Affiche l'element d'indice n
liste[-n]       : Affiche le nieme element en partant de la fin 

liste[:]        : Affiche tous les elements
liste[:n]       : Affiche les n premiers elements 
liste[:-n]      : Prend tous les elements de la liste sauf le dernier  
liste[n:]       : Affiche les n dernier elements
liste[n:p]      : Afiche d el'elelment d'indice n à l'element d'indice p (exclus)
liste[::pas]    : Afiche les elements d'une liste avec des pas

len ()          : compter le nombre d'element dans la liste
.append()       : Ajouter un nouvel element à la liste
.index()        : Recuperer l'indice d'un element 
.insert(n,"")   : insert  à n element une liste 
.remove()       : supprime un element se trouvant dans la liste
.sort()         : trier une liste de même types par ordre alphabetique 
.reverse()      : renverser tous les elements 'une liste 
.count()        : compter le nombre de fois qu'un element a été citer dans une liste 
.clear()        : effacer tous les elements de la liste
.split()        : creer une liste en partant d'une phrase
" ".join()      : joindre une liste en une phrase 
.extend()       : fusionner 2 listes 
.pop()          : supprimer un elemnt d'une liste d'indice n
.del()          : supprimer un element de la liste de facon plus direct 

import copy
.deepcopy       : permet de creer une copie de quelque chose

"""

# inventaire = ["bonjour", "à", "tous"]
# phrase =" ".join(inventaire)
# print(phrase)

listes = ["objet", "jouer", "danser"]
liste1 = [8,3,7,1]
print(listes)

for object in enumerate(listes) :
    print(object)

for indice_object, valeur_object in enumerate(listes):
    print("la valeur {} est d'indice {}".format(valeur_object, indice_object))



