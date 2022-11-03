<?php
use App\Globals\Globals;

$globals = new Globals;
$session = $globals->getSESSION();
session_start();
try {
    header('Location: ../../index.php');
    $dbLink = new PDO('mysql:host=localhost:3306;dbname=galerie_photo', 'root', '');
//create users database

$hash =  password_hash($session['password'], PASSWORD_DEFAULT);
$data = [
    'prenom' => $session['prenom'],
    'nom' => $session['nom'],
    'email' => $session['email'],
    'rank' => $session['rank'],
    'password' => $hash,
];
    $sql = "INSERT INTO users (firstname, lastname, email, rank, password) VALUES (:prenom, :nom, :email ,:rank, :password)";
    $dbLink->prepare($sql)->execute($data);
} catch (Exception $e) {
    die('Erreur :' . $e->getMessage());
}
