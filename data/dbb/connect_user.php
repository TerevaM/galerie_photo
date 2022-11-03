<?php

use App\Globals\Globals;

require_once "./data-processing.php";
require_once "../../vendor/autoload.php";

$globals = new Globals;
$post = $globals->getPOST();
session_start();
foreach($tab_users as $value) {
    print_r( "hash compte user :");
    print_r( $value['password'] . '<br>');
    if(password_verify($post['password2'], $value['password']) && $post['email2'] == $value['email']){
        print_r( "Meme mot de passe<br>");
        $_SESSION['prenom'] = $value['firstname'];
        $_SESSION['nom'] = $value['lastname'];
        $_SESSION['email'] = $value['email'];
        $_SESSION['rank'] = $value['rank'];
        var_dump($_SESSION);
        header('Location: ../../index.php');
        break;
    }
    else {
        header('Location: ../../compenents/pages/user.php?error=1');
    }
    print_r( "boucle foreach<br>");
}
print_r( "php <br>");