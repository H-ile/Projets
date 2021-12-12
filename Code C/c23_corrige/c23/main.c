// c23
// table de multiplication
#include <stdio.h>
#include <stdlib.h>

int main() {

  // Variables(s)
  int nombre = 0;   // Nombre qui sera saisi
  int i = 0;        // Indice de parcours de la boucle (1..10)
  int resultat = 0; // Résultat de la multiplication

  // Traitement(s)

  // Saisie du nombre
  printf(" \n Choisissez un nombre : ");
  scanf("%d",&nombre);

  // Affichage des résultats
  printf("\n");
  printf(" And now the ...\n\n");
  printf(" -- Table de %d --\n",nombre);
  for (i=1; i <=10; i++) {
    resultat = nombre * i;
    printf(" %02d * %02d = %02d\n",nombre,i,resultat);
  }

  // Fin
  printf("\n That's all folks\n");
  return 0;
}
