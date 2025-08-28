#include <stdio.h>
#define NOMBRE_LIGNES 3
#define NOMBRE_COLONNES 2
int main(void)
{
    int damier[NOMBRE_LIGNES][NOMBRE_COLONNES]=
    {
        {1,2},
        {3,4},
        {5,6},
    };
    int i,j;
    for(i=0;i<NOMBRE_LIGNES;i++)
    {
        for (j=0;j<NOMBRE_COLONNES;j++)
        {
            printf("élement indice [%d][%d]=%d\n",i,j,damier[i][j]);
        }
    }
    return 0;
}
/*
[TABLEAU A PLUSIEURS DIMENSIONS]
<type> <nom_tableau> [nombre_lignes][nombre_colonnes]
*/
