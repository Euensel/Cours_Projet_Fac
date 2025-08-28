"""def menu():
    while True:
        try:
            print("BIENVENUE DANS NOTRE BIBLIOTHÈQUE EN LIGNE \n")
            print("1.AJOUTER UN LIVRE")
            print("2.RECHERCHER UN LIVRE PAR TITRE")
            print("3.SUPPRIMER UN LIVRE")
            print("4.AFFICHER TOUS LES LIVRES")
            print("5.EMPRUNTER UN LIVRE")
            print("6.RETOURNER UN LIVRE")
            print("7.QUITTER")
            choix=int(input("\nchoisir une option : "))
        except ValueError:
            print("Choisir une option valide !!!! ")
            continue
        return choix"""
def ajout_livre():
    livre={}
    livre["titre"]=titre
    livre["auteur"]=auteur
    livre["annee"]=annee
    livre["disponibilité"]=disponible
    bibliotheque={}
    bibliotheque[i+1]=livre
   
nombres_livre=int(input("combien de livre voulez vous ajouter ? "))
for i in range(nombres_livre):
    titre=input("quel est le titre du livre : ")
    auteur=input("quel est le nom de l'auteur : ")
    annee=int(input("quelle est l'aannée de publication : "))
    disponible=True
    livre=ajout_livre()
print(livre)
        

    
    
