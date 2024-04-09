<?php
    $title = "liste des stagiaire";
    ob_start();
?>  
<div class="container mt-2">
    <a href="index.php?action=create" class="btn btn-primary">Ajouter</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">nom</th>
                <th scope="col">prenom</th>
                <th scope="col">age</th>
                <th scope="col">login</th>
                <th scope="col">password</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($stagiaires as $stagiaire){
            ?>
            <tr>
                <td scope="row"><?=$stagiaire->id?></td>
                <td scope="row"><?=$stagiaire->nom?></td>
                <td scope="row"><?=$stagiaire->prenom?></td>
                <td scope="row"><?=$stagiaire->age?></td>
                <td scope="row"><?=$stagiaire->login?></td>
                <td scope="row"><?=$stagiaire->password?></td>
                <td scope="row">
                    <a href="index.php?action=edit&id=<?=$stagiaire->id?>" class="btn btn-success btn-sm">Modifier</a>
                    <a href="index.php?action=delete&id=<?=$stagiaire->id?>" class="btn btn-danger btn-sm">Supprimer</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php
    $content=ob_get_clean();
?>
<?php
    include_once 'Views/layout.php';
?>