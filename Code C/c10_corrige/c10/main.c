//
// c10
// Parit� d'un nombre
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
  // Calcul de la parit�
  reste = nombre%2;

  // Affichage des r�sultats
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
