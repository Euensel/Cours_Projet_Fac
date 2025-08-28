 
"""
Création de dictionnaire                   : dico = {} # Vide
                                           :  dico = {<clé> : <valeur>, <clé2> : <valeur>} 

Ajouter à une valeur / afficher une valeur : dico[<clé>]
Ajout et modification                      : dico[<clé>] = <valeur>

suppression                                : dico.pop(<clé>)
                                           :  del dico[<clé>]

Copie de dictionnaire                      : dico2 = dico1.copy()
                        
les valeurs que contiennent un dico        : dico.values()
la clé et la valeurs ''     ''  ''         : dico.items()

(!) : ** = pour les parametres nommés

"""

dico = {"age" : 54, "nom" : "toi"}
print(dico)
print(dico["nom"])
for k,v in dico.items() :
    print("clé : {} - valeur : {}".format(k,v))


def mafonction(**parametre) :
    print(parametre)
mafonction(A = 17, nom = "toi")


