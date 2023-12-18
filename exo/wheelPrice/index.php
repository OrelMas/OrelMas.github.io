<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <script src="../../scripts/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet"  href="../../scss/old/_wheel.scss">
</head>
<body>

<div class="centre">
        <span>Spin</span>
        <div class="fleche"></div>
    </div>

    <div class="circle">
        <?php
            for ($i=1; $i <= 36; $i++) { 
                echo "<div class='box-$i'><div class='choix' id='b-$i'> <span>$i</span> </div></div>";
            }
        ?>
    </div>
    <script>
        $('.centre').click(function() {
            $('.circle').css('rotate', Math.random() * 360 + 'deg')
        })
        
    </script>
</body>
</html>