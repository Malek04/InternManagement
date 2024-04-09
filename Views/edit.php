<?php
    $title = "modifier stagiaire";
    ob_start();
    include_once 'include/nav.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-2">
        <form method="POST" action="index.php?action=update">
        <div class="mb-3">
            <input type="hidden" class="form-control" name="id" id="id" value="<?=$stagiaire->id?>">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom" id="nom" value="<?=$stagiaire->nom?>">
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prenom</label>
            <input type="text" class="form-control" name="prenom" id="prenom" value="<?=$stagiaire->prenom?>">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" name="age" id="age" value="<?=$stagiaire->age?>">
        </div>
        <div class="mb-3">
            <label for="login" class="form-label">Login</label>
            <input type="text" class="form-control" name="login" id="login" value="<?=$stagiaire->login?>">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" name="password" id="password" value="<?=$stagiaire->password?>">
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</body>
</html>
