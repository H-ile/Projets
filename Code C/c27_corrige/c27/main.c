// c27
// Dessin d'un rectangle plein
#include <stdio.h>
#include <stdlib.h>

int main() {

  // Variables(s)
  int l=0;  // Largeur
  int h=0;  // Hauteur
  int i=0;  // Incrément de la hauteur
  int j=0;  // Incrément de la largeur

  // Traitement(s)

// Saisie
  printf("\n Entrez la largeur du rectangle : ");
  scanf("%d",&l);
  printf(" Entrez la hauteur du rectangle : ");
  scanf("%d",&h);

  // Dessine le rectangle
  printf("\n");
  printf(" -- Rectangle %dx%d --\n",l,h);
  printf("\n");
  // Boucle sur la hauteur
  for (i=0; i < h; i++) {
        printf(" ");
    // Boucle sur la largeur
    for (j=0; j < l; j++) {
      printf("*");
    }
    printf("\n");
  }

  // Fin
  printf("\n That's all folks\n");
  return 0;
}
