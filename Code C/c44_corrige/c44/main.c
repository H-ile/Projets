//
// c44
// Tirage avec remise
#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main() {

  // Variables(s)
  int nombre = 0;      // Le nombre tiré
  int i = 0;           // L'indice de parcours
  const int MIN = 1;      // La borne inférieure du nombre  à deviner
  const int MAX = 10;   // La borne supérieure du nombre  à deviner

  // Traitement(s)

  // Initialisation du générateur de nombres aléatoires
  srand(time(NULL));  // Initialise le générateur (une seule fois par exécution du programme)

  // Boucle sur 10 occurences
   printf("\n -- tirage de 10 entiers avec remise --\n\n");
  for (i=1;i<=10;i++) {
    nombre = (rand() % (MAX - MIN + 1)) + MIN;  // Génère un nouveau nombre aléatoire compris entre MIN et MAX
    printf ("% d\n",nombre);
  }

  // Fin de programme
  printf("\n That's all folks\n");
  return 0;
}
