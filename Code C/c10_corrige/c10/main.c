//
// c10
// Parité d'un nombre
#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int main() {

  // Variables(s)
  int nombre = 0;
  int reste = 0;

  // Traitement(s)
  // Saisie
  printf("Saisissez un nombre : ");
  scanf("%d",&nombre);
  // Calcul de la parité
  reste = nombre%2;

  // Affichage des résultats
  printf(" --- Resultats ---\n");
  if (reste != 0) {
    printf("%d est impair\n",nombre);
  } else {
    printf("%d est pair\n",nombre);
  }

  // Fin
  printf("\nThat's all folks\n");
  return 0;
}
