def menu():
    print(f"\n_MENU_")
    print("------------")
    print(f"\n1. Gestion d'une salle de classe ")
    print("2. Gestion d'une école ")
    print("3. Calculatrice simple ")
    print("4. Quitter ")
    print("========================================")
while True:
    try:
        menu()
        choisir=(input(f"\nEntrez votre choix : "))
        if choisir=="1":
            print(f"\nBIENVENUE SUR MY CLASSROOM")
            print("____________________________")
            
            nom_prof=input(f"\nquel est le nom du titulaire de cette salle : ")
            
            nombre_eleves = int(input("Votre classe compte combien d'élèves ? : "))
            nombre_cours = int(input("Vous avez combien de cours : "))

            
            cours = []
            pondérations = []
            eleves=[]
            pourc_gen=[]
            application_gen=[]
            dico={}

            for i in range(nombre_cours):
                nom_cours = input(f"Désigner le nom du cours {i+1} : ")
                ponderation = int(input(f"Quelle est la pondération du cours de {nom_cours} ? : "))
                cours.append(nom_cours)
                pondérations.append(ponderation)

            maxima = sum(pondérations)

            nombre_reussites=0
            nombre_echec=0
            for j in range(nombre_eleves):
                nom_eleve=input(f"\nquel est le nom de l'élève numéro {j+1} ? : ")
                eleves.append(nom_eleve)
                print(f"\ncalcul des résultats ")
                print("------------------------")
                print(f"{j+1}. élève {nom_eleve}  :")
                minima = 0
                minima_gen=0
                
                for k in range(nombre_cours):
                    note = int(input(f"Note en {cours[k]} sur {pondérations[k]} : "))
                    if note>ponderation:
                        print(f"la note ne peut etre supérieur à la ponderation qui est de {ponderation}")
                        continue
                    minima += note
                    minima_gen+=minima
                    
                    
                pourcentage = minima * 100 / maxima
                dico[nom_eleve]=pourcentage
                pourc_gen.append(pourcentage)
                if pourcentage>=80:
                    application="application exellente "
                elif pourcentage>=70:
                    application="application très bonne "
                elif pourcentage>=60:
                    application="application bonne "
                elif pourcentage>=50:
                    application="application assez bonne "
                else:
                    application="application médiocre"
                application_gen.append(application)
                
                print(f"{minima}/{maxima}")
                print(f"Pourcentage  : {pourcentage:.2f}%")
                print(f"{application}")
                if pourcentage>=50:
                    nombre_reussites+=1
                else:
                    nombre_echec+=1
            total_echec_reussites=nombre_echec+nombre_reussites
            pourc_reussite=nombre_reussites*100/total_echec_reussites
                    
                    
            compteur={}
            for mot in application_gen:
                if mot in compteur:
                    compteur[mot]+=1
                else:
                    compteur[mot]=1
            
            meilleur_eleve=max(dico,key=dico.get)
            meilleur_pourc=max(pourc_gen)
                
            maxima_gen=nombre_eleves*maxima
                
            pourc_gen=minima_gen*100/maxima_gen
            print(f"\nrésultats moyens de la classe du prof {nom_prof}")
            print("-----------------------------------------------------")
            print(f"la moyenne générale de la classe est de : {pourc_gen:.2f}%")
            print(f"le résultat des applications de la classe est {compteur}")
            print(f"il y a un total de {nombre_reussites} reussites et {nombre_echec} échecs ce qui equivaut à {pourc_reussite:.2f}% de reussite")
            print(f"le meilleur élève est {meilleur_eleve} avec {meilleur_pourc:.2f}%")
            choix=input("voulez-vous passer à une autre classe ?(oui/non) : ").lower()
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
        elif choisir=="2":
            print(f"\nBIENVENUE SUR MY SCHOOL")
            
        elif choisir=="3":
            print(f"\nCALCULATRICE SIMPLE")
            print("_____________________")
            try :
                nombre1,nombre2=(int(input("saisir le premier nombre: ")),int(input("saisir le second nombre: ")))
                operateur=input("selectionnez un opérateur(+,-,*,/): ")
                if operateur=="+":
                    print(f"{nombre1} + {nombre1} = {nombre1+nombre2}")
                elif operateur=="-":
                    print(f" {nombre1} - {nombre2} = {nombre1-nombre2}")
                elif operateur=="*":
                    print(f" {nombre1} * {nombre2} = {nombre1*nombre2}")
                elif operateur=="/":
                    print(f" {nombre1} / {nombre2} = {nombre1/nombre2}")
                else:
                    print("veuillez choisir parmi les opérateurs indiqués ")
                    continue
            except ValueError :
                print("vous devez entrer un nombre entier")
                continue
            except ZeroDivisionError :
                print("division par 0 impossible")
                continue
            choix=input("voulez vous continuez? (oui/non): ").lower()
            if choix=="oui":
                continue
            elif choix=="non":
                break
        elif choisir=="4":
            print(" Au revoir ")
            break
        else:
            print("choix invalide veuilleez réessayer ")
            continue
    except ValueError:
        print("veuillez entrer un entier : ")
        continue
        
    
        