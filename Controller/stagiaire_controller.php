<?php
    require_once'Model/stagiaire.php';

    function indexAction(){
        $stagiaires=latest();
        require_once 'Views/liste_stagiaire.php';
    }

    function createAction(){
        require_once 'Views/create.php';
    }

    function storeAction(){
        create();
        header('location:index.php?action=list');
    }

    function editAction(){
        $id= $_GET['id'];
        $stagiaire = view($id);
        require_once 'Views/edit.php';
    }

    function updateAction(){
        extract($_POST);
        edit($id,$nom,$prenom,$age,$login,$password);
        header('location:index.php?action=list');
    }

    function deleteAction(){
        $id= $_GET['id'];
        require_once 'Views/delete.php';
    }

    function destroyAction(){
        $id = $_GET['id'];
        destroy($id);
        header('location:index.php?action=list');
    }

?>