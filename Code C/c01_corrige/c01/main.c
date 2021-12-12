// c01
// Boucle de saisie d'une chaîne de caractères
#include <stdio.h>
#include <stdlib.h>

int main() {

  // Variables(s)
  char prenom[100]; // Ici mon prénom

  // Traitements
  do {
    // Saisie du prénom
    fflush(stdin);  // Vide le buffer du clavier
    printf("Tapez votre prenom : ");
    fgets(prenom,100,stdin);
    // Affiche le prénom
    printf("Bonjour %s",prenom);
  } while (prenom[0] != '\n');  // Chaîne vide ?

  // Fin
  return 0;
}
