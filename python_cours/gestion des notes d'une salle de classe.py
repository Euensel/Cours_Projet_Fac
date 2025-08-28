print("BIENVENUE SUR MY CLASSROOM")
print("____________________________")
import tkinter
from tkinter import messagebox
while True:
    try:
        moy_classe=0
        nom_prof=input("quel est le nom du prof de cette salle: ")
        nombre_eleves=int(input("votre classe compte combien d'élèves? : "))
        nombre_cours=int(input("vous avez combien de cours : "))
        for i in range(nombre_cours):
            if i==1:
                cours1=input("designer le nom du cours : ")
            elif i==2:
                cours2=input("désigner le nom du cours : ")
            else:
                cours3=input("désigner le nom du cours : ")
        for i in range(nombre_eleves):
            nom_eleve=input("comment s'appelle cet élève: ")
            math=float(input("note en math (/20): "))
            physique=float(input("note en physique(/20): "))
            chimie=float(input("note en chimie (/20): "))
            svt=float(input("note en svt (/20): "))
            francais=float(input("note en français (/20): "))
            anglais=float(input("note en anglais (/20): "))
            histoire=float(input("note en histoire (/20): "))
            geographie=float(input("note en geographie (/20): "))
            philosophie=float(input("note en philosophie (/20): "))
            ecopol=float(input("note en ecopol (/20): "))
            total=math+physique+chimie+svt+francais+anglais+histoire+geographie+philosophie+ecopol
            total_general=200
            pourcentage=total*100/total_general
            if i==1:
                print(f"l'élève {nom_eleve} a obtenu un total de {total} sur {total_general} ce qui équivaut à un pourcentage de {pourcentage}%")
            elif i==2:
                print(f"l'élève {nom_eleve} a obtenu un total de {total} sur {total_general} ce qui équivaut à un pourcentage de {pourcentage}%")
            else:
                print(f"l'élève {nom_eleve} a obtenu un total de {total} sur {total_general} ce qui équivaut à un pourcentage de {pourcentage}%")
            moy_classe+=total    
            somme_gen=total_general*nombre_eleves
            if pourcentage>=80:
                print("application exellente ")
            elif pourcentage>=70:
                print("application très bonne ")
            elif pourcentage>=60:
                print("application bonne ")
            elif pourcentage>=50:
                print("application assez bonne ")
            else:
                print("applicatio médiocre")
        pourc_gen=moy_classe*100/somme_gen
        print(f"la moyenne de la classe du prof {nom_prof} est de {moy_classe} sur {somme_gen} et le pourcentage moyen de la classe est de {pourc_gen}%")
        choix=input("voulez-vous passer à une autre classe ?(oui/non)").lower()
        if choix=="oui":
            continue
        elif choix=="non":
            print("merci d'avoir utilisé nos services à bientot sur MY CLASSROOM ")
            break
        else:
            tentative=0
            while tentative<=3:
                if tentative==1:
                    print("il vous reste 2 tentatives ")
                elif tentative==2:
                    print("il vous reste 1 tentative")
                elif tentative==3:
                    print("vous avez trop tentez le programme va s'arreter ")
                    print("merci d'avoir utilisé nos services à bientot sur MY CLASSROOM ")
                    break
                print("les deux choix possibles sont oui et non : ")
                choix2=input("continuer oui ou non ? : ").lower()
                if choix2=="oui":
                    continue
                elif choix2=="non":
                    print("merci d'avoir utilisé nos services à bientot sur MY CLASSROOM ")
                tentative+=1
        if tentative>=3:
            break
    except ValueError:
        print("veuillez entrer un entier : ")
        continue
               