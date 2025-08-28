import tkinter as tk
from tkinter import messagebox

# Fonction pour effectuer les calculs
def calculer():
    try:
        nombre1 = float(entry_nombre1.get())
        nombre2 = float(entry_nombre2.get())
        operateur = entry_operateur.get()

        if operateur == "+":
            resultat = nombre1 + nombre2
        elif operateur == "-":
            resultat = nombre1 - nombre2
        elif operateur == "*":
            resultat = nombre1 * nombre2
        elif operateur == "/":
            if nombre2 == 0:
                raise ZeroDivisionError
            resultat = nombre1 / nombre2
        else:
            messagebox.showerror("Erreur", "Veuillez entrer un opérateur valide (+, -, *, /).")
            return

        label_resultat.config(text=f"Résultat : {resultat}")

    except ValueError:
        messagebox.showerror("Erreur", "Veuillez entrer des nombres valides.")
    except ZeroDivisionError:
        messagebox.showerror("Erreur", "Division par zéro impossible.")

# Fenêtre principale
root = tk.Tk()
root.title("Calculatrice Simple")

# Widgets
label_instruction = tk.Label(root, text="Entrez deux nombres et un opérateur (+, -, *, /) :", font=("Arial", 12))
label_instruction.pack(pady=10)

frame_entries = tk.Frame(root)
frame_entries.pack(pady=5)

tk.Label(frame_entries, text="Nombre 1 :").grid(row=0, column=0, padx=5, pady=5)
entry_nombre1 = tk.Entry(frame_entries)
entry_nombre1.grid(row=0, column=1, padx=5, pady=5)

tk.Label(frame_entries, text="Nombre 2 :").grid(row=1, column=0, padx=5, pady=5)
entry_nombre2 = tk.Entry(frame_entries)
entry_nombre2.grid(row=1, column=1, padx=5, pady=5)

tk.Label(frame_entries, text="Opérateur :").grid(row=2, column=0, padx=5, pady=5)
entry_operateur = tk.Entry(frame_entries)
entry_operateur.grid(row=2, column=1, padx=5, pady=5)

btn_calculer = tk.Button(root, text="Calculer", command=calculer)
btn_calculer.pack(pady=10)

label_resultat = tk.Label(root, text="Résultat : ", font=("Arial", 12))
label_resultat.pack(pady=10)

# Boucle principale
root.mainloop()