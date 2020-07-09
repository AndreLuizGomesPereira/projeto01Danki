<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans: 400, 700">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição de sistema PHP">
    <title>Projeto - PHP</title>
</head>

<body>
    <header>
        <div class="center">
            <div class="logo">Logomarca</div>
            <nav class="desktop">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
            <div class="center">
    </header>
    <section class="banner-principal">

        <form>
            <h2>Qual seu melhor e-mail?</h2>
            <input type="email" name="email" required>
            <input type="submit" name="acao" value="Cadastrar!" required>
        </form>
        </div>
    </section>

    <section class="descricao-autor">
        <div class="center">
            <div class="w50">
                <h2>André Luiz Gomes Pereira</h2>
                <p>Texto para a Biografia</p>
            </div>
            <div class="w50">
                <img src="img/perfil.jpg" alt="André Luiz">
            </div>
        </div>
    </section>
    <section class="especialidades">
        <div class="center">
            <h2 class="title">Especialidades</h2>
            <div class="box-especialidade">
                <h3><i class="fab fa-css3-alt"></i></h3>
                <h3>CSS3</h3>
                <p>Texto para a especialidade</p>
                <h3><i class="fab fa-html5"></i></h3>
                <h3>HTML5</h3>
                <p>Texto para a especialidade</p>
                <h3><i class="fab fa-js-square"></i></h3>
                <h3>JavaScript</h3>
                <p>Texto para a especialidade</p>
            </div>
        </div>
    </section>
    <section class="extras">
        <div class="center">
            <div class="w50">
                <h2 class="title">Depoimentos</h2>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">Texto de depoimento do cliente</p>
                    <p class="nome-autor">Nome do autor</p>
                </div>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">Texto de depoimento do cliente</p>
                    <p class="nome-autor">Nome do autor</p>
                </div>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">Texto de depoimento do cliente</p>
                    <p class="nome-autor">Nome do autor</p>
                </div>
            </div>
            <div class="w50">
                <h2 class="title">Serviços</h2>
                <div class="servicos">
                    <ul>
                        <li>Lista de serviços</li>
                        <li>Lista de serviços</li>
                        <li>Lista de serviços</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div>
    </footer>

</body>

</html>