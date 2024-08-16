<?php

// Incluir a classe de conexão com o banco de dados
require_once '../Classe/conexao.php'; 

// Iniciar a sessão
session_start();

// Verifique se o ID do usuário está presente na sessão
if (isset($_SESSION['user_id']) && is_numeric($_SESSION['user_id'])) {
    $usuario_id = (int)$_SESSION['user_id'];

    try {
        // Conectar ao banco de dados
        $conexao = Conexao::conectar();

        // Preparar a consulta para buscar as informações do usuário
        $sql_user = "SELECT nome, email, data_nascimento FROM Usuario_tb WHERE usuario_id = :id";
        $stmt_user = $conexao->prepare($sql_user);
        $stmt_user->bindValue(':id', $usuario_id, PDO::PARAM_INT);
        $stmt_user->execute();
        $user = $stmt_user->fetch(PDO::FETCH_ASSOC);

        // Verificar se o usuário foi encontrado
        if ($user === false) {
            throw new Exception("Usuário não encontrado.");
        }

        // Preparar a consulta para buscar os livros do usuário
        $sql_produtos = "SELECT nome FROM Produtos_tb WHERE usuario_id = :id";
        $stmt_produtos = $conexao->prepare($sql_produtos);
        $stmt_produtos->bindValue(':id', $usuario_id, PDO::PARAM_INT);
        $stmt_produtos->execute();
        $produtos = $stmt_produtos->fetchAll(PDO::FETCH_ASSOC);

    } catch (Exception $e) {
        die("Erro: " . $e->getMessage());
    }
} else {
    echo "ID do usuário não fornecido ou inválido.";
    exit;
}

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
    <main class="main-user">
        <section class="user-itens">
            <div>
               <h1>Bem-vindo(a), <?= htmlspecialchars($user['nome']) ?></h1>
            </div>
            
            <div class="svg">
                <a href="logout.php" class="button-normal">Sair</a>
                <a href="#"><img src="../image/mensagem.svg" alt="Mensagem"></a>
                <a href="#"><img src="../image/add.svg" alt="Adicionar"></a>
             </div>
        </section>
        
        <section class="user">
            <aside>
                <p><strong>Nome:</strong> <?= htmlspecialchars($user['nome']) ?></p>
                <p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>
                <p><strong>Data De Nascimento:</strong> <?= htmlspecialchars($user['data_nascimento']) ?></p>
                <a href="logout.php" class="button-normal">Sair</a>
            </aside>

            <section class="user-produtos">
                <?php if (empty($produtos)): ?>
                    <p>Não há produtos disponíveis para este usuário.</p>
                <?php else: ?>
                     <?php foreach ($produtos as $produto): ?>
                        <div>
                            <p><?= htmlspecialchars($produto['nome']) ?></p>
                        </div>
                     <?php endforeach; ?>
                 <?php endif; ?>
             </section>
        </section>
     </main>
</body>
</html>
