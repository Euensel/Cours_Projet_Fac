#include <stdio.h>
#include <stdlib.h>
int main (void)
{
    FILE *fic=fopen ("sauvegarde.txt", "r");
    int lettre=0;
    if(fic==NULL)
        exit(1);
    lettre=fgetc(fic);
    printf(" %c\n",lettre);
    fclose(fic);


    return 0;
}
/*
    fopen(<fichiers>,<mode_ouverture>): r (lecture seule,doit exister)
                                        w(écriture seule)
                                        a(ajout fin fichier)
                                        r+(lecture:écriture, doit exister)
                                        w+(lecture/écriture,supprimme contenu)
                                        a+(ajout lecture/écriture,fin de fichier)
    fclose(<fichier>) : fermer un fichier ouvert

    [LECTURE]
    fgetc(<fichier>):lire un caractère
*/