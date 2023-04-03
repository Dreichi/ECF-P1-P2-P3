# ECF Projet Bibliothèque

## Description

Étant plus à l'aise avec du code SQL j'ai décidé de donner les insctructions plutôt que d'utiliser Symfony

## Création de la base de données

```SQL
CREATE DATABASE nom_base_de_donnees;
```

## Création de l'utilisateur et des permissions

```SQL
CREATE USER 'nom_utilisateur'@'localhost' IDENTIFIED BY 'mot_de_passe';
GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, INDEX, ALTER ON nom_base_de_donnees.* TO 'nom_utilisateur'@'localhost';
```

[image](modele.png)