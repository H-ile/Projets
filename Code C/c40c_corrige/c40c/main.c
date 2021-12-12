// c40c
// Relev� de temp�ratures - saisie et affichage
#include <stdio.h>
#include <stdlib.h>
#include <math.h>
#include <locale.h>

// Fonction d'affichage du contenu du tableau
void afficher(int tab[], int max) {
  int i=0;
  printf("\n -> Affichage du contenu du tableau\n\n");
  for (i=0; i<=max; i++) {
    printf(" tab[%d]=%d\n",i,tab[i]);
  }
}

int main() {

  // Variables(s)
  int i=-1;           // Indice de parcours
  int imax=0;         // Indice maximum
  int t=0;            // Temp�rature
  int tableau[1000];  // Tableau des temp�ratures

  setlocale(LC_ALL,""); // Affichage des accents dans la console Windows (ajouter locale.h)

  // Traitement(s)
  printf("\n -> c40c : relev� de temp�ratures - saisie et affichage\n\n");


  // Premi�re saisie
  printf("\n Entrez une temp�rature (-1 pour arreter) : ");
  scanf("%d",&t);
  while (t!=-1) {
    // Enregistrement dans le tableau
    i++;
    tableau[i]=t;
    imax=i;

    // Affichage du tableau
    // afficher(tableau,imax);

    // Nouvelle saisie
    printf("\n Entrez une temp�rature (-1 pour arreter) : ");
    scanf("%d",&t);
  }

  // Affichage du tableau
  afficher(tableau,imax);

  // Fin
  printf("\n\n That's all folks\n");
  return 0;
}
