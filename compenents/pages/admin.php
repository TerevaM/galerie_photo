
<?php
use App\Globals\Globals;
require_once "../comp_base/comp_base.php";
require_once "../../vendor/autoload.php";
start_page('Page admin','../../utils/css/');
navbar('../../', '');

$globals = new Globals;
$session = $globals->getSESSION();

//verif si l'utilisateur est bien admin
if($session['rank'] !== 'admin'){
    header('Location: ../../index.php');
}
?>

<h2>Bienvenue admin</h2>

<section>
    <h4>
        Nombre de likes :
    </h4>
    <h4>
        Nombre de commentaires :
    </h4>
    <h4>
        Nombre d'inscrits :
    </h4>
</section>

<form action="test.php" method="post" enctype="multipart/form-data">
<h1>
    Télécharger une image sur le site
</h1>
<input type="file"name="image"
       accept="image/png, image/jpeg">

<button type="submit">Envoyer</button>
</form>