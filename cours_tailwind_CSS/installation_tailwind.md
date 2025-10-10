#  Installation de Tailwind CSS — Notes

## 1 Installer Node.js
Tailwind CSS fonctionne avec **Node.js** et **npm (Node Package Manager)**.  
=> Si Node n’est pas installé :  
Va sur => [https://nodejs.org/fr/download](https://nodejs.org/fr/download) et installe la version **LTS (recommandée)**.  

Pour vérifier l’installation :
```bash
node -v
npm -v
```
Ces commandes affichent les versions installées.  
(`npm -v` est la bonne commande pour vérifier npm.)

---

## 2 Initialiser le projet
Une fois Node installé, crée ton dossier de projet puis ouvre-le dans ton terminal.  
Tape :
```bash
npm init -y
```

 **Pourquoi ?**  
Cette commande crée un fichier `package.json` qui :
- décrit ton projet,  
- garde la trace des dépendances installées,  
- permet de réinstaller facilement le même environnement plus tard.

---

## 3 Installer Tailwind CSS et son CLI
Tape :
```bash
npm install tailwindcss @tailwindcss/cli
```

 **Explication :**
- `tailwindcss` → le framework CSS lui-même.  
- `@tailwindcss/cli` → l’outil en ligne de commande qui compile le code Tailwind en vrai CSS.

---

## 4 Importer Tailwind dans ton CSS
Dans ton fichier CSS (ex : `input.css`), ajoute :
```css
@import "tailwindcss";
```

Cela indique à Tailwind d’importer **toutes ses classes utilitaires** (couleurs, tailles, espacements, etc.).

---

## 5 Compiler Tailwind (création du output.css)
Commande :
```bash
npx @tailwindcss/cli -i ./src/input.css -o ./src/output.css
```

 **Explication :**
- `-i` → fichier **source** où tu as mis `@import "tailwindcss";`  
- `-o` → fichier **généré** contenant le CSS compilé.  

 Les chemins (`./src/...`) sont des **exemples** : adapte-les selon ton projet.  
=> Exemple : `./styles/input.css` si ton dossier s’appelle `styles`.

=> Le fichier **output.css** est celui à lier dans ton HTML :
```html
<link rel="stylesheet" href="./src/output.css">
```
C’est ce fichier que le navigateur va lire.

---

## 6 Mode Watch (surveillance automatique)
Commande :
```bash
npx @tailwindcss/cli -i ./src/input.css -o ./src/output.css --watch
```

 **Pourquoi le `--watch` est utile :**
Il permet à Tailwind de **surveiller tes fichiers**.  
Chaque fois que tu modifies ton HTML ou ton CSS, le `output.css` est automatiquement recompilé.  
=>Pas besoin de relancer la commande à chaque changement.

---

## 7 Utiliser Tailwind dans tes pages HTML
Tu peux maintenant ajouter des classes Tailwind dans tes fichiers HTML :
```html
<h1 class="text-3xl font-bold text-blue-600">Hello Tailwind!</h1>
```
 Toutes les classes (taille, couleur, espacement, etc.) viennent de Tailwind.

---

##  Récapitulatif rapide

| Étape | Commande / Action | Rôle |
|:--|:--|:--|
| 1 | Installer Node.js | Nécessaire pour npm et Tailwind |
| 2 | `npm init -y` | Crée le fichier `package.json` |
| 3 | `npm install tailwindcss @tailwindcss/cli` | Installe Tailwind et son compilateur |
| 4 | `@import "tailwindcss";` | Charge toutes les classes Tailwind |
| 5 | `npx @tailwindcss/cli -i input.css -o output.css` | Compile le CSS |
| 6 | `--watch` | Recompile automatiquement |
| 7 | `<link rel="stylesheet" href="output.css">` | Connecte Tailwind à ton HTML |

---

## Exemple d’arborescence de projet

```
mon-projet/
│
├── src/
│   ├── input.css
│   └── output.css
│
├── index.html
├── package.json
└── node_modules/
```

---

**Astuce :**  
1. Tu peux lancer la commande avec `--watch` pendant que tu travailles, comme ça ton CSS est toujours à jour sans effort.
2. Installer l'extension ***Tailwind CSS IntellieSense*** pour obtenir l'auto complétion sur VsCode
