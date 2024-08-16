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
            <button type="submit" id="btn-buscar"><img src="../image/search.png" alt="" width="30px"></button>
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
                    <a href="../views/cadastro-produto.php">Produtos</a>
                </div>
                
            </div>

            <div>
                <div class="divh1-list">
                    <h1>Minha Lista de Desejo</h1>
                    <p>Gerenciar sua lista de desejo</p>
                </div>

                <div class="div-list">
                  
                    <div id="item-desejo">
                        <img src="../image/calca-lipo.jpg" alt="">
                        <div>
                            <h4>Calça Lipo Preta Feminina Casual</h4>
                            <p>Branco, Preto e Azul</p>
                        </div>
                        
                        <p class="list-p">R$ 75,00</p>
                    </div>
                   
                    <div id="item-desejo">
                        <img src="../image/blusa-verao.jpg" alt="">

                        <div>
                            <h4>Blusa Com Detalhe De Renda Nas Mangas</h4>
                            <p>Rosa, Preto e Azul</p>
                        </div>
                        
                        <p class="list-p">R$ 95,00</p>
                    </div>
                    
                    <div id="item-desejo">
                        <img src="../image/vestido-curto.jpg" alt="">
                        <div>
                            <h4>Vestido longo feminino manga curta</h4>
                            <p>Vermelho, Preto e Azul</p>
                        </div>
                        
                        <p class="list-p">R$ 150,00</p>
                    </div>
                    
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
                    Rua São Pantaleão, 150, <br>Centro, São Luis - Ma
                </address>

                <a href="#"><img src="../image/whatsapp.png" alt="whatsapp" class="icon-rodape">WhatsAPP</a>
                <a href=""><img src="../image/instagram.png" alt="instagram" class="icon-rodape">Instagram</a>
                <a href=""><img src="../image/facebook.png" alt="facebook" class="icon-rodape">Facebook</a>
                <a href=""><img src="../image/tiktok.png" alt="tiktok" class="icon-rodape">Tiktok</a>

                <a href=""><img src="../image/email.png" alt="email" class="icon-rodape">ludofashion@gmail.com</a>
                <a href=""><img src="../image/local.png" alt="localização" class="icon-rodape">Nossa localização</a>

            </div>

        </div>
        <p class="rodape-direito">&copy; 2024 LudoFashion. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
