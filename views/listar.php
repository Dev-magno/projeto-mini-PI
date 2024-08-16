<?php
require_once "../Classe/user.php";

$usuario = User::listar();

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

    <div class="form-wrapper">
    <div class="controls">
        <a href="dashboard_admin.php" class="btn-back">Retornar</a>
    </div>
    <h1>Usuários Registrados</h1>
    <div class="table-container">
        <?php
        if ($usuario) {
            echo '<table class="table-users">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Nome Completo</th>';
            echo '<th>Localização</th>';
            echo '<th>Nascimento</th>';
            echo '<th>Contato</th>';
            echo '<th>Documento</th>';
            echo '<th>Correio Eletrônico</th>';
            echo '<th>Papel</th>';
            echo '<th>Situação</th>';
            echo '<th>Opções</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            foreach ($usuario as $linha) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($linha['nome']) . '</td>'; // a função htmlspecialchars() converte caracteres especiais em html. Assim protege uma aplicação contra ataques de injeção de códico (como XSS) ao exibir os dados inseridos.
                echo '<td>' . htmlspecialchars($linha['endereco']) . '</td>';
                echo '<td>' . htmlspecialchars($linha['data_nascimento']) . '</td>';
                echo '<td>' . htmlspecialchars($linha['telefone']) . '</td>';
                echo '<td>' . htmlspecialchars($linha['cpf']) . '</td>';
                echo '<td>' . htmlspecialchars($linha['email']) . '</td>';
                echo '<td>' . htmlspecialchars($linha['perfil']) . '</td>';
                echo '<td>' . htmlspecialchars($linha['status']) . '</td>';
                echo '<td class="options">';
                echo '<a href="editar.php?id=' . htmlspecialchars($linha['usuario_id']) . '" class="btn edit">Editar</a>';
                echo '<a href="excluir.php?id=' . htmlspecialchars($linha['usuario_id']) . '" class="btn delete" onclick="return confirm(\'Tem certeza que deseja remover este usuário?\')">Deletar</a>';
                echo '<a href="toggle.php?id=' . htmlspecialchars($linha['usuario_id']) . '" class="btn status-toggle ' . ($linha['status'] == 'ativo' ? 'enabled' : 'disabled') . '">' . ($linha['status'] == 'ativo' ? 'Desabilitar' : 'Habilitar') . '</a>';
                echo '</td>';
                echo '</tr>';
            }

            echo '</tbody>';
            echo '</table>';
        } else {
            echo "<p>Nenhum usuário foi encontrado.</p>";
        }
        ?>
    </div>
</div>
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
                <a href=""><img src="../image/email.png" alt="email" class="icon-rodape">ludofashion@gmail.com</a>
                <a href=""><img src="../image/local.png" alt="localização" class="icon-rodape">Nossa localização</a>

        </div>

    </div>
    <p class="rodape-direito">&copy; 2024 LudoFashion. Todos os direitos reservados.</p>
</footer>
</body>
</html>

