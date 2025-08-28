#include <stdio.h>
#define TVA 20
#define afficher printf
#define longeur 15
#define largeur 10
#define aire (longeur*largeur)
void constante(void);
int main (void)
{
    afficher("%d\n",aire);
    afficher("coucou\n");
    int prixHT=15;
    int prixTTC=0;
    prixTTC=prixHT+(prixHT*TVA/100);
    afficher("%d\n",prixTTC);
    printf("nom : %s , ligne : %d , date : %d heure : %d\n",__FILE__,__LINE__,__DATE__,__TIME__);
    return 0;
}
/*
#include: inclus une bibliothèque
#define: permet de définir une constante il remplace une valeur par une autre pour le préprocesseur

constante prédeéfinis du langage C:
    __FILE__(nom du fichier)
    __LINE__(ligne du fichier)
    __DATE__(date de compilation)
    __TIME__(heure de compilation)


*/
