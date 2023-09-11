<?php
// Quand le fichier est lu on veux que le fichier db sois lu lui aussi
require_once('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cours PHP</title>
    </head>
<body>
<?php
   
    echo "<p class ='test'>Bonjour<p>"; //echo est la fonction afficher qlq chose
    // J'affiche Bonjour sur ma page dans une balise p avec comme
    // classe 'test'
    echo "<p>" . "Bonjour" . "<p>"; // Les points remplacent les +
    $cookie = 10; // variable cookie qui contient le nombre 10
    // Je définis ma variable avec $ puis
    // je lui donne le nom cookie
    // et je lui rentre la valeur 10
    $phrase = "Je suis une phrase"; // string 
    $nombre = 1.4; // Float
    $choix = true; // Booléens
    /*
    Integer => Nombre Entier comme 50, 47, 874698
    Float = Nombre à virgule comme 74.58, 4.202848431, 1.0004
    String => Chaîne de caractères comme 
        "Bonjour"
        "Je code sur un ordinateur"
    Booléens =< true (vrai) ou false (faux)
    Array => 
        Indexés
        Associatif
    Null => NULL     
    */
    echo $phrase;
    echo $titre;

    // Les conditions

    $condition = true;
    
    if ($condition) {
        echo " <br>Je passe ici donc c'est vrai"; // Pour passer à la ligne suivante <br> à l' intérieur
    } else {
        echo " Je passe par là donc c'est faux";
    }
   
    $code = 4227;
        // == Ca prend en compte que la variable sois égale
        // === Ca prend en compte que la variable sois égale
        // et du même type
    if ($code == '4227') {
        
    echo " Le code est correct";
    } else {
    echo " Le code n'est pas correct";
    }

    $couleur = "gris";
   
    if ($couleur == "rouge") {
        echo "<p> J'ai une autruche de couleur rouge</p>";
    }   else if ($couleur == "bleu") { // Sinon Si
        echo " <p> J'ai une autruche de couleur bleue</p>";
    }   else { // Sinon
        echo"<p> J'ai pas d'autruche</p>";
    }
    
    // Ecriture Ternaire

    $a = 15;
    $un = $a > 11 ? 1 : 0;
    // Si $a supérieur à 11 alors $un est égal à 1 sinon il  
    // sera égal à 0 
  
    // Les Switch 

    $taille = 187;

    switch ($tailles) {
        case 120:
          echo "<p>Tu es atteint de nanisme.</p>";
            break;
        case 150:
            echo "<p>Tu es très petit(e)</p>";
            break;
            echo "<p<Tu a une taille convenable</p>";
            break;
        case 200:
            echo "<p>Bonjour Monsieur !</p>";
            break;
        default;
            echo "<p>Tu n'éxiste pas !!</p>";
            break;    
    }
    
    
    // Les Tableaux
    $tableau = [
        42, // 0
        78, // 1
        48, // 2
        1486658, // 3
        "Une Autruche" // 4
    ];
    echo $tableau[4] . "<br>";

    echo '<pre>';
    var_dump($tableau);
    echo '</pre>';
    
    $exo = [4, 12, 78, 98, 65];
    $resultat = 0;
    $resultat = $exo[2] - ($exo[0] * $exo[1]);
    $resultat = ($exo[3] - $exo[4])- ($exo[1] / $exo[0]);

    // La valeur de $resultat doit être égale à 30 en utilisant
    // que les nombres qui se trouvent dans le tableau exo
            
    // Tableaux Associatifs

    $tab_assoc = [
        "voiture" => "volkswagen", // Type string
        "animal" => "Perroquet", // Type string
        "chiffre" => 10, // Type Integer
        "calvitie" => true, // Type Boolean
        "legumes" => null // Type null
    ];
    // J'ai fait un tableau avec 5 valeurs qui ont un index
    // que j 'ai défini moi-même
    // voiture est un index et volkswagen est sa valeur
    // animal est un index et Perroquet est sa valeur
    // Ainsi de suite

    $tab_assoc['bras'] = false;
    // J 'ai défini un nouvel index bras avec comme valeur faux

    echo "<pre>"; var_dump($stab_assoc); echo "</pre>";

    // Les boucles

    // La boucle while

    while(false) {
        $o++;
        echo "<p> Je passe dans la boucle while</p>";
        if ($o == 10) {
        break;
        // Sert à casser la boucle pour pouvoir l'arrêter
        }
    }

    // La boucle do-while

    do {
        echo 'Je passe dans la boucle do-while';
    } while (false);

    // La boucle for

    for ($i=0; $i < 10; $i++) {
        echo "<br>Je suis passer " . $i+1 . "fois dans la boucle for";
        
    }

/* 
    Créer un tableau Associatif en mettant une 
    index bras de type booléen et une index 
    jambe qui va être un integer
    */

    /* 
    Si il n'a pas de jambe ni de bras
        Tu es un e-tronc !
    Sinon si il n'a pas de bras
        Pas de bras pas de chocolat
    Sinon
        Tu es basique donc tu es nul
    */
    

    /*$tab_assoc ['ni bras ni jambe'] = false;
    $tab_assoc ['bras'] = 0;
    $tab_assoc ['bras + jambes'] = true;


    if ($condition == "false") {
        echo "<p> Tu es un tronc ! </p>";
    }   else if ($condition == 0) {                  // Sinon Si
        echo " <p> Pas de bras pas de chocolat</p>";
    }   else          // Sinon
        echo"<p> Tu es basique donc tu es nul</p>";
    */
// Correction
if ($tab_exo['jambe'] == 0 && !$tab_exo['bras'])
        echo " <p>Tu es un tronc ! </p>";
    else if($tab_exo['bras'])
        echo " <p>Pas de bras pas de chocolat! </p>";
    else
    echo " <p> Tu es basique donc tu es nul</p> ! ";
    $tab_exo = [
        "bras" => false, // En changeant par true
        "jambe"=> 0 // En changeant par 2
    ];
// Le point d'exclamation (!) veut dire différent de
// Exemple : si bras est égal à vrai et que je fait
// différent de il sera égal à faux

    

?>

<form action="validation" method="post">

<pre>
        <h1>Register</h1>
        <label for="firstname">First name: </label>
        <br>
        <input type="text" name="firstname" id="firstname">
        <br>
        <label for="lastname">Last name : </label>
        <input type="text" name="lastname" id="lastname">
        <br>
        <label for="e-mail">Email : </label>
        <br>
        <input type="e-mail" name="email" id="e-mail">
        <br>
        <label for="password">Password : </label>
        <input type="password"name="password" id="password">
        <br>   
        <label for="passwordconfirm ">Confirm password : </label>
        <input type="password" name="password" id="password">
    </pre>
        <label for="gender">Gender:</label for>
       <br>
        <input type="radio" name="gender" id="male" value="male">        
        <label for="male">Male</label>
        <input type="radio" name="gender" id="female" value="female">
        <label for="female">Female</label>       
        <input type="radio" name="gender" id="others" value="others">
        <label for="others">Other</label>       
<br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Si method post est rentré dans le formulaire il faut utiliser
    // $_POST
    // Sinon si la method get est rentrée dans le formulaire il faut utiliser
    // $_GET
    // La fonction isset sert à regarder si la variable qui lui est donnée est 
    // bien définie, dans ce cas elle regarde si la variable $_POST est définie
    
    
    // Je prepare ma commande
    $select =$bdd->prepare('SELECT * FROM utilisateur WHERE gender = ?;');
    // Je l'éxécute en lui donnant une valeur à la place des ?
    $select->execute(array("male"));
    // Je recupere tout ce que me renvoie ma commande
    $total = $select->fetchAll(PDO::FETCH_ASSOC);

    // Je l'affiche 
    echo'<pre>';
    var_dump($total);
    echo'<pre>';

    echo $total[2]['gender'];

?>
   
   <form action="" method="post">
    <fieldset>
   <label for="your name">Your name </label>
   <input type="text" name="your name" id="your name">

   <label for="e-mail">Your mail  </label>
   <input type="e-mail" name="e-mail" id="e-mail">

   <label for="text">Your message</label>
   <input type="text" name="your message" id="your message">

   <textarea name="message" placeholder="Je veux un message" id="message" cols="24" rows="8">
   </textarea>

   <label for="number"> Give me your number !</label>

   <input type="number" name="number" id="number">

    <input type="submit" value="Envoyer">
    </fieldset>
   </form>


   <?php
    if (isset($_POST) && !empty($_POST)) {
        settype($_POST['number'],'integer');
        $newmessage = $bdd->prepare('INSERT INTO messages(name,mail,message,number)VALUES(?, ?, ?, ?)');
        $newmessage->execute(array($_POST['name'], $_POST['mail'], $_POST['message'], $_POST['number']));
}
?>
</body>

</html>