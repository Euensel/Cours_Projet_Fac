#include <stdio.h>
int main (){
    int nombre1,nombre2,calcul;
    printf("saisir le premier nombre : ",nombre1) ;
    scanf("%d",&nombre1) ;
    printf("saisir le deuxieme nombre : ",nombre2) ; 
    scanf ("%d",&nombre2) ; 
    calcul = nombre1 + nombre2 ;
    printf("%d+%d=%d",nombre1,nombre2,calcul) ;

 return 0; 
}

