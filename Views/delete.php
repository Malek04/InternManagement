<?php
    
    include_once 'include/nav.php';
    $title = "supprimer stagiaire";
    ob_start();
?>
    <p>Voulez vous vraiment supprimer le stagiaire</p>
    <a class="btn btn-danger" href="index.php?action=destroy&id=<?=$id?>">Valider la suppression</a>
    <a class="btn btn-warning" href="index.php?action=list">Annuler la suppression</a>
<?php
    $content = ob_get_clean();
    require_once "Views/layout.php";
?>  