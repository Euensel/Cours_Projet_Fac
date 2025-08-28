#include <stdio.h>
#include <string.h>
int menu (void);
int saisiDenombre(int *nombre1,int *nombre2);
int pgcd (int *nombre1,int *nombre2);
int ppcm(int *nombre1,int *nombre2);

int main(void)
{
    int nombre1,nombre2;
    int *pointeurN1=&nombre1,*pointeurN2=&nombre2;
    int pt1=&nombre1,pt2=&nombre2;
    int resultat;
    int choix;
    choix=menu();
    
    switch (choix)
    {
    case 1:
        
        resultat=pgcd(pointeurN1,pointeurN2);
        printf("PGCD(%d,%d)=%d\n",nombre1,nombre2,resultat);
        break;
    case 2:
        ppcm(pointeurN1,pointeurN2);
        break;
    case 3:
        printf("AU REVOIR !/n");
    
        break;
    
    default:
    printf("Choix invalide\n");
        break;
    }
    
    
    return 0;
}
int menu(void)
{
    int choix;
    printf("   MENU   ");
    printf("-----------\n");
    printf("1.PGCD DE DEUX NOMBRES \n");
    printf("2.PPCM DE DEUX NOMBRES \n");
    printf("3.QUITTER /n");
    printf("\n\n");
    printf("choisir : ");
    scanf("%d",&choix);
    return choix;
}
int saisiDenombre(int *nombre1,int *nombre2)
{
    printf("saisir le premier nombre : ");
    scanf("%d", nombre1);
    printf("saisir le deuxième nombre : ");
    scanf("%d",nombre2);
    

}
int pgcd (int *nombre1,int *nombre2)
{
    int reste;
    int resultat;
    int stockage1,stockage2;
    saisiDenombre(nombre1,nombre2);
    stockage1=*nombre1;
    stockage2=*nombre2;

    
    while (*nombre2>0 )
    {
        reste=*nombre1 % *nombre2;
        *nombre1=*nombre2;
        *nombre2=reste;
        
        
    }
    resultat=*nombre1;
    return resultat;
    
    
}
int ppcm(int *nombre1,int *nombre2)
{
    int pGcd,ppcm;
    saisiDenombre(nombre1,nombre2);
    pGcd=pgcd(nombre1,nombre2);
    ppcm=*nombre1 * *nombre2/pGcd;

    
    printf("PPCM(%d,%d)=%d\n",*nombre1,*nombre2,ppcm);
    

}
