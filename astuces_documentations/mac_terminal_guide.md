# Terminal Mac : Guide complet de personnalisation et ergonomie

Ce guide explique comment transformer ton terminal Mac en un environnement **stylé, ergonomique et pratique**, avec couleurs, auto-complétion, plugins et prompts avancés.

---

## 1. Choisir un terminal amélioré

Le terminal par défaut (`Terminal.app`) est fonctionnel, mais limité.  
Pour plus de fonctionnalités et une meilleure personnalisation, utilise :

### iTerm2
- Télécharger : [https://iterm2.com](https://iterm2.com)  
- Avantages :
  - Multiples onglets et panneaux  
  - Themes et couleurs avancés  
  - Support complet pour Powerlevel10k  
  - Historique et recherche pratique

---

## 2. Installer Zsh et Oh My Zsh

### Vérifier Zsh
```bash
zsh --version
```
macOS a Zsh installé par défaut.

### Installer Oh My Zsh
```bash
sh -c "$(curl -fsSL https://raw.githubusercontent.com/ohmyzsh/ohmyzsh/master/tools/install.sh)"
```
- Oh My Zsh gère les **plugins, thèmes et configurations** facilement.

---

## 3. Installer un thème avancé : Powerlevel10k

### Installation
```bash
git clone --depth=1 https://github.com/romkatv/powerlevel10k.git ${ZSH_CUSTOM:-$HOME/.oh-my-zsh/custom}/themes/powerlevel10k
```

### Activation
Dans `~/.zshrc` :
```bash
ZSH_THEME="powerlevel10k/powerlevel10k"
```

### Configuration initiale
```bash
p10k configure
```
- Choisis les options **Lean**, **Unicode**, **2 lignes**, etc. pour un terminal clair et lisible.  
- Active **Transient Prompt** et **Instant Prompt (Verbose)** pour la rapidité.

---

## 4. Plugins essentiels pour l’ergonomie

### Ajouter dans `~/.zshrc`
```bash
plugins=(
  git
  zsh-autosuggestions
  zsh-syntax-highlighting
)
```

### Installer les plugins
```bash
git clone https://github.com/zsh-users/zsh-autosuggestions ${ZSH_CUSTOM:-~/.oh-my-zsh/custom}/plugins/zsh-autosuggestions

git clone https://github.com/zsh-users/zsh-syntax-highlighting.git ${ZSH_CUSTOM:-~/.oh-my-zsh/custom}/plugins/zsh-syntax-highlighting
```

### Recharger la configuration
```bash
source ~/.zshrc
```

---

## 5. Personnaliser l’affichage en français

Ajouter à la fin de `~/.zshrc` :
```bash
export LANG=fr_FR.UTF-8
export LC_ALL=fr_FR.UTF-8
```

- ⚠️ Les commandes Unix (`ls`, `git`) restent en anglais sur macOS.  
- ✅ Les messages système compatibles et certaines applications respecteront la locale.

---

## 6. Ergonomie et lisibilité

- **Auto-complétion** : Tab pour compléter commandes et chemins  
- **Suggestions** : gris clair pendant que tu tapes (via `zsh-autosuggestions`)  
- **Coloration syntaxique** : met en couleur les commandes, erreurs, chemins (via `zsh-syntax-highlighting`)  
- **Prompt clair** : 2 lignes, Lean, compact  
- **Police Nerd Font** : nécessaire pour tous les symboles Powerlevel10k

### Installer une police Nerd Font
1. Télécharger une police : [https://www.nerdfonts.com](https://www.nerdfonts.com)  
2. Installer sur macOS  
3. Configurer iTerm2 : `Preferences → Profiles → Text → Font` → choisir la police Nerd Font

---

## 7. Alias utiles (facultatif)

Dans `~/.zshrc`, tu peux créer des alias pour simplifier les commandes :
```bash
alias ls='ls -G'           # couleur pour ls
alias ll='ls -l'           # liste détaillée
alias entrer='cd'           # cd avec un mot français
alias effacer='rm'          # rm en français
alias creer='mkdir'         # mkdir en français
```

---

## 8. Astuces supplémentaires

- **Historique pratique** : `Ctrl+R` pour rechercher une commande précédente  
- **Ouvrir plusieurs panneaux** : `Cmd+D` ou `Cmd+Shift+D` dans iTerm2  
- **Copier-coller facile** : `Cmd+C / Cmd+V`  
- **Raccourcis personnalisés** : modifier `~/.zshrc` ou iTerm2 Preferences

---

## 9. Commandes utiles pour vérifier

```bash
date        # voir la date/heure avec locale
locale      # vérifier LANG et LC_ALL
ls          # lister fichiers
cat fichier # voir contenu d’un fichier
```

---

## 10. Ressources utiles

- Oh My Zsh : [https://ohmyz.sh](https://ohmyz.sh)  
- Powerlevel10k : [https://github.com/romkatv/powerlevel10k](https://github.com/romkatv/powerlevel10k)  
- Nerd Fonts : [https://www.nerdfonts.com](https://www.nerdfonts.com)

---

### ✅ Résumé

Avec ce guide, ton terminal Mac sera :  
- Stylé et lisible (Powerlevel10k + iTerm2)  
- Ergonomique (auto-complétion + suggestions + couleurs)  
- Semi-francisé (locale FR pour messages compatibles)  
- Rapide au démarrage (Instant Prompt)  

> Tu auras un environnement **professionnel, clair et agréable** pour coder ou gérer tes projets.

