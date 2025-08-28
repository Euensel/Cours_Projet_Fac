import tkinter as tk
from tkinter import messagebox

# Liste des employés
liste_employes = []
prochain_id = 1

# Fonction pour ajouter un employé
def ajouter_employe():
    global prochain_id
    nom = entry_nom.get()
    poste = entry_poste.get()
    try:
        salaire = float(entry_salaire.get())
    except ValueError:
        messagebox.showerror("Erreur", "Veuillez entrer un salaire valide.")
        return

    if nom and poste:
        employe = {"id": prochain_id, "nom": nom, "poste": poste, "salaire": salaire}
        liste_employes.append(employe)
        prochain_id += 1
        messagebox.showinfo("Succès", "Employé ajouté avec succès !")
        entry_nom.delete(0, tk.END)
        entry_poste.delete(0, tk.END)
        entry_salaire.delete(0, tk.END)
        afficher_employes()
    else:
        messagebox.showerror("Erreur", "Veuillez remplir tous les champs.")

# Fonction pour afficher les employés
def afficher_employes():
    text_employes.delete(1.0, tk.END)
    if not liste_employes:
        text_employes.insert(tk.END, "Aucun employé enregistré.\n")
    else:
        for employe in liste_employes:
            text_employes.insert(
                tk.END,
                f"ID: {employe['id']} | Nom: {employe['nom']} | Poste: {employe['poste']} | Salaire: {employe['salaire']}\n"
            )

# Fonction pour supprimer un employé
def supprimer_employe():
    try:
        id_a_supprimer = int(entry_id_supprimer.get())
    except ValueError:
        messagebox.showerror("Erreur", "Veuillez entrer un ID valide.")
        return

    for employe in liste_employes:
        if employe["id"] == id_a_supprimer:
            liste_employes.remove(employe)
            messagebox.showinfo("Succès", "Employé supprimé avec succès !")
            entry_id_supprimer.delete(0, tk.END)
            afficher_employes()
            return

    messagebox.showerror("Erreur", "Aucun employé trouvé avec cet ID.")

# Création de la fenêtre principale
root = tk.Tk()
root.title("Gestion des Ressources Humaines")

# Section pour ajouter un employé
frame_ajouter = tk.Frame(root, pady=10)
frame_ajouter.pack()

tk.Label(frame_ajouter, text="Nom:").grid(row=0, column=0, padx=5, pady=5)
entry_nom = tk.Entry(frame_ajouter)
entry_nom.grid(row=0, column=1, padx=5, pady=5)

tk.Label(frame_ajouter, text="Poste:").grid(row=1, column=0, padx=5, pady=5)
entry_poste = tk.Entry(frame_ajouter)
entry_poste.grid(row=1, column=1, padx=5, pady=5)

tk.Label(frame_ajouter, text="Salaire:").grid(row=2, column=0, padx=5, pady=5)
entry_salaire = tk.Entry(frame_ajouter)
entry_salaire.grid(row=2, column=1, padx=5, pady=5)

btn_ajouter = tk.Button(frame_ajouter, text="Ajouter Employé", command=ajouter_employe)
btn_ajouter.grid(row=3, column=0, columnspan=2, pady=10)

# Section pour afficher les employés
frame_afficher = tk.Frame(root, pady=10)
frame_afficher.pack()

text_employes = tk.Text(frame_afficher, width=60, height=10)
text_employes.pack()

# Section pour supprimer un employé
frame_supprimer = tk.Frame(root, pady=10)
frame_supprimer.pack()

tk.Label(frame_supprimer, text="ID à supprimer:").grid(row=0, column=0, padx=5)
entry_id_supprimer = tk.Entry(frame_supprimer)
entry_id_supprimer.grid(row=0, column=1, padx=5)

btn_supprimer = tk.Button(frame_supprimer, text="Supprimer Employé", command=supprimer_employe)
btn_supprimer.grid(row=0, column=2, padx=5)

# Lancer l'application
root.mainloop()