//
// c45
// Tirage sans remise
#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main() {

  // Variables(s)
  int nombre = 0;       // Le nombre tiré
  int i = 0;            // L'indice de parcours (1..10)
  int j = 0;            // L'indice de recherche dans le tableau
  const int MIN = 1;    // La borne inférieure du nombre  à deviner
  const int MAX = 10;   // La borne supérieure du nombre  à deviner
  int tableau[10] = {0,0,0,0,0,0,0,0,0,0};  // Tableau pour stocker les valeurs uniques
  int jmax = -1;        // Indice maximum du tableau des valeurs uniques
  int trouve = 0;       // Indique si le nombre tiré a été trouvé dans le tableau des valeurs uniques

  // Traitement(s)

  // Initialisation du générateur de nombres aléatoires
  srand(time(NULL));  // Initialise le générateur (une seule fois par exécution du programme)

  // Boucle sur 10 occurences
  printf("\n -- tirage de 10 entiers sans remise --\n\n");
  for (i=1; i<=10; i++) {
    // Boucle de relance du tirage tant que le nombre a déjà été tiré
    trouve = 1;
    while (trouve==1) {
      nombre = (rand() % (MAX - MIN + 1)) + MIN;  // Génère un nouveau nombre aléatoire compris entre MIN et MAX
      // Recherche dans le tableau si le nombre a déjà été tiré
      trouve = 0;
      for (j=0;j<=jmax;j++) {
        if (tableau[j]==nombre) {
          trouve=1;
        }
      }
      // Si le nombre n'a pas été trouvé, on l'ajoute
      if (trouve==0) {
        jmax++;
        tableau[jmax] = nombre;
      }
    } // while
    printf(" %d\n",nombre);  // On affiche le "bon" nombre ici puisqu'on est sorti de la boucle de relance du tirage
  } // for

  // Affichage du contenu du tableau
  printf("\n\n -- Affichage du contenu du tableau --\n\n");
  for (j=0; j<=9; j++) {
    printf (" tableau[%d]= %d\n",j,tableau[j]);
  }

  // Fin de programme
  printf("\n That's all folks\n");
  return 0;
}
