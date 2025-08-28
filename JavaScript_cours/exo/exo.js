/*const btn = document.getElementById('btn');
const paragraphe = document.getElementById('text');

    btn.addEventListener('click', () => {
      if (paragraphe.style.display === "none") {
        paragraphe.style.display = "block";
      } else {
        paragraphe.style.display = "none";
      }
    });
*/
/*const paragraphe=document.getElementById('compteur');
const boutton=document.getElementById('btn');
let compteur=0;
boutton.addEventListener('click',()=>
{

    compteur++;
    paragraphe.textContent=compteur;
})*/

/*
const input=document.getElementById('text');
const sauvegarde=document.getElementById('sauvegarde');
input.addEventListener('input',()=>
{
    sauvegarde.textContent="Tu as écrit: " + input.value;
})*/
const menu_icon=document.getElementById('menu-icon');
const nav=document.getElementById('nav');
menu_icon.addEventListener('click',()=>
{
    if(nav.style.display==="flex")
        nav.style.display="none";
    else
        nav.style.display="flex";
})
