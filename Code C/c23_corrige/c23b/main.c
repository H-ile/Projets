// c23b
// table de multiplication (entre 1 et 10 seulement)
#include <stdio.h>
#include <stdlib.h>

int main() {

  // Variables(s)
  int nombre = 0;   // Nombre qui sera saisi
  int i = 0;        // Indice de parcours de la boucle (1..10)
  int resultat = 0; // Résultat de la multiplication

  // Traitement(s)

  // Saisie du nombre
  printf(" \n Choisissez un nombre (1..10) : ");
  scanf("%d",&nombre);

  if (nombre>=1 && nombre <=10) {
    // Le nombre est OK, on affiche les résultats
    printf("\n");
    printf(" And now the ...\n\n");
    printf(" -- Table de %d --\n",nombre);
    for (i=1; i <=10; i++) {
      resultat = nombre * i;
      printf(" %02d * %02d = %02d\n",nombre,i,resultat);
    }
  } else {
    // Le nombre est KO, on affiche un message d'erreur
    printf("\n");
    printf(" Il fallait saisir un nombre compris en 1 et 10 !\n");
    printf(" Allez, essaye encore une fois...\n");
    printf("\n");
  }

  // Fin
  printf("\n That's all folks\n");
  return 0;
}
