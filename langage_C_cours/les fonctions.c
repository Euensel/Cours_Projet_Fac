#include <stdio.h>

/*int init_ball(int posx)
{
    posx=150;
    return posx;
}
int main(void)
{
    int balleX;

    balleX=init_ball(balleX);
    printf("Avant la partie %d\n",balleX);



    return 0;
}
ex de fonction:
-printf()
-scanf()
 


*/
int bonjour(void)
{
    printf("bonjour : \n");
    return 1;
}
int main(void)
{
    char retour_fonction;
    retour_fonction=bonjour();
    printf("retour : %d\n",retour_fonction);
    return 0;
}