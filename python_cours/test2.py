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
    for j in range(nombre_cours):
        if j==1:
            note1=int(input(f"note{cours1} : "))
            print(f"vous avez obtenu au {cours1} : {note1}")
        elif j==2:
            note2=int(input(f"note{cours2} : "))
            print(f"vous avez obtenu au {cours2} : {note2}")
        else:
            note3=int(input(f"note{cours3} : "))
            print(f"vous avez obtenu au {cours3} : {note3}")