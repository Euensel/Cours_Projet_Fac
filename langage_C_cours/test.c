#include<stdio.h>
#include<stdlib.h>
int main(){
    int nombre;
    printf("saisir un nombre:");
    scanf("%d",&nombre);
    if(nombre%5==0&&nombre%3==0){
        printf("%d est divisible par 3 et 5",nombre);
    }else if(nombre%5!=0&&nombre%3==0){
        printf("%d est divisible par 3 seulement",nombre);
    }else if(nombre%5==0&&nombre%3!=0){
        printf("%d est divisinle par 5 seulement",nombre);
    }else{
        printf("%d n'est divisible ni par 3 ni par 5",nombre);
    }
    return 0;
}