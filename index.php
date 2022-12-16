<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>

    <link rel="stylesheet" href="./css/main.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<body onscroll="onScroll()">
    <main>

        <header id="header">

            <div class="logos">

                <img src="./img/pan.svg" alt="Icon de uma panela">
                <img src="./img/logo.svg" alt="Logomarca">

            </div>

            <img onclick="openMenu()" class="menu" src="./img/menu.svg" alt="Icon de menu">

            <nav>
                
                <img onclick="closeMenu()" class="close" src="./img/close.svg" alt="Icon de close">

                <ul>

                    <li>
                        <a onclick="closeMenu()" href="#inicio">Início</a>
                    </li>
                    <li>
                        <a onclick="closeMenu()" href="#cardapio">Cardápio</a>
                    </li>
                    <li>
                        <a onclick="closeMenu()" href="#comentarios">Depoimentos</a>
                    </li>
                    <li>
                        <a onclick="closeMenu()" href="#contato">Contato</a>
                    </li>

                </ul>

            </nav>

        </header>

        <aside>

            <h1>Gleba Buriti do Paraíso</h1>
            <h2>MA-349, KM 02</h2>
            <button><a href="./view/resgistrar/registrar_cliente.php" class="pedido">FAÇA SEU PEDIDO</a></button>

        </aside>

    </main>

    <div class="divisao"></div>

    <section id="cardapio">

        <div class="logos">

            <img src="./img/knife.svg" alt="Icon de knife">
            <h2>Cardápio</h2>

        </div>

        <figure>

            <img src="./img/post-1.jpg" alt="Imagem de comida">
            <img src="./img/post-2.jpg" alt="Imagem de comida">
            <img src="./img/post-3.jpg" alt="Imagem de comida">
            <img src="./img/post-4.jpg" alt="Imagem de comida">
            <img src="./img/post-5.jpg" alt="Imagem de comida">
            <img src="./img/post-6.jpg" alt="Imagem de comida">

        </figure>

    </section>

    <div class="divisao"></div>

    <section id="comentarios">

        <div class="logos">

            <img src="./img/comments.svg" alt="Icon de comentários">
            <h2>Depoimentos</h2>

        </div>

        <div class="cards">

            <div class="card">

                <div class="perfil">

                    <img src="./img/people-1.jpg" alt="Imagem de uma pessoa">
                    <h2>João Pedro</h2>

                </div>

                <p>
                    "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus dicta fugit illum quidem, in ea
                    eius molestias porro expedita quasi?"
                </p>

            </div>

            <div class="card">

                <div class="perfil">

                    <img src="./img/people-2.jpg" alt="Imagem de uma pessoa">
                    <h2>Kallliny Santos</h2>

                </div>

                <p>
                    "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus dicta fugit illum quidem, in ea
                    eius molestias porro expedita quasi?"
                </p>

            </div>

            <div class="card">

                <div class="perfil">

                    <img src="./img/people-3.jpg" alt="Imagem de uma pessoa">
                    <h2>Kelly Shimida</h2>

                </div>

                <p>
                    "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus dicta fugit illum quidem, in ea
                    eius molestias porro expedita quasi?"
                </p>

            </div>

        </div>

    </section>

    <div class="divisao"></div>

    <footer id="contato">

        <div class="logos">

            <img src="./img/zap.svg" alt="Icon de contato">
            <h2>Contato</h2>

        </div>

        <ul>
            <li>
                <img src="./img/instagram.svg" alt="Icon de instagram">
                <a href="#">restaurantebomsabor</a>
            </li>
            <li>
                <img src="./img/phone.svg" alt="Icon de telefone">
                <a href="#">(99) 99234-1243</a>
            </li>
            <li>
                <img src="./img/email.svg" alt="Icon de email">
                <a href="#">restaurante@bomsabor</a>
            </li>
            <li>
                <img src="./img/location.svg" alt="Icon de localização">
                <a href="#">Povoado Lamego, Zona Urbana, Caxias - MA</a>
            </li>
        </ul>

        <button>ENTRAR EM CONTATO</button>
    </footer>

    <a class="to-top" href="#header">
        <img src="./img/to-top.svg" alt="Icon para ir para o inicio da página">
    </a>

    <script src="./js/script.js"></script>

</body>

</html>