// c40b
// Relev� de temp�ratures - recherche
#include <stdio.h>
#include <stdlib.h>
#include <math.h>
#include <locale.h>

int main() {

  // Variables(s)
  int i=0;           // Indice de parcours
  int t=0;           // Temp�rature
  int trouve=0;      // Bool�en indiquant si on a trouv� la temp�rature
  int tableau[10]= {12,13,15,18,21,22,21,18,17,15};  // Tableau des temp�ratures

  setlocale(LC_ALL,""); // Affichage des accents dans la console Windows (ajouter locale.h)

  // Traitement(s)
  printf("\n -> c40b : relev� de temp�ratures - recherche\n\n");


  // Premi�re saisie
  printf("\n Entrez une temp�rature (-1 pour arr�ter) : ");
  scanf("%d",&t);
  while (t!=-1) {
    // Boucle de recherche de la temp�rature saisie
    trouve=0;
    for (i=0; i<10; i++) {
      if (tableau[i]==t) {
        trouve=1;
      }
    }
    // Affichage du contenu du tableau
    printf("\n -> Affichage du contenu du tableau\n\n");
    for (i=0; i<10; i++) {
      printf(" tableau[%d]=%d\n",i,tableau[i]);
    }
    // Affiche le r�sultat de la recherche
    if (trouve==1) {
      printf("\n  %d trouv� dans le tableau\n",t);
    } else {
      printf("\n  %d pas trouv� dans le tableau\n",t);
    }

    // Nouvelle saisie
    printf("\n Entrez une temp�rature (-1 pour arr�ter) : ");
    scanf("%d",&t);
  }

  // Fin
  printf("\n\n That's all folks\n");
  return 0;
}
