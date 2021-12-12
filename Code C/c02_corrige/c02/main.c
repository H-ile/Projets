// c02
// Saisie de 3 nombres
// Calcul de la somme et de la moyenne
#include <stdio.h>
#include <stdlib.h>

int main() {

  // Variables(s)
  double nb1=0;     // nombre 1
  double nb2=0;     // nombre 2
  double nb3=0;     // nombre 3
  double somme=0;   // somme
  double moyenne=0; // moyenne

  // Traitements

  // Saisie des nombres
  printf("Saisissez le nombre 1 : ");
  scanf("%lf",&nb1);
  printf("Saisissez le nombre 2 : ");
  scanf("%lf",&nb2);
  printf("Saisissez le nombre 3 : ");
  scanf("%lf",&nb3);

  // Calcul de la somme
  somme = nb1 + nb2 + nb3;
  // Calcul de la moyene
  moyenne = somme/3;

  // Affichage des résultats
  printf(" --- Resultats ---\n");
  printf("nb1 = %.2lf\n",nb1);
  printf("nb2 = %.2lf\n",nb2);
  printf("nb3 = %.2lf\n",nb3);
  printf("somme   = %.2lf\n",somme);
  printf("moyenne = %.2lf\n",moyenne);

  // Fin
  printf("That's all folks\n");
  return 0;
}
