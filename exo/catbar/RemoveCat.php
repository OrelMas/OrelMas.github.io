
<?php
require_once('../inc/dbCat.php');

if (isset($_POST) && !empty($_POST)) {
    ###### Modifié les chat ########
    if (!empty($_POST['véto'])) {   
        # Je séléctionne les chats qui ont l'id qui ce trouve dans veto 
        $select = $bdd->prepare('SELECT * FROM cat WHERE id=?');
        $select->execute(array(
            $_POST['véto']
        ));
        $select = $select->fetch(PDO::FETCH_ASSOC);
        # Je récupère la ligne qui à été séléctionnée
        $update = $bdd->prepare('UPDATE cat SET véto=? WHERE id=?');
        $update->execute(array(
            !$select['véto'], # La colonne que j'ai récupèré de la base de donnée je lui dit différent de elle même (0 devient 1, 1 devient 0)
            $_POST['véto']
        ));

    } elseif (!empty($_POST['transfert'])) {
        # Pareil que aux dessus juste avec transfer au lieu de veto
        $select = $bdd->prepare('SELECT * FROM cat WHERE id=?');
        $select->execute(array(
            $_POST['transfert']
        ));
        $select = $select->fetch(PDO::FETCH_ASSOC);

        $update = $bdd->prepare('UPDATE cat SET transfert=? WHERE id=?');
        $update->execute(array(
            !$select['transfert'],
            $_POST['transfert']
        ));

    } elseif (!empty($_POST['delete'])) {
        # Ici je supprime la ligne de ma base de donnée en utilisant id du chat
        $delete = $bdd->prepare('DELETE FROM cat WHERE id=?');
        $delete->execute(array(
            $_POST['delete']
        ));

    }






    header('Location ../paneladmin.php');
}