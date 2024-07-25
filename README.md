#QUESTIONNAIRE

### 1. Qu'est-ce qu'un container de services ? Quel est son rôle ?
Un container de service est un outils de gestion des dépendances qui permet de géer l'instanciation et la configuration des services nécessaire au fonctionnement de l'application.

### 2. Quelle est la différence entre les commandes make:entity et make:user lorsqu'on utilise la console
Symfony ?
`make:entity` génére une entité standar pour la base de données, tandis que `make:user` génére une entié configurée pour gérer l'authetification utilisateur.

### 3. Quelle commande utiliser pour charger les fixtures dans la base de données ?
`php bin/console doctrine:fixtures:load` ou `php bin/conole d:f:l`.

### 4. Résumez de manière simple le fonctionnement du système de versions "Semver"
C'est un système de gestion des versions de logiciel basé sur des numéros de version majeurs, mineurs et de patch (MAJOR.MINOR.PATCH). Les changements majeurs augmentent le numéro majeur, les nouvelles fonctionnalités non breaking augmentent le numéro mineur, et les corrections de bugs augmentent le numéro de patch.

### 5. Qu'est-ce qu'un Repository ? A quoi sert-il ?
Un Repository est une classe qui gère la persistance des entités. Il fournit des méthodes pour interagir avec la base de données, telles que la recherche, l'insertion, la mise à jour et la suppression des données.

### 6. Quelle commande utiliser pour voir la liste des routes ?
`php bin/console debug:router`.

### 7. Dans un template Twig, quelle variable globale permet d'accéder à la requête courante, l'utilisateur
courant, etc...?
`app`.

### 8. Pour mettre à jour la structure de la base de données, quelles sont les 2 possibilités que nous avons
abordées en cours ?
- Utiliser les migrations `make:migration:migrate`
- Mettre à jour automatiquement `doctrine:schema --force`

### 9. Quelle commande permet de créer une classe de contrôleur ?
`php bin/console make:controller`.

### 10. Décrivez succintement l'outil Flex de Symfony
Symfony Flex est un outil qui simplifie la gestion des dépendances et la configuration des packages. Il permet d'ajouter des fonctionnalités à l'application via des recettes qui automatisent la configuration et l'installation des bundles et des packages.
