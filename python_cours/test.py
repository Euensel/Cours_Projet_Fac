a=4
print(a)
nombre=int(input("saisir un nombre:"))
if nombre%5==0 & nombre%3==0:
    print("",nombre,"est divisible par 3 et 5")
elif nombre%5!=0 & nombre%3==0:
    print("",nombre,"est divisible par 3 ")
elif  nombre%5==0 & nombre%3!=0:
    print("",nombre,"est divisible par 5")
else:
    print("",nombre,"n'est divisible ni par 3 ni par5")