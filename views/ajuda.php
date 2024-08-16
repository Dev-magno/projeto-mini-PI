
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
    <body>
    <main>
        <section class="section-faq">
                <div class="faq">
                    <h1>Principais perguntas:</h1>
                    <details>
                        <summary>Como faço para adicionar um produto à minha lista de desejos?</summary>
                        <p>Para adicionar um produto à sua lista de desejos, primeiro crie uma conta, depos acesse a página Minha Lista de desejos, em seguida clique no menu lista de desejos e adicione o produto desejado </p>
                    </details>

                    <details>
                        <summary>Como posso pesquisar produtos no site?</summary>
                        <p>Sim! Em nossa página principal há a opção de busca onde você pode pesquisar pelo que deseja.</p>
                    </details>

                    <details>
                        <summary>Existe uma opção de filtragem para encontrar produtos específicos, como por categoria, preço, marca, etc.?</summary>
                        <p>Sim! Na página de categorias você pode filtrar o produto que deseja.</p>
                    </details>

                    <details>
                        <summary>Posso salvar produtos em uma lista de desejos para ver mais tarde?</summary>
                        <p>Sim! Você pode navegar nas páginas onde os nossos produtos estão disponíveis e adicionar o que desejar em sua lista de desejos.</p>
                    </details>

                    <details>
                        <summary>Existe uma opção de chat ao vivo ou suporte online para obter ajuda adicional sobre um produto?</summary>
                        <p>Sim! Neste mesma página há a opção de entrar em contato conosco. Você pode fazer isso também pelo WhatsAPP</p>
                    </details>
                </div>

                
                <div id="faq-duvida">
                    <img src="../image/mulher.png" alt="" id="img">
                    <div id="contato">
                        <h1>Ainda com Problemas?</h1>
                            <div class="contact-link">
                                <a href="#" id="link-tel">Fale conosco</a>
                                <img src="../image/fone-ouvido.png" alt="fale conosco">
                            </div>
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