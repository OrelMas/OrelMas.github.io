<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="../scripts/jquery-3.7.1.min.js.js"></script>
    <title>Beau</title>
    <link rel="stylesheet" href="../../exo/site/beau.css">
</head>

<body>
    <nav class="soft">
        <span>Home</span>
        <ul>

            <li><a href="slideli">Link 1</a></li>
            <li><a href="slideli">Link 2</a></li>
            <li><a href="slideli">Link 3</a></li>
            <li><a href="slideli">Link 4</a></li>
        </ul>

        <h1>START PAGE</h1>
    <h5>Template by w3.css</h5>

        <button class="beau">Get Started</button>
        <box-icon id="menu" name="menu" size="25px"></box-icon>
    </nav>
    <ul id="slide">
        <li><a href="slideli">Link 1</a></li>
        <li><a href="slideli">Link 2</a></li>
        <li><a href="slideli">Link 3</a></li>
        <li><a href="slideli">Link 4</a></li>
    </ul>
    
    
    <h3>Lorem Ipsum</h3>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit nesciunt est ad magni, asperiores rem non quis nostrum maxime assumenda neque explicabo iusto, deleniti eos! Unde laudantium quod hic consequatur.
    Modi repudiandae mollitia sequi accusantium rerum et libero. </p>

    <script>
        let menu = document.getElementById('menu')
        menu.addEventListener('click', function () {
            let list = document.getElementById('slide')
            let li = document.getElementsByClassName('slideli')

            if (list.style.display.length == 0 || list.style.display == 'none') {
                list.style.display = 'flex';

                let interval = setInterval(function () {
                    for (let index = 0; index < li.length; index++) {
                        li[index].style.opacity = 1
                        li[index].style.display = 'block'
                    }
                    list.style.animationPlayState = 'paused'
                    clearInterval(interval)
                }, 950)

            } else {
                list.style.animation = '2s ease 1 reverse slideBottom'
                list.style.animationPlayState = 'running'

                for (let index = 0; index < li.length; index++) {
                    li[index].style.opacity = 0
                    li[index].style.display = 'none'
                }
                let interval = setInterval(function () {

                    list.style.display = 'none'
                    list.style.animation = 'slideBottom 1s 1 linear'

                    clearInterval(interval)

                }, 1000)

            }
        })

    </script>
</body>

</html>