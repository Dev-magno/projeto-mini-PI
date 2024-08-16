<?php
// Conexão com o banco
require_once "../Classe/conexao.php";

// Classe User
require_once "../Classe/user.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LudoFashion</title>
    <link rel="stylesheet" href="style.css">
    <script src="../js/script.js" defer></script>
</head>
<body>

    <header>
        <a href="index.php"><img src="../image/logo.png" alt="logo do site" width="60px"></a>
        <!-- campo de pesquisa -->
        <form action="" id="form-buscar">
            <input type="search" name="buscar" id="buscar" placeholder="Buscar...">
            <button type="submit" id="btn-buscar"><img src="../image/search.png" alt="Buscar" width="30px"></button>
        </form>
            
        <a href="login.php" class="icon-link">
            <img src="../image/person.png" alt="Cadastro" width="40px">
            Cadastro
        </a>

        <a href="ajuda.php" class="icon-link">
            <img src="../image/ajuda.png" alt="Dúvidas" width="40px">
            Dúvidas
        </a>
    </header>
    
    <nav>
        <a href="catalogo.php">Catálogo</a>
        <a href="sobrenos.php">Sobre a Loja</a>
    </nav>

    <main>
        <section id="section-cadastro">
            <?php if(isset($_COOKIE['aviso'])) : ?>
                <section>
                    <div class="alert">
                        <?= $_COOKIE['aviso'] ?>
                        <?php setcookie('aviso', '', time() - 10000, '/projeto-mini-PI') ?>
                    </div>
                </section>
            <?php endif;?>
            <div id="div-form">
                <h1>Cadastrar</h1>
                <form action="insert.php" method="POST" onsubmit="return validarForm()">
                    <div class="div-inputs">
                        <div class="dados">
                            <div class="campo">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" id="nome" required>
                            </div>

                            <div class="campo">
                                <label for="endereco">Endereço</label>
                                <input type="text" name="endereco" id="endereco" required>
                            </div>

                            <div class="campo">
                                <label for="data_nascimento">Data de Nascimento</label>
                                <input type="date" name="data_nascimento" id="data_nascimento" required>
                            </div>

                            <div class="campo">
                                <label for="telefone">Telefone</label>
                                <input type="text" name="telefone" id="telefone" required>
                                <span class="span-cadastro"><i>somente números</i></span>
                            </div>
                        </div>

                        <div class="dados">
                            <div class="campo">
                                <label for="cpf">CPF</label>
                                <input type="text" name="cpf" id="cpf" required>
                                <span class="span-cadastro"><i>somente números</i></span>
                            </div>

                            <div class="campo">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" required>
                            </div>

                            <div class="campo">
                                <label for="senha">Senha</label>
                                <input type="password" name="senha" id="senha" required aria-required="true">
                                <!-- <img id="showPassword" class="show-password-button" src="../image/olho_fechado.png" alt="Mostrar Senha">
                                <span class="span-cadastro" id="message"></span> -->
                            </div>

                            <div class="campo">
                                <label for="senha2">Confirmar Senha</label>
                                <input type="password" name="senha2" id="senha2" required aria-required="true">
                            </div>
                        </div>
                    </div>

                    <input type="submit" value="Salvar">
                </form>
            </div>
        </section>        
    </main> 
    <footer>
        <div class="footer-container">
            <div class="link-menu">
                <h2>LINK</h2>
                <ul>
                    <li><a href="../views/index.php">Home</a></li>
                    <li><a href="../views/perfil.php">Perfil</a></li>
                    <li><a href="../views/catalogo.php">Catálogo</a></li>
                    <li><a href="../views/ajuda.php">Dúvidas</a></li>
                    <li><a href="../views/sobrenos.php">Sobre</a></li>
                    <li><a href="../views/categorias.php">Categoria</a></li>
                    <li><a href="../views/lista-de-desejo.php">Lista de desejos</a></li>
                    <li><a href="../views/blusa.php">Blusa</a></li>
                </ul>
            </div>

            <div class="categoria">
                <h2>Categorias</h2>
                <ul>
                    <li><a href="#">Casual</a></li>
                    <li><a href="#">Esportivo</a></li>
                    <li><a href="#">Lingeries</a></li>
                    <li><a href="#">Social</a></li>
                    <li><a href="#">Bolsas</a></li>
                    <li><a href="#">Calcinhas</a></li>
                </ul>
            </div>

            <div class="suporte">
                <h2>Suporte e Atendimento</h2>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Canais de Atendimento</a></li>
                    <li><a href="#">Formas de Pagamento</a></li>
                    <li><a href="#">Prazo de entrega</a></li>
                    <li><a href="#">Promoções</a></li>
                </ul>
            </div>

            <div class="endereco">
                <h2>Endereço</h2>
                <address>
                    Rua São Pantaleão, 150<br>Centro, São Luis - MA
                </address>

                <a href="#"><img src="../image/whatsapp.png" alt="whatsapp" class="icon-rodape">WhatsAPP</a>
                <a href="#"><img src="../image/instagram.png" alt="instagram" class="icon-rodape">Instagram</a>
                <a href="#"><img src="../image/email.png" alt="email" class="icon-rodape">ludofashion@gmail.com</a>
                <a href="#"><img src="../image/local.png" alt="localização" class="icon-rodape">Nossa localização</a>
            </div>
        </div>
        <p class="rodape-direito">&copy; 2024 LudoFashion. Todos os direitos reservados.</p>
    </footer>

</body>
</html>
