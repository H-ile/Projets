// c25
// Saisie de notes sans tableau
#include <stdio.h>
#include <stdlib.h>
#include <math.h>
#include <locale.h>

int main() {

  // Variables(s)
  double note=0;
  double nombre=0;
  double somme=0;
  double mini=0;
  double maxi=0;
  double moyenne=0;
  int comptageMini=0;
  int comptageMaxi=0;

  // Traitement(s)

  setlocale(LC_ALL,""); // Affichage des accents dans la console Windows (ajouter locale.h)

  // Premi�re saisie
  printf("\n Entrez une note de 0 � 20 (-1 pour arr�ter) : ");
  scanf("%lf",&note);
  mini=note;
  maxi=note;

  // Boucle de saisie
  while (note !=-1) {
    // D�nombrement et somme des notes
    nombre++;
    // Somme
    somme = somme+note;
    // Maj des minimums
    if (note < mini) {
      mini = note;
      comptageMini=0;
    }
    // Maj des maximums
    if (note > maxi) {
      maxi = note;
      comptageMaxi=0;
    }
    // Comptage des minimums et maximums
    if (note==mini) {
      comptageMini++;
    }
    if (note==maxi) {
      comptageMaxi++;
    }
    // Saisie du nombre
    printf("\n Entrez une note de 0 � 20 (-1 pour arr�ter) : ");
    scanf("%lf",&note);
  }

  // Affichage des r�sultats
  printf("\n --- R�sultats ---\n");
  if (nombre!=0) {
    // Calcul de la moyenne
    moyenne = somme/nombre;
    // Affichage des r�sultats
    printf(" Nombre  : %.2lf \n",nombre);
    printf(" Moyenne : %.2lf \n",moyenne);
    printf(" Note minimum %.2lf compt�e %d fois\n",mini,comptageMini);
    printf(" Note maximum %.2lf compt�e %d fois\n",maxi,comptageMaxi);
  } else {
    printf("\nPas de note !!!\n");
  }

  // Fin
  printf("\n That's all folks\n");
  return 0;
}
