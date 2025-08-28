liste_pair=[]
liste_impair=[]
nombres=[]
for i in range(10):
    nombre=int(input("saisir un nombre : "))
    nombres.append(nombre)
    liste_pair=[x for x in nombres if x%2==0]
    liste_impair=[x for x in nombres if x%2!=0]
print(f"nombre pairs : {liste_pair}")
print(f"nombres impairs : {liste_impair}")
    