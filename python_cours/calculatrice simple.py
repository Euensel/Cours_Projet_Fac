print("CALCULATRICE SIMPLE")
print("_____________________")
while True:
    try :
        nombre1,nombre2=(int(input("saisir le premier nombre: ")),int(input("saisir le second nombre: ")))
        

        operateur=input("selectionnez un opérateur(+,-,*,/): ")
        if operateur=="+":
            print(f"le resultat de l'addition de {nombre1} et {nombre1} est {nombre1+nombre2}")
        elif operateur=="-":
            print(f"le resultat de la soustraction de {nombre1} par {nombre2} est {nombre1-nombre2}")
        elif operateur=="*":
            print(f"le resultat de la multiplication de {nombre1} et {nombre2} est {nombre1*nombre2}")
        elif operateur=="/":
            print(f"le resultat de la division de {nombre1} par {nombre2} est {nombre1/nombre2}")
        else:
            print("veuillez choisir par les opérateurs indiqués ")
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
     