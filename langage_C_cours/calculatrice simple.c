#include <stdio.h>
int main(){
    float nombre1,nombre2,calcul;
    char operateur;
    printf("saisir le premier nombre : ",nombre1);
    scanf("%f",&nombre1);
    printf("saisir le second nombre : ",nombre2);
    scanf("%f",&nombre2);
    printf("saisir opérateur (+,-,*,/): ",operateur);
    scanf(" %c",&operateur);
    switch (operateur)
    {
    case '+':
        calcul=nombre1+nombre2;
        printf("%.2f+%.2f=%.2f",nombre1,nombre2,calcul);
        break;
    case '-':
        calcul=nombre1-nombre2;
        printf("%.2f-%.2f=%.2f",nombre1,nombre2,calcul);
        break;
    case '*':
        calcul=nombre1*nombre2;
        printf("%.2f*%.2f=%.2f",nombre1,nombre2,calcul);
        break;
    case '/':
        if (nombre2!=0){
            calcul=nombre1/nombre2;
            printf("%.2f/%.2f=%.2f",nombre1,nombre2,calcul);
        }

        else{
            printf("division par 0 impossible ");
        }
        break;
    
    default:
        printf("saisir un opérateur valide ");
        break;
    }

}