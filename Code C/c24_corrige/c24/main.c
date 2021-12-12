//
// c24
// Nombre myst�re
#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main() {

  // Variables(s)
  int nombreMystere = 0;  //Le nombre � deviner
  int saisie = 0;         // Le nombre saisi
  const int MIN = 1;      // La borne inf�rieure du nombre  � deviner
  const int MAX = 100;   // La borne sup�rieure du nombre  � deviner

  // Traitement(s)

  // G�n�ration du nombre al�atoire
  srand(time(NULL));  // Initialise le g�n�rateur (une seule fois par ex�cution du programme)
  nombreMystere = (rand() % (MAX - MIN + 1)) + MIN;  // G�n�re un nouveau nombre (autant de fois que l'on veut)

  /* La boucle du programme. Elle se r�p�te tant que l'utilisateur n'a pas trouv� le nombre myst�re */
  do {
    // On demande le nombre
    printf("\n Quel est le nombre (%d..%d) ? ",MIN,MAX);
    scanf("%d", &saisie);

    // On compare le nombre entr� avec le nombre myst�re
    if (nombreMystere > saisie) {
      printf("\n C'est plus !\n");
    } else {
      if (nombreMystere < saisie) {
        printf("\n C'est moins !\n");
      }
    }
  } while (saisie != nombreMystere);
  // Fin de partie
  printf (" Bravo, vous avez trouve le nombre mystere !!!\n");

  // Fin de programme
  printf("\n That's all folks\n");
  return 0;
}
