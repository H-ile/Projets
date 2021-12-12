# Réponses de l'exercice ph27b

## Etape 3 : vérification du cookie

Regardez dans votre navigateur le cookie (Inspecteur de stockage sur Firefox).

1. Quel est son nom ?

   * "PHPSESSID"

1. Quel est son domaine ?

   * "localhost"

1. Quel est son contenu ?

   * Il contient le numéro de session

1. Est ce qu'il contient le nombre de visites ? Si non, pourquoi ?

   * Non, le nombre de visites est stocké coté serveur dans le fichier de session. Parce que c'est le principe des sessions : le cookie ne contient qu'un identifiant qui permet de retrouver le fichier de session de chaque utilisateur

## Question

1. Quelles sont les principales différences entre le stockage en cookie et en session ?

* le cookie contient les données à stocker. Il n'accepte que des chaînes de caractères. Pour les tableaux, il faut les sérialiser avant.
* la session contient les données aussi mais coté serveur. Le cookie ne contient qu'un identifiant qui permet de retrouver le fichier de session. La session accepte aussi des formats complexes comme les tableaux.

*Institut Limayrac - J.F. Ramiara - Tous droits réservés - 2019*