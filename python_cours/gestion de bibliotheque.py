# Dictionnaire pour stocker les livres
bibliotheque = {}
id_courant = 1  # Identifiant unique des livres

def ajouter_livre():
    """Ajoute un livre à la bibliothèque"""
    global id_courant
    titre = input("Titre du livre : ")
    auteur = input("Auteur du livre : ")
    annee = int(input("Année de publication : "))
    
    bibliotheque[id_courant] = {
        "titre": titre,
        "auteur": auteur,
        "année": annee,
        "disponible": True
    }
    print(f"Livre ajouté avec l'ID {id_courant}\n")
    id_courant += 1

def rechercher_livre():
    """Recherche un livre par titre"""
    titre = input("Titre du livre à rechercher : ")
    for id_livre, livre in bibliotheque.items():
        if livre["titre"].lower() == titre.lower():
            print(f"ID: {id_livre}, Auteur: {livre['auteur']}, Année: {livre['année']}, Disponible: {livre['disponible']}\n")
            return
    print("Livre non trouvé.\n")

def supprimer_livre():
    """Supprime un livre de la bibliothèque"""
    id_livre = int(input("ID du livre à supprimer : "))
    if id_livre in bibliotheque:
        del bibliotheque[id_livre]
        print("Livre supprimé.\n")
    else:
        print("ID invalide.\n")

def afficher_livres():
    """Affiche tous les livres de la bibliothèque"""
    if not bibliotheque:
        print("Aucun livre dans la bibliothèque.\n")
        return
    
    for id_livre, livre in bibliotheque.items():
        print(f"ID: {id_livre}, Titre: {livre['titre']}, Auteur: {livre['auteur']}, Année: {livre['année']}, Disponible: {livre['disponible']}")
    print()

def emprunter_livre():
    """Emprunte un livre si disponible"""
    id_livre = int(input("ID du livre à emprunter : "))
    if id_livre in bibliotheque:
        if bibliotheque[id_livre]["disponible"]:
            bibliotheque[id_livre]["disponible"] = False
            print("Livre emprunté avec succès.\n")
        else:
            print("Ce livre est déjà emprunté.\n")
    else:
        print("ID invalide.\n")

def retourner_livre():
    """Retourne un livre emprunté"""
    id_livre = int(input("ID du livre à retourner : "))
    if id_livre in bibliotheque:
        if not bibliotheque[id_livre]["disponible"]:
            bibliotheque[id_livre]["disponible"] = True
            print("Livre retourné avec succès.\n")
        else:
            print("Ce livre est déjà disponible.\n")
    else:
        print("ID invalide.\n")

def menu():
    """Affiche le menu et gère les choix"""
    while True:
        print("1. Ajouter un livre")
        print("2. Rechercher un livre par titre")
        print("3. Supprimer un livre")
        print("4. Afficher tous les livres")
        print("5. Emprunter un livre")
        print("6. Retourner un livre")
        print("7. Quitter")

        choix = input("Choisissez une option : ")

        if choix == "1":
            ajouter_livre()
        elif choix == "2":
            rechercher_livre()
        elif choix == "3":
            supprimer_livre()
        elif choix == "4":
            afficher_livres()
        elif choix == "5":
            emprunter_livre()
        elif choix == "6":
            retourner_livre()
        elif choix == "7":
            print("Au revoir !")
            break
        else:
            print("Option invalide, veuillez réessayer.\n")

# Exécution du menu
menu()