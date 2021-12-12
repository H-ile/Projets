//
// c22
// Traçage d'un trait horizontal
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
  printf(" -- Ligne de %d --\n",largeur);
  printf("\n ");
  // Boucle pour tracer la ligne
  for (i=0; i < largeur; i++) {
    printf("#");
  }
  printf("\n");

  // Fin
  printf("\n That's all folks\n");
  return 0;
}
