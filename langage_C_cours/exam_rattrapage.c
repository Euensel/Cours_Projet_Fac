#include <stdio.h>
#include <string.h>
int main ()
{
    char fruits[3][10]={"pomme","poire","raisin"};
    int quantites[3]={5,8,3};
    for (int i=0;i<3;i++)
    {
        printf("Fruit:%s-Quantité:%d\n",fruits[i],quantites[i]);
        if(quantites[i]>5)
        {
            printf("stock suffisant\n");
        }
        else if (quantites==5)
        {
            printf("stock moyen/n");
        }
        else{
            printf("stock insuffisant\n");
        }
    }
    int total=0;
    int j=0;
    while (j<3)
    {
        total=total+quantites[j];
        j++;
    }
    printf("Quantité totale:%d\n",total);
    return 0;

}