# 📘 Documentation Tailwind CSS complète

## 1. 🎨 Couleurs

- **Texte :** `text-[NOM]-[NUANCE]` → Définit la couleur du texte.  
  _Exemple :_ `text-red-500`
- **Couleur héritée :** `text-current` → Hérite de la couleur de l’élément parent.
- **Couleur de fond :** `bg-[NOM]-[NUANCE]` → Définit la couleur d’arrière-plan.  
  _Exemple :_ `bg-blue-400`
- **Couleur de bordure :** `border-[NOM]-[NUANCE]` → Colore la bordure.
- **Couleur avec opacité :** `bg-black/50`, `text-red-500/30` → Applique une transparence.

---

## 2. 🔤 Taille du texte

- `text-[TAILLE]` → Définit la taille de police.  
  _Exemple :_ `text-3xl`
- **Échelles disponibles :**  
  `text-xs`, `text-sm`, `text-base`, `text-lg`, `text-xl`, `text-2xl`, … jusqu’à `text-9xl`.

---

## 3. 📏 Dimensions

- **Largeur :** `w-[VALEUR]` → Largeur fixe ou relative (`w-10`, `w-1/2`, `w-full`, `w-screen`).  
- **Hauteur :** `h-[VALEUR]` → Hauteur de l’élément (`h-10`, `h-auto`, `h-screen`).  
- **Les deux :** `size-[VALEUR]` → Largeur et hauteur identiques.  
- **Valeurs min / max :**  
  `min-w-[VALEUR]` / `max-w-[VALEUR]` / `min-h-[VALEUR]` / `max-h-[VALEUR]`.

---

## 4. 📦 Marges et espacements

### Marges
- `m-[VALEUR]` → Marge sur les 4 côtés.  
- `mt`, `mb`, `ml`, `mr` → Haut, bas, gauche, droite.  
- `mx` → Marge horizontale.  
- `my` → Marge verticale.  
- `mx-auto` → Centre horizontalement.  
- `-m-[VALEUR]` → Marge négative.

### Padding
- `p-[VALEUR]` → Padding sur tous les côtés.  
- `pt`, `pb`, `pl`, `pr` → Haut, bas, gauche, droite.  
- `px` → Horizontal.  
- `py` → Vertical.

---

## 5. ⬜ Bordures

- `border` → Bordure fine.  
- `border-2`, `border-4`, `border-8` → Épaisseurs.  
- `border-solid`, `border-dashed`, `border-dotted`, `border-double`, `border-none` → Styles.  
- `border-t`, `border-b`, `border-x`, `border-y` → Côtés spécifiques.  

### Arrondis
- `rounded-[TAILLE]` → Coins arrondis (`rounded-md`, `rounded-lg` …).  
- `rounded-full` → Cercle complet.  
- `rounded-none` → Pas d’arrondi.  
- `rounded-tl`, `rounded-tr`, `rounded-bl`, `rounded-br` → Coins précis.

---

## 6. ✍️ Polices et styles

- `font-sans`, `font-serif`, `font-mono` → Type de police.  
- `font-[light|medium|semibold|bold|black]` → Épaisseur.  
- `italic` / `not-italic` → Style italique.

---

## 7. 🌫 Ombres et opacités

- `opacity-[POURCENTAGE]` → Transparence (`opacity-50`).  
- `shadow-[TAILLE]` → Ombre (`xs`, `sm`, `md`, `lg`, `xl`, `2xl`).  
- `inset-shadow-[TAILLE]` → Ombre interne.  
- `text-shadow-[TAILLE]` → Ombre sur texte (si activée).

---

## 8. 🧾 Listes

- `list-none` → Supprime les puces.  
- `list-disc` → Puces rondes.  
- `list-decimal` → Numérotation.  
- `list-inside` / `list-outside` → Position des puces.  
- `list-image-none` → Supprime une image de puce.

---

## 9. 🚫 Dépassement (Overflow)

- `overflow-hidden` → Cache le contenu.  
- `overflow-auto` → Ajoute un défilement si nécessaire.  
- `overflow-scroll` → Force le défilement.  
- `overflow-clip` → Coupe sans scroll.  
- `text-ellipsis` + `whitespace-nowrap` + `overflow-hidden` → Tronque le texte.

---

## 10. 📝 Texte

- **Alignement :** `text-left`, `text-center`, `text-right`, `text-justify`.  
- **Décoration :** `underline`, `no-underline`, `underline-offset-[VALEUR]`.  
- **Casse :** `uppercase`, `lowercase`, `capitalize`.  
- **Espacement lettres :** `tracking-[VALEUR]`.  
- **Interligne :** `leading-[VALEUR]`.

---

## 11. 🧠 États et interactions

- `hover:[CLASSE]` → Au survol.  
- `focus:[CLASSE]` → Lors du focus.  
- `active:[CLASSE]` → Pendant le clic.  
- `visited:[CLASSE]` → Lien visité.  
- `disabled:[CLASSE]` → État désactivé.  
- `cursor-pointer` / `cursor-not-allowed` → Type de curseur.

---

## 12. 🔧 Flexbox

- `flex` → Active le mode flex.  
- `flex-row` / `flex-col` → Orientation.  
- `flex-row-reverse`, `flex-col-reverse` → Inversion.  
- `justify-[start|center|end|between|around|evenly]` → Alignement horizontal.  
- `items-[start|center|end|stretch|baseline]` → Alignement vertical.  
- `gap-[VALEUR]` → Espace entre les éléments.  
- `order-[NOMBRE]` → Ordre d’affichage.

---

## 13. 🧩 Grilles (Grid)

- `grid` → Active la grille.  
- `grid-cols-[NOMBRE]` → Nombre de colonnes.  
- `gap-[VALEUR]` → Espacement.  
- `order-[NOMBRE]` → Réorganisation.

---

## 14. 📍 Positionnement

- `relative`, `absolute`, `fixed`, `sticky` → Types de position.  
- `top-[VALEUR]`, `bottom-[VALEUR]`, `left-[VALEUR]`, `right-[VALEUR]` → Placement.  
- `z-[VALEUR]` → Profondeur (z-index).  
- `object-cover`, `object-contain` → Gestion des images.

---

## 15. 🔄 Transformations

- `translate-x-[VALEUR]`, `translate-y-[VALEUR]` → Déplacement.  
- `scale-[VALEUR]` → Agrandissement ou réduction.  
- `rotate-[DEGRÉS]` → Rotation.  
- `skew-x-[VALEUR]`, `skew-y-[VALEUR]` → Inclinaison.  
- `-` devant = inversion (ex : `-translate-x-1`).

---

## 16. 🌈 Filtres et effets

- `grayscale-[VALEUR]`, `blur-[VALEUR]`, `brightness-[VALEUR]`, `contrast-[VALEUR]`.  
- `invert`, `sepia`, `saturate-[VALEUR]`.  
- `backdrop-blur`, `backdrop-brightness` → Filtre sur fond.

---

## 17. ⚙️ Transitions et animations

### Transitions
- `transition`, `transition-[propriété]`, `duration-[MS]`, `delay-[MS]`, `ease-[type]`.

### Animations prêtes
- `animate-spin`, `animate-ping`, `animate-pulse`, `animate-bounce`.

### Animation personnalisée
```css
@keyframes slidein {
  from { transform: translateX(-100%); }
  to { transform: translateX(0); }
}
@theme {
  --animate-slidein: slidein 1s ease-in-out;
}
.animate-slidein {
  animation: var(--animate-slidein);
}
```

---

## 18. 📱 Responsive Design

| Nom | Taille min | Usage |
|-----|-------------|-------|
| sm | 640px | Petits écrans |
| md | 768px | Téléphones larges |
| lg | 1024px | Tablettes |
| xl | 1280px | Ordinateurs |
| 2xl | 1536px | Grands écrans |

_Exemple :_  
```html
<div class="grid-cols-1 md:grid-cols-2 lg:grid-cols-3"></div>
```

---

## 19. 🌑 Mode sombre

Dans `input.css` :
```css
@custom-variant dark (&:where(.dark, .dark *));
```
Ajouter `.dark` sur `<html>` :  
```html
<div class="bg-white dark:bg-gray-900 text-black dark:text-white"></div>
```

---

## 20. ⚡ Personnalisation

Modifier les variables :
```css
@theme {
  --color-orange-500: blue;
  --color-secondary: #999;
  --breakpoint-3xl: 99rem;
  --spacing-99: 10000rem;
  --font-merriweather: 'Merriweather, arial';
}
```

---

## 21. 🔠 Polices Google

```css
@import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@300;700&display=swap');
@theme {
  --font-merriweather: 'Merriweather', serif;
}
```

---

## 22. ⚙️ Styles de base

```css
@layer base {
  a {
    text-decoration: underline;
    color: blue;
  }
}
```

---

## 23. 🧱 Composants personnalisés

```css
@layer components {
  .btn {
    @apply bg-orange-500 text-white py-4 px-14 rounded-lg hover:bg-black cursor-pointer mx-auto block mt-3;
  }
}
```

---

## 24. 🧰 Classes utilitaires personnalisées

```css
@utility flex-centered {
  @apply flex justify-center items-center;
}
```

---

## 25. 🏗️ Conteneur

- `container` → Largeur max selon la taille d’écran.  
- `mx-auto` → Centre horizontalement.
