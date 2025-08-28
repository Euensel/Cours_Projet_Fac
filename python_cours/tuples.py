"""
(!) Tuple : Conteneur immuable ( dont on ne peut modifier les valeurs )
 
Création d'une tuple : mon_tuple = ()       # Vide
                       mon_tuple = 17,      # Une seule valeur
                       mon_tuple = (17,)    # Une seule valeur
                       mon_tuple = (18, 21) # Plusieurs valeurs

Acces aux valeurs    : mon_tuple[n]         # Valeur d'indice n

2 raisons d'utiliser les tuples : affectation multiple de variable 
                                  retour multilple de fonction 
                                  
"""


# Affectation multiple de variable 

(valeur1, valeur2) = (12, 34)
print(valeur1)
print(valeur2)

# retour multiple de fonction 

def get_player_position () :
    posX = 25
    posY = 34
    return (posX, posY)
(coordX, coordY ) = get_player_position ()
print("position du joueur : ({}/{})".format(coordX, coordY))