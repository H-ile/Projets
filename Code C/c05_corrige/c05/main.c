// c05
// conversion de m�tres en pieds
#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int main() {

  // Variables(s)
  double m = 0;   // Longueur en m�tres
  double p = 0;   // Longueur en pieds

  // Traitement(s)

  // Saisie de la longueur en m�tres
  printf("Saisissez la longueur en metre(s) : ");
  scanf("%lf",&m);

  // Calcul de la longueur en pieds
  p = m*3.2808;

  // Affichage des r�sultats
  printf(" --- Resultats ---\n");
  printf("longueur (metres) = %.2lf\n",m);
  printf("longueur (pieds)  = %.2lf\n",p);

  // Fin
  printf("\nThat's all folks\n");
  return 0;
}
