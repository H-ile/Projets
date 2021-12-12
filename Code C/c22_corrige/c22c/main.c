//
// c22c
// Traçage d'un trait vertical
#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int main() {

  // Variables(s)
  int i=0;  // indice
  int hauteur=0;  // hauteur de la ligne

  // Traitement(s)
  // Saisie des nombres
  printf("\n Entrez la hauteur : ");
  scanf("%d",&hauteur);

  // Traitement(s)

  // Affichage des résultats
  printf("\n");
  printf(" -- Trait vertical de %d --\n",hauteur);
  printf("\n");

  // Boucle pour tracer le trait vertical
  for (i=0; i < hauteur; i++) {
      printf(" #\n");
  }
  printf("\n");

  // Fin
  printf("\n That's all folks\n");
  return 0;
}
