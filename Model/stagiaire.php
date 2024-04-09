<?php
    
    function database_connection(){
        $pdo = new PDO('mysql:dbname=intern;host=localhost','root','');
        return $pdo;
    }

    function latest(){
        $pdo = database_connection();
        $stagiaires = $pdo->query('SELECT * FROM stagiaire')->fetchAll(PDO::FETCH_OBJ);
        return $stagiaires;
    }

    function create(){
        extract(($_POST)).
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $age=$_POST['age'];
        $login=$_POST['login'];
        $password=$_POST['password'];
        $pdo = database_connection();
        $sqlState=$pdo->prepare("INSERT INTO stagiaire VALUES(null,?,?,?,?,?)");
        return $sqlState->execute([$nom,$prenom,$age,$login,$password]);
    }

    function edit($id, $nom, $prenom, $age, $login, $password) {
        $pdo = database_connection();
        $sqlState = $pdo->prepare("UPDATE stagiaire 
            SET nom = ?,
                prenom = ?,
                age = ?,
                login = ?,
                password = ?
            WHERE id = ?
        ");
        return $sqlState->execute([$nom, $prenom, $age, $login, $password, $id]);
    }
        
    function destroy($id){
        $pdo = database_connection();
        $sqlState = $pdo->prepare("DELETE FROM stagiaire WHERE id=?");
        return $sqlState->execute([$id]);
    }

    function view($id){
        $pdo = database_connection();
        $sqlState = $pdo->prepare("SELECT * FROM stagiaire WHERE id=?");
        $sqlState->execute([$id]);
        return $sqlState->fetch(PDO::FETCH_OBJ);
    }
?>