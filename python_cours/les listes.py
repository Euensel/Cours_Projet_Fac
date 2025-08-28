liste=[1,2,3,4,5]
liste.append(7) #AJOUTER UN ELEMENT A UNE LISTE
liste.extend([7,8,9]) #AJOUTER PLUSIEURS ELEMENTS A UNE LISTE
liste.remove(5)  #RETIRER UN ELEMENT A UNE LISTE
liste.pop(0) #RETIRER UN ELEMENT A UNE LISTE grace à son indice
print(liste[6])
print(liste[1:5])
print(liste[:])
print(liste[:-2])
print(liste[::2])
print(liste[::-1])
employes=["carlos","jules","max"]
resultat=employes.index("carlos")
print(resultat)
employes=["carlos","jules","max","max"]
resultat=employes.count("max")
print(resultat)
employes=["carlos","jules","max"]
resultat=employes.index("carlos")
print(resultat)
employes=["carlos","jules","max","anna"]
employes.sort()
print(employes)
employes=["carlos","jules","max","anna"]
liste_triees=sorted(employes)
print(employes)
employes=["carlos","jules","max","anna"]
employes.reverse()
print(employes)
employes=["carlos","jules","max","anna"]
employes.pop(1)
print(employes)
employes=["carlos","jules","max","anna"]
element=employes.pop(-1)
print(element)
employes=["carlos","jules","max","anna"]
employes.clear( )
print(employes)
liste=["maman","est","très","gentille"]
resultat="\n".join(liste)
print(resultat)
courses="pain,gateau,madesu,riz"
course=courses.split(",")
print(courses)
liste=["Jean","Leon","Eureka"]
if "Eureka" in liste:
    liste.remove("Eureka ")
