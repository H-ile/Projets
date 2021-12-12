//
// c44
// Tirage avec remise
#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main() {

  // Variables(s)
  int nombre = 0;      // Le nombre tir�
  int i = 0;           // L'indice de parcours
  const int MIN = 1;      // La borne inf�rieure du nombre  � deviner
  const int MAX = 10;   // La borne sup�rieure du nombre  � deviner

  // Traitement(s)

  // Initialisation du g�n�rateur de nombres al�atoires
  srand(time(NULL));  // Initialise le g�n�rateur (une seule fois par ex�cution du programme)

  // Boucle sur 10 occurences
   printf("\n -- tirage de 10 entiers avec remise --\n\n");
  for (i=1;i<=10;i++) {
    nombre = (rand() % (MAX - MIN + 1)) + MIN;  // G�n�re un nouveau nombre al�atoire compris entre MIN et MAX
    printf ("% d\n",nombre);
  }

  // Fin de programme
  printf("\n That's all folks\n");
  return 0;
}
