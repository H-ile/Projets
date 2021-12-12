// c40
// Relevé de températures - affichage
#include <stdio.h>
#include <stdlib.h>
#include <math.h>
#include <locale.h>

int main() {

  // Variables(s)
  int i=0;           // Indice de parcours
  int tableau[10]= {12,13,15,18,21,22,21,18,17,15};  // Tableau des températures

  setlocale(LC_ALL,""); // Affichage des accents dans la console Windows (ajouter locale.h)

  // Traitement(s)
  printf("\n -> c40 : relevé de températures - affichage\n\n");

  // Affichage du contenu du tableau
  printf("\n -> Affichage du contenu du tableau\n\n");
  for (i=0; i<10; i++) {
    printf(" tableau[%d]=%d\n",i,tableau[i]);
  }

  // Fin
  printf("\n\n That's all folks\n");
  return 0;
}
