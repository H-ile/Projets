//
// c11
// Etat de l'eau
#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int main() {

  // Variables(s)
  double temperature = 0;

  // Traitement(s)
  // Saisie
  printf("Saisissez la temperature : ");
  scanf("%lf",&temperature);

  // Affichage des résultats
  printf(" --- Resultats ---\n");
  printf("temperature = %.2lf\n",temperature);
  printf("l'eau est a l'etat ");
  if (temperature < 0) {
    printf("solide\n");
  } else {
    if (temperature < 100) {
      printf("liquide\n");
    } else {
      printf("gazeux\n");
    }

  }

  // Fin
  printf("\nThat's all folks\n");
  return 0;
}
