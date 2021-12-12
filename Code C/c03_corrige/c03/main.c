// c03
// Conversion d'un nombre de minutes en
// heures+minutes
#include <stdio.h>
#include <stdlib.h>

int main() {

  // Variables(s)
  int nombre=0;     // nombre de minutes
  int heures=0;     // nombre d'heures
  int minutes=0;    // nombre de minutes

  // Traitements

  // Saisie du nombre de minutes
  printf("Saisissez le nombre de minutes : ");
  scanf("%d",&nombre);

  // Calcul des heures
  heures = nombre/60;
  // Calcul de la moyenne
  minutes = nombre%60;

  // Affichage des résultats
  printf(" --- Resultats ---\n");
  printf("nombre = %dmn\n",nombre);
  printf("calcul = %02dH%02d\n",heures,minutes);

  // Fin
  printf("That's all folks\n");
  return 0;
}
