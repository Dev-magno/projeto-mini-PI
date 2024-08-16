
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
            <button type="submit" id="btn-buscar"><img src="../image/search.png" alt="Buscar" width="30px"></button>
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

    <main id="main-catalogo">
        <section id="main-container">
            <section class="container">
                <div id="penta"><h1>Categorias</h1></div>
                <div class="checkbox">
                    <div class="checkbox-item">
                        <input type="checkbox" name="saia" id="saia">
                        <label for="saia">Saia</label>
                    </div>
                    
                    <div class="checkbox-item">
                        <input type="checkbox" name="vestido" id="vestido">
                        <label for="vestido">Vestidos</label>
                    </div>
                    
                    <div class="checkbox-item">
                        <input type="checkbox" name="blus" id="blus">
                        <label for="blus">Blusa</label>
                    </div>
                    
                    <div class="checkbox-item">
                        <input type="checkbox" name="maquiagem" id="maquiagem">
                        <label for="maquiagem">Maquiagem</label>
                    </div>
                    
                    <div class="checkbox-item">
                        <input type="checkbox" name="bolsa" id="bolsa">
                        <label for="bolsa">Bolsa</label>
                    </div>

                    <div class="checkbox-item">
                        <input type="checkbox" name="ropuasintimas" id="ropuasintimas">
                        <label for="ropuasintimas">Roupas íntimas</label>
                    </div>
                    
                </div>
            </section>

            <section class="content">
                <h1>Conheça nosso catálogo de produtos</h1>
                <p>Os mais variados produtos femininos, com os melhores preços do mercado</p>

                <div class="cartao">
                    <div class="cartao-recipient">
                        <div class="card-imagem">
                            <img src="../image/blusa-magas-curtas.png" alt="Blusa com Mangas Curtas Oceano Azul">
                        </div>
                        <div class="card-text">
                            <p>Blusa com Mangas Curtas Oceano Azul</p>
                            <p>R$ 49,99</p>
                        </div>
                    </div>

                    <div class="cartao-recipient">
                        <div class="card-imagem">
                            <img src="../image/saia-viscose.png" alt="Saia de Viscose Midi Estrelado">
                        </div>
                        <div class="card-text">
                            <p>Saia de Viscose Midi Estrelado</p>
                            <p>R$ 132,29</p>
                        </div>
                    </div>

                    <div class="cartao-recipient">
                        <div class="card-imagem">
                            <img src="../image/po-lacre.png" alt="Pó Lacre Universal">
                        </div>
                        <div class="card-text">
                            <p>Pó Lacre Universal</p>
                            <p>R$ 45,00</p>
                        </div>
                    </div>

                    <div class="cartao-recipient">
                        <div class="card-imagem">
                            <img src="../image/bolsa-tiracolo.png" alt="Bolsa Tiracolo Verde Média">
                        </div>
                        <div class="card-text">
                            <p>Bolsa Tiracolo Verde Média</p>
                            <p>R$ 214,90</p>
                        </div>
                    </div>

                    <div class="cartao-recipient">
                        <div class="card-imagem">
                            <img src="../image/vestido-midi.png" alt="Vestido Midi Amarração Sophie">
                        </div>
                        <div class="card-text">
                            <p>Vestido Midi Amarração Sophie</p>
                            <p>R$ 195,50</p>
                        </div>
                    </div>

                    <div class="cartao-recipient">
                        <div class="card-imagem">
                            <img src="../image/kit-calcinhas.png" alt="Kit 05 Calcinhas String Renda">
                        </div>
                        <div class="card-text">
                            <p>Kit 05 Calcinhas String Renda</p>
                            <p>R$ 30,60</p>
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
                <a href="mailto:ludofashion@gmail.com"><img src="../image/email.png" alt="email" class="icon-rodape">ludofashion@gmail.com</a>
                <a href="https://www.google.com/maps?q=Rua+São+Pantaleão,+150,+Centro,+São+Luis+-+Ma"><img src="../image/local.png" alt="localização" class="icon-rodape">Nossa localização</a>
            </div>
        </div>
        <p class="rodape-direito">&copy; 2024 LudoFashion. Todos os direitos reservados.</p>
    </footer>
</body>
</html>

