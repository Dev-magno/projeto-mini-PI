<?php
//Conexão com o banco
require_once "../Classe/conexao.php";

//Classe User
require_once "../Classe/user.php";
?>
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
        <section id="cd-produto">
            <h1>Cadastro de Produto</h1>
            <!-- <p>Detalhes do produto</p> -->
            <div class="desc-produto">

                <fieldset>
                    <legend>Detalhes do Produto</legend>

                <div id="desc-itens">
                    <input type="text" name="nome" id="noe" placeholder="nome do produto">
                    <input type="color" name="cor" id="cor" placeholder="cor">
                    <input type="text" name="tam" id="tam" placeholder="tamanho">
                    <input type="text" name="desc" id="desc" placeholder="descrição do produto"> 
                </div>

                <div id="div-arquivo">
                    <div class="quadro" id="quadro">
                        <img id="imagemExibida" src="" alt="Sua Imagem" style="display: none;">
                        <label for="imagemInput" class="custom-file-upload">Adicionar Imagem</label>
                            <input type="file" id="imagemInput" accept="image/*">
                    </div>
                    
                    <div id="div-textarea">
                        <textarea name="carac" id="carac" placeholder="Característica, marca, tecido" maxlength="" rows="7" cols="50"></textarea>
                    </div>
                </div>
            </div>
        </fieldset>
         
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