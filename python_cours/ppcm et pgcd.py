def pgcd(a,b):
    x=a
    y=b
    while y!=0:
        z=y
        y=x%y
        x=z
    return x
def ppcm(a,b):
    ppcm=a*b//pgcd(a,b)
    return ppcm
def menu():
    print("\nMENU")
    print("------")
    print("1.PGCD DE DEUX NOMBRES : ")
    print("2.PPCM DE DEUX NOMBRES : ")
    print("3.QUITTER ")
    choix=int(input("\n choisir : "))
    return choix

while True:
    try:
        choix=menu()
        
        if choix==1:
            a=int(input("saisir un nombre :  "))
            b=int(input("saisir un second nombre : "))
            resultat1=pgcd(a,b)
            print(f"PGCD({a},{b})={resultat1}")
        elif choix==2:
            a=int(input("saisir un nombre :  "))
            b=int(input("saisir un second nombre : "))
            resultat2=ppcm(a,b)
            print(f"PPCM({a},{b})={resultat2}")
        elif choix==3:
            print("Au revoir !!!")
            break
        else:
            print("choix invalide ")
            break
        suite=input("voulez-vous continuez ?(oui/non) ").lower()
        if suite=="oui":

            continue
        elif suite=="non":
            print("Au revoir !!!")
            break
        else:
            print("choix invalide ")
            break
    except ZeroDivisionError:
        print("PPCM(0,0)=0")
        suite=input("voulez-vous continuez ?(oui/non) ").lower()
        if suite=="oui":

            continue
        elif suite=="non":
            print("Au revoir !!!")
            break
        else:
            print("choix invalide ")
            break



