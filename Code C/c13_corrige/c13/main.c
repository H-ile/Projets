//
// c13
// plus petit nombre parmi 3
#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int main() {

  // Variables(s)
  double nb1 = 0;
  double nb2 = 0;
  double nb3 = 0;
  double mini= 0;

  // Traitement(s)
  // Saisie des nombres
  printf("Entrez le premier nombre : ");
  scanf("%lf",&nb1);
  printf("Entrez le deuxieme nombre : ");
  scanf("%lf",&nb2);
  printf("Entrez le troisieme nombre : ");
  scanf("%lf",&nb3);

  // Calcul du plus petit nombre
  if (nb1 < nb2 ) {
    mini = nb1;
  } else {
    mini = nb2;
  }
  if (nb3 < mini) {
    mini = nb3;
  }

  // Affichage des résultats
  printf(" --- Resultats ---\n");
  printf("nombre 1 = %.2lf\n",nb1);
  printf("nombre 2 = %.2lf\n",nb2);
  printf("nombre 3 = %.2lf\n",nb3);
  printf("+ petit nombre = %.2lf\n",mini);

  // Fin
  printf("\nThat's all folks\n");
  return 0;
}
