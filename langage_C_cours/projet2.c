#include <_stdio.h>
int main(){
    int matrice[1][2]={
        {1,2,3},
        {4,5,6}
    };

    for(int i=0;i<3;i++){
        printf("%d",matrice[1][i]);
    };
}