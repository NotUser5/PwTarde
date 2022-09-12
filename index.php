<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <style>
        body, li{
            /* background-color: black; */
            margin:0;
            padding:0;
            list-style: none;
            font-family: 'Open Sans';
        }
        a{
            text-decoration: none;
        }
        #container{
            display: grid;
            grid-template-rows: 17vh 83vh;
            grid-template-areas: 
                'cabecalho'
                'conteudo'
            ;
        }
        #cabecalho{
            grid-area: cabecalho;
            background-color: #212121;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        #conteudo{
            grid-area: conteudo;
            background-color: #ccc;
        }
        img{
            margin-top: 6px;
            margin-left: 6px;
        }
        .menu{
            display: flex;
        }
        .menu li{
            /* background-color: red; */
            padding: 10px;
            margin-left: 10px;
        }
        .menu li a{
            display: block;
            padding: 10px;
            cursor: pointer;
            /* background-color: green; */
            color: white;
        }
    </style>
</head>
<body>
    <div id="container"> <!--Id(identificador) é unico, class pode repetir-->
        <header id="cabecalho">
            <div id="logo">
                <img src="./logo2.png" width="150" height="150">
            </div>
            <nav>
                <ul class="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="exercicio.php">Ex1</a></li>
                    <li><a href="array.php">Array</a></li>
                    <li><a href="start.php">Aula 1</a></li>
                    <li><a href="function.php">Função</a></li>
                    </ul>
            </nav>
        </header>
        <main id="conteudo">
            <h1>Bem vindo</h1>
        </main>
    </div>
</body>
</html>
<?php
?>