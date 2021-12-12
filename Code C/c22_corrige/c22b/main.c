//
// c22b
// Traçage d'un pointillé horizontal
#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int main() {

  // Variables(s)
  int i=0;  // indice
  int largeur=0;  // largeur de la ligne

  // Traitement(s)
  // Saisie des nombres
  printf("\n Entrez la largeur : ");
  scanf("%d",&largeur);

  // Traitement(s)

  // Affichage des résultats
  printf("\n");
  printf(" -- Pointille de %d --\n",largeur);
  printf("\n ");

  // Boucle pour tracer le pointillé
  printf("[");
  for (i=0; i < largeur; i++) {
    if (i%2==0) {
      printf("#");
    } else {
      printf(" ");
    }

  }
  printf("]\n");

  // Fin
  printf("\n That's all folks\n");
  return 0;
}
