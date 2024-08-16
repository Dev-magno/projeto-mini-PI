
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
        <section id="main-container">
            <section class="container">
                <div class="penta"> <h1>Categorias</h1></div>
                <form id="checkbox">
                    <div>
                        <input type="checkbox" name="blusa" id="blus">
                        <label for="blus">Blusa</label>
                    </div>

                    <div>
                        <input type="checkbox" name="saia" id="saia">
                        <label for="saia">Saia</label>
                    </div>
                    
                    <div>
                        <input type="checkbox" name="vestido" id="vestido">
                        <label for="vestido">Vestidos</label>
                    </div>
                    
                    <div>
                        <input type="checkbox" name="ropuasintimas" id="ropuasintimas">
                        <label for="ropuasintimas">Roupas íntimas</label>
                    </div>
                    
                    <div>
                        <input type="checkbox" name="maquiagem" id="maquiagem">
                        <label for="maquiagem">Maquiagem</label>
                    </div>
                    
                    <div>
                        <input type="checkbox" name="bolsa" id="bolsa">
                        <label for="bolsa">Bolsa</label>
                    </div>

                    <input id="input-busca" type="button" value="Buscar">
                    
                </form>
            </section>

            <section id="blusa">
                <div id="blusa-retrato">
                    <img src="../image/retrato-costa.png" alt="">
                    <img src="../image/retrat-completo.png" alt="">
                    <img src="../image/retrato-superior.png" alt="">
                    <img src="../image/retrato-manga.png" alt="">
                </div>

                <div id="blusa-center"><img src="../image/blusa-retrato.png" alt=""></div>

                <div id="bulsa-estrela">
                    <div>
                        <h1>Blusa Cropped Feminina Manga</h1>
                        <a href=""><img src="../image/estrela.png" alt=""></a>
                        <a href=""><img src="../image/estrela.png" alt=""></a>
                        <a href=""><img src="../image/estrela.png" alt=""></a>
                        <a href=""><img src="../image/estrela.png" alt=""></a>
                        <a href=""><img src="../image/estrela.png" alt=""></a>

                        <p><strong>R$ 95,00</strong></p>
                        <p>Cor: Rosa</p>
                        <img src="../image/circle.png" alt="circulo para colocar cor" id="circle">

                        <div id="blusa-ava">
                            <div>
                                <h4>Escola sua avaliação</h4>
                            </div>
                            
                            <div id="blusa-tam">
                                <p>PP</p>
                                <P>P</P>
                                <p>M</p>
                                <p>G</p>
                                <p>GG</p>
                            </div>
                        </div>

                        <div id="blusa-sobre">
                            <h4>Sobre o Produto</h4>
                            <p>Blusa Cropped Feminina Manga 3/4 Bufante LusaFashion,</p>
                            <p>confeccionada em tecido plano viscose. Possui decote reto,</p> 
                            <p>manga 3/4 bufante, acabamento e costura no tom.</p>
    
                            <p>nformações Adicionais:</p>
                            <p>Tamanho: 36 ao 44</p>
                            <p>Cor: Rosa</p>
                            <p>Material: viscose(tecido plano)</p>
                            <p>Composição: 100% viscose</p>
                            <p>Marca: LudoFashion</p>
                        </div>

                    </div>

                </div>

            </section>
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