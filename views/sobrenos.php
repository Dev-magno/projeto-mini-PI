
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
        <a href="index.php"><img src="../image/logo.png" alt="Logo do site" width="60px"></a>
        <!-- Campo de pesquisa -->
        <form action="" id="form-buscar">
            <input type="search" name="buscar" id="buscar" placeholder="Buscar...">
            <button type="submit" id="btn-buscar"><img src="../image/search.png" alt="Ícone de busca" width="30px"></button>
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
        <section class="sobre">
            <div class="text">
                <h1>Quem somos?</h1>
                <p>LudoFashion é uma boutique online que cativa o coração de mulheres modernas e conscientes da moda. Especializada na venda de cosméticos e roupas femininas, a LudoFashion oferece uma seleção cuidadosamente curada de produtos que combinam elegância, estilo e qualidade.
                   Desde os mais recentes lançamentos em produtos de beleza até as últimas tendências em moda feminina, cada item da LudoFashion é escolhido para inspirar confiança e beleza em suas clientes.
                   Com um compromisso inabalável com a qualidade e o serviço ao cliente, a LudoFashion se destaca como um destino confiável para mulheres que buscam expressar sua individualidade através do estilo.
                </p>
                
                <div>
                    <p><strong>Visão:</strong> Ser a principal boutique online para mulheres modernas e conscientes da moda, oferecendo uma experiência única e inspiradora.</p>
                    <p><strong>Missão:</strong> Proporcionar uma seleção cuidadosamente curada de cosméticos e roupas femininas que inspirem confiança e expressão individual, com excelência em qualidade e serviço ao cliente.</p>
                    <p><strong>Valores:</strong> Excelência, Integridade, Empoderamento.</p>
                </div>
            </div>
            
            <div id="div-sobre">
                <img src="../image/sobre.jpg" alt="Imagem da página Sobre">
                
                <div id="icon-sobre">
                    <a href="#"><img src="../image/instagram.png" alt="Instagram"></a>
                    <a href="#"><img src="../image/whatsapp.png" alt="WhatsApp"></a>
                    <a href="#"><img src="../image/youtube.png" alt="YouTube"></a>  
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
                    <li><a href="#">Maquiagem</a></li>
                    <li><a href="#">Banho</a></li>
                    <li><a href="#">Moda Praia</a></li>
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

                <a href="#"><img src="../image/whatsapp.png" alt="WhatsApp" class="icon-rodape">WhatsApp</a>
                <a href="#"><img src="../image/instagram.png" alt="Instagram" class="icon-rodape">Instagram</a>
                <a href="#"><img src="../image/facebook.png" alt="Facebook" class="icon-rodape">Facebook</a>
                <a href="#"><img src="../image/tiktok.png" alt="TikTok" class="icon-rodape">TikTok</a>
                <a href="mailto:ludofashion@gmail.com"><img src="../image/email.png" alt="Email" class="icon-rodape">ludofashion@gmail.com</a>
                <a href="#"><img src="../image/local.png" alt="Localização" class="icon-rodape">Nossa localização</a>
            </div>
        </div>
        <p class="rodape-direito">&copy; 2024 LudoFashion. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
