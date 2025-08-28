#include <stdio.h>
#include <stdlib.h>
int main(){
    int nombre_cours,cotes;
    char cours[10];
    printf("nombres de cours : ",nombre_cours);
    scanf("%d",&nombre_cours);
    for(int i=0;i<nombre_cours;i++){
        printf("saisir nom du cours :  ",cours);
        scanf("%s",&cours);
        printf("saisir cotes en %s : ",cours,cotes);
        scanf("%d",&cotes);
        printf("note en %s = %d ",cours,cotes);
        
    } 
    
    return 0;
}