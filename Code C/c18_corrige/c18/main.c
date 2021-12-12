//
// c18
// Mention au BAC
#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int main() {

  // Variables(s)
  double note = 0;

  // Traitement(s)

  // Saisie de la moyenne générale
  printf("Saisissez votre moyenne au BAC : ");
  scanf("%lf",&note);

  // Affichage des résultats
  printf(" --- Resultats ---\n");
  printf("Note    : %.2lf\n",note);
  printf("Mention : ");

  if (note <12 ) {
    printf(" pas de mention, desole !\n");
  }
  if (note >=12 && note < 14 ) {
    printf("assez bien\n");
  }
  if (note >=14 && note < 16 ) {
    printf("bien\n");
  }
  if (note >=16 ) {
    printf("tres bien\n");
  }

  // Fin
  printf("\nThat's all folks\n");
  return 0;
}
