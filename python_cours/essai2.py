while True :
    print("votre mot de passe doit contenir au moins 8 caractères")
    mdp=input("saisir votre mot de passe: ")
    mdp_trop_court="votre mot de passe est trop court "
    if len(mdp)==0:
        print(mdp_trop_court.upper())
    elif len(mdp)<8:
        print(mdp_trop_court.capitalize())
    elif mdp.isdigit():
        print("votre mot de passe ne contient que des nombres")
    else:
        print("inscription terminée")