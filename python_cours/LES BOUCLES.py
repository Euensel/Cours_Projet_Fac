liste=["2","papa","3","maman"]
for element in liste:
    if element.isdigit():
        continue
    print(element)
liste=["2","papa","3","maman"]
for element in liste:
    if element.isdigit():
        break
    print(element)