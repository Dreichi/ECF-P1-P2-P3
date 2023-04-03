<?php

$dsn = "mysql:host=localhost;dbname=nom_de_la_base_de_donnees";
$user = "nom_d'utilisateur";
$pass = "mot_de_passe";
$db = new PDO($dsn, $user, $pass);

// Requête 1 : la liste complète de tous les utilisateurs, triée par ordre alphabétique d'email
$sql1 = "SELECT * FROM `user` ORDER BY `email` ASC";
$stmt1 = $db->query($sql1);
$result1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);

// Requête 2 : les données de l'utilisateur dont l'id est 1
$sql2 = "SELECT * FROM `user` WHERE `id` = 1";
$stmt2 = $db->query($sql2);
$result2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

// Requête 3 : la liste des utilisateurs dont l'attribut `roles` contient le mot clé `ROLE_USER`, triée par ordre alphabétique d'email
$sql3 = "SELECT * FROM `user` WHERE `roles` LIKE '%ROLE_USER%' ORDER BY `email` ASC";
$stmt3 = $db->query($sql3);
$result3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);

// Affichage des résultats
print_r($result1);
print_r($result2);
print_r($result3);
