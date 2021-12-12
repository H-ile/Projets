// c04
// Distance entre deux points
#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int main() {

  // Variables(s)
  int x1=0;     // coordonnées du premier point
  int y1=0;
  int x2=0;     // coordonnées du second point
  int y2=0;
  double distance=0;    // Distance entre les deux points
  // Traitements

  // Saisie ddes coordonnées
  printf("Saisissez x1 : ");
  scanf("%d",&x1);
  printf("Saisissez y1 : ");
  scanf("%d",&y1);
  printf("Saisissez x2 : ");
  scanf("%d",&x2);
  printf("Saisissez y2 : ");
  scanf("%d",&y2);

  // Calcul de la distance
  distance = sqrt(((x2-x1)*(x2-x1))+((y2-y1)*(y2-y1)));

  // Affichage des résultats
  printf(" --- Resultats ---\n");
  printf("x1,y1 = %d,%d\n",x1,y1);
  printf("x2,y2 = %d,%d\n",x2,y2);
  printf("distance = %.02lf\n",distance);

  // Fin
  printf("That's all folks\n");
  return 0;
}
