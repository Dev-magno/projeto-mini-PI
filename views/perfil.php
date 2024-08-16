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
        <!-- campo de pesquisa -->
        <form action="" id="form-buscar">
            <input type="search" name="buscar" id="buscar" placeholder="Buscar...">
            <button type="submit" id="btn-buscar"><img src="../image/search.png" alt=""  width="30px"></button>
        </form>
            
           
        <a href="login.php" class="icon-link">
            <img src="../image/person.png" alt="pessoa" width="40px">
            Cadastro
        </a>

        <a href="ajuda.php" class="icon-link">
            <img src="../image/ajuda.png" alt="sinal de interrogação" width="40px">
            Dúvidas
        </a>
              
    </header>
    
    <nav>
        <a href="catalogo.php">Catálogo</a>
        <a href="sobrenos.php">Sobre a Loja</a>
    </nav>

    <main>
        <section id="perfil">
            <div id="pefil-menu">

                <div>
                    <img src="../image/conta-person.png" alt="icon pessoa">
                    <a href="../views/perfil.php">Minha Conta</a>
                </div>
                
                <div>
                    <img src="../image/coracao.png" alt="icon coraçao">
                    <a href="../views/lista-de-desejo.php">Lista de Desejos</a>
                </div>
                

                <div>
                    <img src="../image/menu.png" alt="icon menu">
                    <a href="../views/categorias.php">Categorias</a>
                </div>

                <div>
                    <img src="../image/caixa-de-entrega.png" alt="icon menu">
                    <a href="cadastro-produto.php">Produtos</a>
                </div>
                
            </div>

            <div class="form-perfil">
                <div>
                    <h1>Meu Perfil</h1>
                    <p>Gerenciar e proteger sua conta</p>
                </div>
                <div class="div-usuario">

                    <form action="">
                        <div class="label-itens">
                            <label for="usuario">Usuário:</label>
                            <input type="text" name="usuario" id="input-item">
                        </div>

                        <div class="label-itens">
                            <label for="">Nome:</label>
                            <input type="text" name="nome" id="input-item">
                        </div>

                        <div class="label-itens">
                            <label for="">E-mail</label>
                            <input type="email" name="email" id="input-item">
                            <a href="">Editar</a>
                        </div>

                        <div class="label-itens">
                            <label for="">Telefone</label>
                            <input type="tel" name="telefone" id="input-item">
                            <a href="">Editar</a>
                        </div>

                        <div class="label-itens">
                            <label for="">Sexo:</label>
                            <label for="">Masculino</label>
                            <input type="radio" name="masc" id="masc">
                            <label for="">Feminino</label>
                            <input type="radio" name="fem" id="fem">
                            <label for="">Outro</label>
                            <input type="radio" name="outro" id="outro">
                        </div>

                        <div class="label-itens">
                            <label for="">CPF</label>
                            <input type="text" name="cpf" id="input-item">
                            <a href="">Editar</a>
                        </div>

                        <div class="label-itens">
                            <label for="">Data de Nascimento</label>
                            <input type="date" name="nasc" id="input-item">
                        </div>
                    </form>

                    <button id="btn-salvar">Salvar</button>

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
                    Rua São Pantaleão, 150, <br>Centro, São Luis - Ma
                </address>

                    <a href="#"><img src="../image/whatsapp.png" alt="whatsapp" class="icon-rodape">WhatsAPP</a>
                    <a href=""><img src="../image/instagram.png" alt="instagram" class="icon-rodape">Instagram</a>

                    <a href=""><img src="../image/email.png" alt="email" class="icon-rodape">ludofashion@gmail.com</a>
                    <a href=""><img src="../image/local.png" alt="localização" class="icon-rodape">Nossa localização</a>
            </div>

        </div>
        <p class="rodape-direito">&copy; 2024 LudoFashion. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
