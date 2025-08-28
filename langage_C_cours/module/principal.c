 #include <stdio.h>
 #include "player.h"
 int main(void)
 {
   bonjour();
   int level=15;
   printf("niveau actuel : %d\n",level);
   level=reset_niveau();
   printf("niveau après reset : %d\n",level);
   printf("level=%d\n",augmente_niveau());
   printf("level=%d\n",augmente_niveau());
   printf("level=%d\n",augmente_niveau());
   
   return 0; 
    
 }