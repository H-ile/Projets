//
// c10b
// Parité d'un nombre avec une fonction
#include <stdio.h>
#include <stdlib.h>
#include <math.h>

// Fonction de calcul de la parité
void parite(int nombre) {
  int reste = 0;
  reste = nombre%2;

  // Affichage des résultats
  printf(" --- Resultats ---\n");
  if (reste != 0) {
    printf(" %d est impair\n",nombre);
  } else {
    printf(" %d est pair\n",nombre);
  }
}

int main() {

  // Variables(s)
  int nb = 0;

  // Traitement(s)


  // Saisie en boucle
  do {
    printf("\n Saisissez un nombre (0 pour arreter la saisie) : ");
    scanf("%d",&nb);

    if (nb != 0) {
      parite(nb);  // Appel de la fonction
    }
  } while (nb != 0);

    // Fin
    printf("\n That's all folks\n");
  return 0;
}
