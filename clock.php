<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hologe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 

<p id="minuteur">00:00:00</p>
<form action="" method="post"></form>

<label for ="heure">Heure :</label>
<input type="number" name="heure" id="heure">

<label for ="minute">Minute :</label>
<input type="number" name="minute" id="minute">


<label for ="seconde">Seconde :</label>
<input type="number" name="seconde" id="seconde">

<input type="submit" value="Régler">

</form>

<?php

   

    echo '<script>

    var heure = '.(!empty($_POST["heure"]) ? $_POST ["heure"] : '0') .'
    var minute = '.(!empty($_POST["minute"]) ? $_POST ["minute"] : '0') .'
    var seconde = '.(!empty($_POST["seconde"]) ? $_POST ["seconde"] : '15') .'
    setInterval(function() {
        document.getElementById("minuteur").innerHTML=
        `${(heure < 10 ? "0" : "" )+ heure}:
         ${(minute < 10 ? "0" : "" )+ minute }:
         ${(seconde < 10 ? "0" : "" )+ seconde}`
        if (seconde <= 0)return
            seconde--
        if (seconde == 0)
            if (minute > 0) {
                seconde = 59
                minute--
            }   else{
                    if(heure > 0)   {
                        heure--
                        minute = 59
                        seconde = 59
                    }
                }

            } ,1000)
       

</script>'

?>



<!-- Faites un minuteur numérique 
 On doit pouvoir changer le temps qu'il dure avec un formulaire-->   

</body>
</html>