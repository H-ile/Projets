# Réponses de l'exercice ph25b

## Etape 3 : vérification du cookie

Regardez dans votre navigateur le cookie (Inspecteur de stockage sur Firefox).

1. Quel est son nom ?

   * "compteurs"

1. Quel est son domaine ?

   * "localhost"

1. Quelle est son contenu ? Est-il cohérent avec le nombre de visites ?

   * "3%2C10%2C8". Oui on retrouve les compteurs (2, 10 et 8).

1. Comment sont stockés les différents compteurs ?

   * Ils sont séparés par "%2c"

1. Que signifie `%2c` dans le cookie ?

   * C'est le code hexadécimal ASCII de la virgule. Voir [http://www.asciitable.com/](http://www.asciitable.com/). Les compteurs sont donc séparés par des virgules.

## Question

1. Que signifie "sérialiser des données" ?  Pourquoi le fait-on pour les cookies ?

La sérialisation consiste à transformer des données de manière à pouvoir les enregistrer.

Dans le cas des cookies, comme ils ne peuvent pas stocker autre chose que des chaînes de caractères, on "sérialise" le tableau avec la fonction `implode()`. Le séparateur choisi est la virgule.

Concrétement, on écrit les compteurs à la suite les uns des autres avec une virgule comme séparateur.

*Exemple de sérialisation en PHP pour un cookie*

```php
setcookie("compteurs",implode(',',$compteurs)); // Convertit le tableau en chaîne  
```

*Institut Limayrac - J.F. Ramiara - Tous droits réservés - 2019*