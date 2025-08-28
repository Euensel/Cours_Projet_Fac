#include <stdio.h>
#include <string.h>
#define CONSTANTE 273
//initialisation
int menu(void);
int conversionCelsiusF(int *temperature,int *conversion);
int conversionFahrenheitC(int *temperature2,int *conversion2);
int conversionCelsiusK(int *temperature3,int *conversion3);
int conversionKelvinC(int *temperature4,int *conversion4);
//fonction principale

int main()

{
    //initialiation des variables
    int temperature,conversion;
    int *pointeurSurTemp=&temperature;
    int *pointeurSurConv=&conversion;
    int choix;
    char password[20];
    char mot_de_passe[]="euensel";
    int tentative=4;
    //autorisation d'accès

    printf("Saisir le mot de passe pour accéder : ");
    scanf("%s",&password);

        if(strcmp(mot_de_passe,password)==0)
        {
            printf("mot de passe correct\n");
            printf("BIENVENUE SUR MON PROGRAMME\n");
        }
        else
        {
            while (tentative>0)
            {
                printf("mot de passe incorrect\n");
                printf("Veuillez saisir un mot de passe correct : ");
                scanf("%s",password);
                if(strcmp(mot_de_passe,password)==0)
                {
                    printf("mot de passe correct\n");
                    printf("BIENVENUE SUR MON PROGRAMME\n");
                }

                tentative-=1;
                if (tentative==0)
                {
                    printf("Trop de tentative\n");
                    printf("veuillez réesayyez plus tard\n");
                    break;
                }
            }
            

        }

   
    if (strcmp(password,mot_de_passe)==0)
    {
        choix=menu();
        switch (choix)
        {
        case 1:
            conversionCelsiusF(pointeurSurTemp,pointeurSurConv);
            printf("%d°C =%d°F \n",*pointeurSurTemp,*pointeurSurConv);
            break;
        case 2:
            conversionFahrenheitC(pointeurSurTemp,pointeurSurConv);
            printf("%d°F =%d°C \n",*pointeurSurTemp,*pointeurSurConv);
            
            break;
        
        case 3:
            conversionCelsiusK(pointeurSurTemp,pointeurSurConv);
            printf("%d°C =%d°K \n",*pointeurSurTemp,*pointeurSurConv);
            break;
        case 4:
            conversionKelvinC(pointeurSurTemp,pointeurSurConv);
            printf("%d°K =%d°C \n",*pointeurSurTemp,*pointeurSurConv);
            break;

        case 5:
            printf("Au revoir ! \n");
            break;


        
        default:
            printf("Choix non valide \n");
            break;
        }
    

    }


    return 0;
}

//fonction menu
int menu()
{
    int choix;
    printf("  MENU  \n");
    printf("---------\n\n");
    printf("1.CONVERTIR DE CELSIUS EN FAHRENHEIT\n");
    printf("2.CONVERTIR DE FAHRENHEIT EN CELSIUS \n");
    printf("3.CONVERSION DE CELSIUS EN KELVIN\n");
    printf("4.CONVERSION DE KELVIN EN CELSIUS\n");
    printf("5.QUITTER \n\n");
    printf("Choisissez : ");
    scanf("%d",&choix);
    return choix;

}
//fonction conversion C en F
int conversionCelsiusF(int *temperature,int *conversion)
{
    
    printf("saisir la température en celsius : ");
    scanf("%d",temperature);
    *conversion=*temperature*9/5+32;
    

     
}
//fonction conversion F en C
int conversionFahrenheitC(int *temperature2,int *conversion2)
{
    int stockage;
    printf("saisr la tmperature en fahrenheit : ");
    scanf("%d",temperature2);
    stockage=*temperature2-32;
    *conversion2=stockage*5/9;
    
}
//fonction conversion C en K
int conversionCelsiusK(int *temperature3,int *conversion3)
{
    printf("saisir la température en celsius : ");
    scanf("%d",temperature3);
    *conversion3=*temperature3+CONSTANTE;
//fonction de conversion K en C
}
int conversionKelvinC(int *temperature4,int *conversion4)
{
    printf("saisir la température en kelvin : ");
    scanf("%d",temperature4);
    *conversion4=*temperature4-CONSTANTE;
}
