
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LudoFashion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <a href="index.php"><img src="../image/logo.png" alt="logo do site" width="60px"></a>
        <!-- Campo de pesquisa -->
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
        <section class="categoria">
          <h1>Gerenciar Categorias</h1>

            <div class="pag-categoria">
                <div class="item">
                    <h2>Adicionar Categoria</h2>
                    <form class="item-input" action="categorias.php" method="post">
                        <input type="hidden" name="action" value="insert">
                        <input type="text" name="nome" placeholder="Nome da Categoria" required>
                        <button type="submit">Adicionar</button>
                    </form>
                </div>

                <div class="item">
                    <h2>Atualizar Categoria</h2>
                    <form class="item-input" action="categorias.php" method="post">
                        <input type="hidden" name="action" value="update">
                        <input type="number" name="id" placeholder="ID da Categoria" required>
                        <input type="text" name="nome" placeholder="Novo Nome da Categoria" required>
                        <button type="submit">Atualizar</button>
                    </form>
                </div>
                
                <div class="item">
                    <h2>Deletar Categoria</h2>
                    <form class="item-input" action="categorias.php" method="post">
                        <input type="hidden" name="action" value="delete">
                        <input type="number" name="id" placeholder="ID da Categoria" required>
                        <button type="submit">Deletar</button>
                    </form>
                </div>

                <div class="item">
                    <h2>Listar Categorias</h2>
                    <form class="item-input" action="categorias.php" method="post">
                        <input type="hidden" name="action" value="list">
                        <button type="submit">Listar</button>
                    </form>
                </div>
                
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
                    <li><a href="">Casual</a></li>
                    <li><a href="">Esportivo</a></li>
                    <li><a href="">Lingeries</a></li>
                    <li><a href="">Social</a></li>
                    <li><a href="">Bolsas</a></li>
                    <li><a href="">Calcinhas</a></li>
                    <li><a href="">Maquiagem</a></li>
                    <li><a href="">Banho</a></li>
                    <li><a href="">Moda Praia</a></li>
                </ul>
            </div>

            <div class="suporte">
                <h2>Suporte e Atendimento</h2>
                <ul>
                    <li><a href="">FAQ</a></li>
                    <li><a href="">Canais de Atendimento</a></li>
                    <li><a href="">Formas de Pagamento</a></li>
                    <li><a href="">Prazo de entrega</a></li>
                    <li><a href="">Promoções</a></li>
                </ul>
            </div>

            <div class="endereco">
                <h2>Endereço</h2>
                <address>
                    Rua São Pantaleão, 150, <br>Centro, São Luis - MA
                </address>

                <a href="https://api.whatsapp.com/send?phone=seunumerodetelefone"><img src="../image/whatsapp.png" alt="whatsapp" class="icon-rodape">WhatsAPP</a>
                <a href="https://www.instagram.com/seuperfil"><img src="../image/instagram.png" alt="instagram" class="icon-rodape">Instagram</a>
                <a href="https://www.facebook.com/seuperfil"><img src="../image/facebook.png" alt="facebook" class="icon-rodape">Facebook</a>
                <a href="https://www.tiktok.com/@seuperfil"><img src="../image/tiktok.png" alt="tiktok" class="icon-rodape">Tiktok</a>

                <a href="mailto:ludofashion@gmail.com"><img src="../image/email.png" alt="email" class="icon-rodape">ludofashion@gmail.com</a>
                <a href="https://www.google.com/maps?q=Rua+São+Pantaleão,+150,+Centro,+São+Luis+-+Ma"><img src="../image/local.png" alt="localização" class="icon-rodape">Nossa localização</a>
            </div>
        </div>
        <p class="rodape-direito">&copy; 2024 LudoFashion. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
