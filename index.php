<?php
// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Enregistrer les erreurs dans un fichier de log
ini_set('log_errors', 1);
// Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');

echo '--- Challenge 7 --- ';

include_once('Connexion.class.php');

$dsn = 'mysql:host=localhost;dbname=dmdbtest;charset=utf8';
$user = 'adminsql';
$password = 'mdpsql';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

$db = new PDO($dsn, $user, $password, $options);
$connect = new Connexion($db);

echo 'Connect BDD OK ; ';

$param = 'SELECT COUNT(ID) FROM jeux_video';
$nblignes = $connect->countTable($param);

echo 'Le nombre de lignes est : ' . $nblignes;
?>
