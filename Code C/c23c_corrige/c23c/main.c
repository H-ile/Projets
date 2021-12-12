// c23c
// table de multiplication sous forme de fonction
#include <stdio.h>
#include <stdlib.h>


// Fonction
void table(int nb ) {
  int resultat = 0; // Résultat de la multiplication
  int i = 0;        // Indice de parcours de la boucle (1..10)
  printf(" -- Table de %d --\n",nb);
  for (i=1; i <=10; i++) {
    resultat = nb * i;
    printf(" %02d * %02d = %02d\n",nb,i,resultat);
  }
}

int main() {

  // Variables(s)
  int nombre = 0;   // Nombre qui sera saisi

  // Traitement(s)

  // Saisie du nombre
  printf(" \n Choisissez un nombre (1..10) : ");
  scanf("%d",&nombre);

  if (nombre>=1 && nombre <=10) {
    // Le nombre est OK, on affiche les résultats
    printf("\n");
    printf(" And now the ...\n\n");
    table(nombre);
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
