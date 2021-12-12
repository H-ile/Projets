//
// c14
// conversion degrés Celsius/Farhenheit et vice versa (switch)
#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int main() {

  // Variables(s)
  double c = 0;
  double f = 0;
  int choix=0;
  int isOK = 0; // Indique si le choix est correct

  // Traitement(s)
  // Choix du sens de conversion
  printf("1 : celsius -> Farhenheit\n");
  printf("2 : Farhenheit -> Celsius\n");
  printf("Choisissez un sens : ");
  scanf("%d",&choix);


  // Saisie et conversion
  isOK=1;
  switch(choix) {
  case 1 :
    printf("Entrez une temperature (Celsius) : ");
    scanf("%lf",&c);
    f = ((c*9)/5)+32;
    break;
  case 2 :
    printf("Entrez une temperature (Farhenheit) : ");
    scanf("%lf",&f);
    c = (f - 32)/1.8;
    break;
  default:
    printf("- Erreur, votre choix n'est pas correct -\n");
    isOK = 0;
  }

  if (isOK) {
    // Affichage des résultats
    printf(" --- Resultats ---\n");
    printf("Temperature (C) :  %.2f\n",c);
    printf("Temperature (F) :  %.2f\n",f);
  }

  // Fin
  printf("\nThat's all folks\n");
  return 0;
}
