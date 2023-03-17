# Atelier authentication

## Consignes - Instructions

- Sur la base des sessions que nous venons de découvrir, tenter de réaliser un système d'authentification utilisant PDO + les sessions

- Vous aurez dans votre projet une page index.php, login.php et admin.php. Il faudra que la page admin.php soit inaccessible aux utilisateurs non authentifiés

- Pour s'authentifier, il faudra donc qu'on passe par login.php. Une fois le formulaire de login soumis, on vérifiera auprès de la base de données si le login et le mot de passe sont corrects (on verra après pour le chiffrement du mot de passe)

- Si tout est ok, alors agir sur la session pour retenir, côté serveur, que l'utilisateur est bien connecté. Il pourra alors continuer de naviguer sur votre application, et accéder à la page admin.php sans problème

- Une fois connecté, on pourra également se déconnecter. Vous ajouterez alors une page logout.php qui sera chargée de détruire la session et de rediriger vers la page d'accueil

## Réalisation de l'exercice - completion of the exercice

### [FR]
Cet exercice a été donné par mon formateur PHP pour pratiquer un peu.

Il met en jeu différentes notions que nous avions explorés en PHP jusque là.

La réalisation a nécessité environ 3h - from scratch.

La base de données est uniquement locale (gérée avec PHPMyAdmin).

Le fichier de config est exclu du versionning via un .gitignore.

Il y a de la place pour des améliorations, qui viendront peut-être.

### [EN]

This exercise was given by my PHP teacher to practice.

It's simple but uses a few notions we've encountered earlier.

It took me about 3hrs to do it from scratch.

The database is only local (handeln with phpMyAdmin).

The configuration file is excluded from versioning by a .gitignore.

There's still of lot of room for improvements, I have a few ideas already.