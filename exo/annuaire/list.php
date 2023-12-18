<?php
    require_once('../../function/db.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../scripts//jquery-3.7.1.min.js"></script>
    <title>Liste Annuaire</title>
    <style>
  th {
            padding: 10px;
            background-color: burlywood;
        } /* met la couleur dans les entetes tableaux th*/ 

td {
            padding: 10px;
            background-color: gray;
        } /* Remplissage du fond du restant du tableau td*/ 

    </style>
</head>
<body>
    <!-- Il devra avoir un tableau HTML qui récupère toute les lignes de la 
    base de donnée annuaire 

    On devra avoir la possibilité de modifier certaine ligne ou supprimé : method post-->
    <form action="" method="post">
<!--Faire 1 tableau th titre en gras-->
    <table> 
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Téléphone</th>
            <th>Profession</th>
            <th>Ville</th>
            <th>Code Postale</th>
            <th>Adresse</th>
            <th>Date de naissance</th>
            <th>Sexe</th>
            <th>Description</th> 
            <th>Actions</th>
</tr>

<?php

    $annuaire = $bdd->prepare('SELECT * FROM annuaire');
    $annuaire->execute();
    $annuaire = $annuaire->fetchAll(PDO::FETCH_CLASS);  # fetch class pr afficher proprement
    # Si le fetch est récupèrer en mode PDO;;FETCH_CLASS la variable qu'il nous renvoie est bien un
    # Tableau mais pas de type Array mais un type Object
    # Donc pour récupèrer les valeur qu'il ce trouve dans ce type de Tableau ce n'est plus 
    # $Tableau['index'] mais plutôt $Tableau->index
    if (!empty($annuaire)) {
        # Les valeurs de select se mettent dans la variable ligne
        # annuaire :
        #   * Première Ligne :
        #       * Première Colonne
        #       * Deuxième Colonne  
        #   * Deuxième Ligne :
        #       * Première Colonne
        #       * Deuxième Colonne
        #   * Troisième Ligne :
        #       * Première Colonne
        #       * Deuxième Colonne

        


        foreach ($annuaire as $ligne) { // foreach recupere tout ce qui se trouve dans la base de donnée et tourne a chaque ligne                               
          echo '<tr>';
                // echo '<pre>';
                // var_dump($ligne);
                // echo '</pre>';

                // $id = $ligne['id_'];
                // $nom = $ligne['nom'];
                // $prenom = $ligne['prenom'];
                // $id = $ligne['id_'];
                // $nom = $ligne['nom'];
                // $prenom = $ligne['prenom'];
                // $id = $ligne['id_'];
                // $nom = $ligne['nom'];
                // $prenom = $ligne['prenom'];
                // $prenom = $ligne['prenom'];


        foreach($ligne as $colonne) { 
           echo "<td>$colonne</td>";
        }
        echo '<td> 
            <button name="remove" value="' . $ligne->id_annuaire . '">Supprimer</button>
            <button name="modify" value="' . $ligne->id_annuaire . '">Modifier</button> 
            </td>';                
        # Comme notre tableau est en Object on fait comme ceci sinon o n aurai fait
        // echo '<td> 
        //     <button name="remove" value="' . $ligne['id_annuaire'] . '">Supprimer</button>
        //     <button name="modify" value="' . $ligne['id_annuaire'] . '">Modifier</button> 
        //     </td>';   

        echo '</tr>';
    }
        if (isset($_POST) && !empty($_POST)) {
            if (!empty($_POST['remove'])) { // si remove est pas vide, s'il est vide modifier
                $delete = $bdd->prepare('DELETE FROM annuaire WHERE id_annuaire=?');
                $delete->execute(array(     // je veux l executer dans 1 tableau type array
                    $_POST['remove']
          ));
                 header('Location: list.php');
            }  elseif (!empty($_POST['modify'])) {
                header("Location: update.php?id_annuaire=" . $_POST['modify']);
            }
        } 

    }



?>

</table>
<div id="hidden">
            <fieldset>
                <legend>Informations</legend>
                <pre>
                    <label for="nom">Nom *</label>
                    <input type="text" name="nom" id="nom" maxlength="30" required>
                    <label for="prenom">Prénom *</label>
                    <input type="text" name="prenom" id="prenom" maxlength="30" required>
                    <label for="prenom">Telephone *</label>
                    <input type="tel" name="tel" id="tel" minlength="10" maxlength="10" required>
                    <label for="nom">Profession</label>
                    <input type="text" name="profession" id="profession" maxlength="30">
                    <label for="nom">Ville</label>
                    <input type="text" name="ville" id="ville" maxlength="30">
                    <label for="postale">Code Postal</label>
                    <input type="tel" name="postale" id="postale" minlength="5" maxlength="5" pattern="[0-9]{5}">
                    <label for="adresse">Adresse</label>
                    <textarea name="adresse" id="adresse" cols="30" rows="2" maxlength="30"></textarea>
                    <label for="nom">Date de Naissance</label>
                    <input type="date" name="date" id="date">
                    <label for="sexe">Sexe</label>
                    <label for="homme">Homme: </label> <input type="radio" name="sexe" id="homme" value="m" required>  <label for="femme">Femme: </label><input type="radio" name="sexe" id="femme" value="f" required>
                    <label for="description">Description</label>
                    <textarea name="desc" id="desc" cols="30" rows="5"></textarea>
                    <input type="submit" value="Enregistrement">
                </pre>
            </fieldset>
        </div>
</form>

</body>
</html>