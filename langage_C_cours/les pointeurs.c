#include <stdio.h>
/*void inverser_nombre(int *pt_nb1,int *nombreB)
{
    int temporaire=0;
    temporaire=*nombreB;
    *nombreB=*pt_nb1;
    *pt_nb1=temporaire;
}
int main (void)
{
    int A=15;
    int B=28;
    printf("adresse =%p\n",&B);
    printf(" avant : A=%d et B=%d\n",A,B);
    inverser_nombre(&A,&B);
    printf(" après : A=%d et B=%d\n",A,B);



    return 0;
}*/

void inverser_nombre(int *pt_nb1,int *pt_nb2)
{
    int temporaire=0;
    temporaire=*pt_nb2;
    *pt_nb2=*pt_nb1;
    *pt_nb1=temporaire;
}
int main (void)
{
    int A=15;
    int B=28;
    int *pointeurSurA=&A;
    int *pointeurSurB=&B;
    printf("adresse =%p\n",&B);
    printf(" avant : A=%d et B=%d\n",A,B);
    inverser_nombre(pointeurSurA,pointeurSurB);
    printf(" après : A=%d et B=%d\n",A,B);



    return 0;
}
/*
un pointeur est une variable contenant l'adresse d'une autre
%p permet d'afficher l'adresse
%d affiche une adresse de variable ou pointeur

[VARIABLE]
si on dans le printf on met juste :

    maVarible : valeur de la variable
    &maVariable : adresse de la variable

[POINTEURS]
    *monPointeur=NULL ou monPointeur=&mavariable 
    (déclaration et initialisation d'un pointeur)

    monPointeur : adresse de la variable ponitée
    *monpointeur : valeur de la variable pointée
    &monPointeur : adresse du pointeur
*/