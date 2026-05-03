# Installation de Vue.js

Vue.js est un framework JavaScript progressif pour construire des interfaces utilisateur interactives.  
Il permet de créer des applications web réactives avec des composants modulaires et une gestion simple des données.

---

## Prérequis

Avant d’installer Vue.js, il faut avoir **Node.js et npm** installés sur votre machine.

### Vérifier si Node.js et npm sont installés
```bash
node -v
npm -v
Si ces commandes renvoient un numéro de version, c’est bon.
Sinon, installer Node.js depuis nodejs.org : npm est inclus automatiquement.

Création d’un nouveau projet Vue
Ouvrir le terminal sur Mac.

Choisir le chemin où vous voulez créer le projet.

Vous pouvez être dans n’importe quel dossier où vous avez des droits d’écriture.

Exemple :

```bash
Copier le code
cd ~/Documents/Projets
Créer le projet avec Vue CLI :

bash
Copier le code
npm create vue@latest
Répondre aux questions posées :

Project name → nom de votre projet (mon-projet par exemple)

Add TypeScript? → No (ou Yes si vous voulez apprendre TypeScript)

Add JSX Support? → No

Add Vue Router for SPA development? → Yes si vous voulez gérer plusieurs pages

Add Pinia for state management? → Yes si vous voulez gérer l’état global

Add Vitest for unit tests? → No (optionnel)

Add Cypress for end-to-end testing? → No (optionnel)

Add ESLint for code quality? → Yes recommandé

Add Prettier for code formatting? → Yes recommandé

Package manager → npm (ou yarn si vous préférez)

Installer les dépendances
Après la création :

bash
Copier le code
cd <nom-de-votre-projet>
npm install
cd → entre dans le dossier de votre projet

npm install → installe toutes les dépendances nécessaires pour Vue

Lancer le serveur de développement
bash
Copier le code
npm run dev
Ouvre le serveur local pour voir votre projet dans le navigateur

Souvent à l’adresse : http://localhost:5173

Nettoyage initial
Pour partir d’une base plus claire :

Supprimer les dossiers inutiles :

assets → contient des images de test

components → contient un composant exemple

Supprimer l’import CSS par défaut dans main.js :

javascript
Copier le code
import './assets/main.css' // supprimer cette ligne
Pourquoi ?

Pour éviter d’avoir des styles par défaut qui peuvent interférer avec vos propres styles

Permet de repartir sur une base propre et minimaliste

Construire le projet pour la production
Une fois que tout est prêt et que vous voulez générer les fichiers finaux pour déployer :

bash
Copier le code
npm run build
Crée un dossier dist/ avec votre application optimisée et prête pour la production

✅ Résumé rapide
Vérifier Node.js et npm

Créer un projet Vue (npm create vue@latest)

Installer les dépendances (npm install)

Lancer le serveur (npm run dev)

Nettoyer le projet (supprimer assets, components, CSS import)

Construire pour la production (npm run build)

Astuce : toujours travailler dans un dossier dédié à vos projets pour ne pas mélanger les fichiers.