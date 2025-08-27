// Change la couleur du fond quand on clique sur le bouton
document.getElementById('colorButton').addEventListener('click', function() {
    const colors = ['#f4f4f9', '#ffcccb', '#d1e7dd', '#fde68a', '#c7d2fe'];
    const randomColor = colors[Math.floor(Math.random() * colors.length)];
    document.body.style.backgroundColor = randomColor;
  });