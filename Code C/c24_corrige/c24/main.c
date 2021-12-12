//
// c24
// Nombre mystère
#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main() {

  // Variables(s)
  int nombreMystere = 0;  //Le nombre à deviner
  int saisie = 0;         // Le nombre saisi
  const int MIN = 1;      // La borne inférieure du nombre  à deviner
  const int MAX = 100;   // La borne supérieure du nombre  à deviner

  // Traitement(s)

  // Génération du nombre aléatoire
  srand(time(NULL));  // Initialise le générateur (une seule fois par exécution du programme)
  nombreMystere = (rand() % (MAX - MIN + 1)) + MIN;  // Génère un nouveau nombre (autant de fois que l'on veut)

  /* La boucle du programme. Elle se répète tant que l'utilisateur n'a pas trouvé le nombre mystère */
  do {
    // On demande le nombre
    printf("\n Quel est le nombre (%d..%d) ? ",MIN,MAX);
    scanf("%d", &saisie);

    // On compare le nombre entré avec le nombre mystère
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
