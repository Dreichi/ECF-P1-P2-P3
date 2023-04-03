<?php
$dsn = "mysql:host=localhost;dbname=nom_de_la_base_de_donnees";
$user = "nom_d'utilisateur";
$pass = "mot_de_passe";
$db = new PDO($dsn, $user, $pass);

// Requêtes de lecture des emprunts
$query1 = "SELECT * FROM emprunt ORDER BY date_emprunt DESC LIMIT 3";
$result1 = $db->query($query1);
$emprunts1 = $result1->fetchAll(PDO::FETCH_ASSOC);

$query2 = "SELECT * FROM emprunt WHERE id_emprunteur = 2 ORDER BY date_emprunt ASC";
$result2 = $db->query($query2);
$emprunts2 = $result2->fetchAll(PDO::FETCH_ASSOC);

$query3 = "SELECT * FROM emprunt WHERE id_livre = 3 ORDER BY date_emprunt DESC";
$result3 = $db->query($query3);
$emprunts3 = $result3->fetchAll(PDO::FETCH_ASSOC);

$query4 = "SELECT * FROM emprunt WHERE date_retour IS NULL ORDER BY date_emprunt ASC";
$result4 = $db->query($query4);
$emprunts4 = $result4->fetchAll(PDO::FETCH_ASSOC);

// Requêtes de création et de mise à jour des emprunts
$query5 = "INSERT INTO emprunt (date_emprunt, date_retour, id_emprunteur, id_livre)
           VALUES ('2020-12-01 16:00:00', NULL, 1, 1)";
$db->query($query5);

$query6 = "UPDATE emprunt SET date_retour = '2020-05-01 10:00:00' WHERE id_emprunt = 3";
$db->query($query6);
?>
