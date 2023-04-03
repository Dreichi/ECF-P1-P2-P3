<?php

$dsn = "mysql:host=localhost;dbname=nom_de_la_base_de_donnees";
$user = "nom_d'utilisateur";
$pass = "mot_de_passe";
$db = new PDO($dsn, $user, $pass);

// Requête pour récupérer la liste complète des emprunteurs, triée par ordre alphabétique de nom et prénom
$query1 = "SELECT * FROM emprunteur ORDER BY nom, prenom;";
$stmt1 = $pdo->query($query1);
$result1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);

// Requête pour récupérer les données de l'emprunteur qui est relié au user dont l'id est 3
$query2 = "SELECT * FROM emprunteur WHERE user_id = 3;";
$stmt2 = $pdo->query($query2);
$result2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

// Requête pour récupérer la liste des emprunteurs dont le nom ou le prénom contient le mot clé 'foo', triée par ordre alphabétique de nom et prénom
$query3 = "SELECT * FROM emprunteur WHERE nom LIKE '%foo%' OR prenom LIKE '%foo%' ORDER BY nom, prenom;";
$stmt3 = $pdo->query($query3);
$result3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);

?>
