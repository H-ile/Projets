// c06
// Volume d'un cylindre creux
#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int main() {

  // Variables(s)
  double r1 = 0;
  double r2 = 0;
  double h = 0;
  double v = 0;
  const double PI=3.14159;

  // Traitement(s)

  // Saisie des dimensions
  printf("Entrez le rayon interieur (m) : ");
  scanf("%lf",&r1);
  printf("Entrez le rayon exterieur (m) : ");
  scanf("%lf",&r2);
  printf("Entrez la hauteur (m) : ");
  scanf("%lf",&h);

  // Calcul
  v= PI*h*(r2*r2 - r1*r1);
  // Pour résoudre le pb du rayon int > rayon ext
  // Le volume ne change pas, on ne fait qu'inverser la
  // saisie des rayons
  v=fabs(v);

  // Affichage des résultats
  printf(" --- Resultats ---\n");
  printf("rayon interieur : %.2lf\n",r1);
  printf("rayon exterieur : %.2lf\n",r2);
  printf("hauteur         : %.2lf\n",h);
  printf("volume          : %.2lf\n",v);
  // Fin
  printf("\nThat's all folks\n");
  return 0;
}
