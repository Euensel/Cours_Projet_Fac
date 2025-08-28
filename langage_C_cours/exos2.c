#include <stdio.h>
#include <stdlib.h>
#include <string.h>
int main(){
    char cours [3][10];
    int cotes[3];
    int total=0;
    float pourcentage;
    
    printf("chargez les cours SVP!\n");
    for (int i=0;i<3;i++){
        printf("chargez le nom du cours numéro [%d] : ",i,cours);
        scanf("%s",&cours[i]);
        printf("saisir la cote du cours de %s : ",cours[i],cotes);
        scanf("%d",&cotes[i]);
        
    }
    for (int j=0 ;j<3;j++){
        printf("%s: %d",cours[j],cotes[j]);
        total+=cotes[j];
    printf("\n");
    }
    printf("total= %d/60 \n",total);
    pourcentage=total*100/60;
    printf("vous avez %.1f %% ",pourcentage);

    return 0;
}