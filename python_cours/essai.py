print("CALCULATRICE ")
print("_____________")
code=input("definissez un mot de passe: ")
verification=input("saisir votre mot de passe: ")
if code==verification:
    nombre1=int(input("saisir un entier: "))
    nombre2=int(input("saisir un autre entier: "))
    print(f"le résultat de l'addition de {nombre1} avec {nombre2} est {nombre1+nombre2}")
else: 
    print("le mot de passe est incorrect")
    
    
 