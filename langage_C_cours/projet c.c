#include <stdio.h>
int main(){
    int tableau[5];
    int som,moy;
    som=0;
    for(int i=0;i<=5;i++){
        printf("entrez  l'élément %d : ",i);
        scanf("%d",&tableau[i]);
        som+=tableau[i];
    }
    moy=som/10;
    printf("somme = %d et moyenne=%d",som,moy);

    return 0;
        
    
}