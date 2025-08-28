#include <stdio.h>
#include <string.h>
int main(void)
{
    /*signed char mot[]="Bonjour tout le monde !";
    printf("%s\n",mot);*/
    /*signed char prenom[26]="jason";
    char stockage[256];*/
    /*printf("Comment tu t'appelles ? ");
    scanf("%s",prenom);
    printf("Ton prenom est : %s\n",prenom);*/
    /*printf("Ton prenom de base : %s\n",prenom);
    printf("change ton prenom ");
    scanf("%s",stockage);
    strcpy(prenom,stockage);
    printf("ton nouveau prenom : %s\n",prenom);*/
    /*char texte[]="Jason";
    char mot[]="Jasone";
    printf("Texte : %s\n",texte);
    printf("taille du texte : %d\n",strlen(texte));
    int test =strcmp(texte,mot);
    if(test==0)
        printf("les deux sont les memes\n");
    else if(test<0)
        printf("%s<%s\n",texte,mot);
    else
        printf("%s>%s\n",texte,mot);*/
    /*char mot1[]= "boul et ";
    char mot2[]= "bill";
    printf("%s\n", strcat(mot1,mot2));*/
    /*char texte[]="boul et bill";
    char mot[]="bill";
    if (strstr(texte,mot)!=NULL)
        printf("texte trouvé !\n");*/
    /*char texte[]="yin-yang";
    char c='-';
    char *resultat=strchr(texte,c);
    printf("%s\n",resultat);*/
    char texte[256];
    sprintf(texte,"jason",5);
    printf("%s\n",texte);

    

    



    return 0;
}
/*
[Fonction des chaines]
    "strcpy()" permet de copier une chaine de caractere dans un autre
    "strlen()": longeur d'une chaine(sans caractère de fin de chaine)
    "strcmp()":comparer deux chaines (lexicographiquement)
    "strcat()": concaténer deux chaines (fusionner)
    "strstr()": chercher une chaine dans une autre
    "strchr()":chercher la première occurence du caractère

    sprintf(): écrire dans une chaine
*/