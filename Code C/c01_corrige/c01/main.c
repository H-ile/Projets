// c01
// Boucle de saisie d'une cha�ne de caract�res
#include <stdio.h>
#include <stdlib.h>

int main() {

  // Variables(s)
  char prenom[100]; // Ici mon pr�nom

  // Traitements
  do {
    // Saisie du pr�nom
    fflush(stdin);  // Vide le buffer du clavier
    printf("Tapez votre prenom : ");
    fgets(prenom,100,stdin);
    // Affiche le pr�nom
    printf("Bonjour %s",prenom);
  } while (prenom[0] != '\n');  // Cha�ne vide ?

  // Fin
  return 0;
}
