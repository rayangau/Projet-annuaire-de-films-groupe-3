Base du projet

Projet annuaire de films

   Le but de ce projet est de créer un annuaire de film de type "allociné"

   ce projet se découpe en deux parties.

   

   La premiere:

   

   A)Préparation de la données

          

       -désigner un master sur github qui créera un csv avec,

               -le titre

               -la description

               -l'année de sortie

               -le genre

               -le réalisateur

       -chacun doit faire Forker le projet et ajouter 3 films avec une pull request

        -Insérer le csv dans Mysql (ce qui permet de voir ce qu'est un csv)

        -Etude de la Table films (constat qu'un film peut prendre plusieurs genres)

        -Création de la table de liaison qui permet de de lier films à genres

       

B)Développement du site MVC

       

        -Creation du .htaccess qui redirige vers l'index.php

        -Création d'un routeur avec $_SERVER['REQUEST_URI'] et un switch

        -Création du models movies.php qui contiendrait toutes fonctions des requêtes sur la table films

        -Creation des views Responsive avec design : "material Design".


