<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Carte Postale</title>
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="http://localhost/cours_php/OrelMas.github.io/style/cartePostale.css">
    
    
</head>
<body>
    <div class="carte">
        <div class="texte">
            <p> Je fais mon texte que je veux montrer sur ma carte postale de la Parisienne. 
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque ducimus esse, 
        consequuntur similique porro inventore doloremque facilis consequatur iusto ratione ullam natus
        eos iste obcaecati ab, mollitia et, molestias corporis.</p>
        </div>
        <div class="timbre">
            <img src="http://localhost/cours_php/OrelMas.github.io/img/timbre.png" alt="Timbre">
        </div>
        <img src="http://localhost/cours_php/OrelMas.github.io/img/tampon.png" alt="Tampon">
        <p class="tampon">
            <!-- <script>
                var date = new Date; 
                document.write(`${date.getDate()}`, `/`, `${date.getMonth()}`, '/', `${date.getFullYear()}` )
            </script> -->
            <?php echo date('d/m/y'); ?>
        </p>
        <img src="http://localhost/cours_php/OrelMas.github.io/img/obliteration.png" alt="Obliteration">
        <div class="separateur"></div>
        <div class="information">
            <p>Jean-Philippe SMET</p>
            <p>Cimetière de Lorient</p>
            <p>Saint-Barthélémy</p>
            <p>France</p>
        </div>
        <address class="copyright">&copy; | La carte Parisienne Tel : <a href="#">03.82.47.10.53</a></address>
        </div>



</body>
</html>