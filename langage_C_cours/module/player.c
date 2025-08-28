#include <stdio.h>
#include "player.h"
void bonjour(void){
    printf("hello world \n"); 

    
}
int reset_niveau(void){
    int niveau;
    niveau=0;
    return niveau;

}
int augmente_niveau(void)
{
    static levelUp=0;
    levelUp+=2;
    return levelUp;
}
/* grace à la fonction "static la variable "levelUp" ne sera pas detruite à la fin de la fonction
donc par conséquent à l'affichage sa valeur ne sera pas initialiser à 0*/