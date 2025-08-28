#include <stdio.h>
#define TAILLE_TAB 5

/*int main (void)
{
    int tableau[TAILLE_TAB]={0};
    for (int i=0;i<TAILLE_TAB;i++)
    {
        printf("[%d]\n",tableau[i]);
    }
    tableau[2]=7;
    printf("\n\n");
    for (int i=0;i<TAILLE_TAB;i++)
    {
        printf("[%d]\n",tableau[i]);
    }

    return 0; 
}*/
//-------------------------------------------------------------------------------
void afficher_tableau(int tab[],int taille);
int *creer_tableau(void);
int main (void)
{
    /*int tableau[TAILLE_TAB]={1,2,3,4,5};*/
    int *tableau=creer_tableau();
    afficher_tableau(tableau,TAILLE_TAB);
    printf("\n\n");
    tableau[2]=9;
    afficher_tableau(tableau,TAILLE_TAB);
    
    return 0;
}
void afficher_tableau(int tab[],int taille)
{

    for (int i=0;i<taille;i++)
    {
        printf("[%d]\n",tab[i]);
    }
}
//-------------------------------------------------------------------------------
int *creer_tableau(void)
{
    static int tableau_entiers[5];
    for (int i=0;i<5;i++)
    {
        tableau_entiers[i]=i*3;
    }
    return tableau_entiers;
}
/*
    [Déclaration de tableau]
        <type> <nom_tableau> [X];//déclaration avec valeurs aléatoires

    [initialisation]
        TABLEAU[5]={valeur1,valeur2,valeur3,valeur4,valeur5}
        tableau[0]={0};//toutes les cases valent 0
        tbleau[5]={4};//première case 4 le reste à 0
    [accès au tableau]
        tableau[X] : élément d'indice X (X+1ième élément du tableau)

    tableau :adresse du tableau
    *tableau : premier élément du tableau
    *(tableau + X): élément d'indice X

    (note)
    tableau[5] meme chose que *(tableau +5)

    [POINTEURS POUR TABLEAU]
        un taleau est déjà un pointeur vers son premier élément donc on utilise pas le "&" pour ressortir son adresse 
        on écrit juste le nom du tableau

        *tab et tab[] veulent la meme mais pour les tableaux il est préférable d'utiliser "tab[]" pour précisé que c'est un pointeur vers un tableau
        et non vers un entier

   
*/
