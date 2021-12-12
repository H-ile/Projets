// c05b
// Conversion de mètres en pieds dans les deux sens
#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int main() {

  // Variables(s)
  double m = 0;   // Longueur en mètres
  double p = 0;   // Longueur en pieds
  int choix = 0;  // Sens de conversion

  // Traitement(s)

  // Saisie du sens
  printf ("1 = metres en pieds\n");
  printf ("2 = pieds en metres\n");
  printf("Choisissez un sens : ");
  scanf("%d",&choix);

  if (choix==1) {
    // Saisie de la longueur en mètres
    printf("Saisissez la longueur en metre(s) : ");
    scanf("%lf",&m);
    // Calcul de la longueur en pieds
    p = m*3.2808;
  } else {
    // Saisie de la longueur en pieds
    printf("Saisissez la longueur en pieds(s) : ");
    scanf("%lf",&p);
    // Calcul de la longueur en metres
    m = p/3.2808;
  }

  // Affichage des résultats
  printf(" --- Resultats ---\n");
  printf("longueur (metres) = %.2lf\n",m);
  printf("longueur (pieds)  = %.2lf\n",p);

  // Fin
  printf("\nThat's all folks\n");
  return 0;
}
