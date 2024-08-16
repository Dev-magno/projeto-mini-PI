--- criação do banco
CREATE DATABASE ludo_db;

--- criação da tabela usuario
CREATE TABLE Usuario_tb (
    usuario_id INT(11) NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    endereco VARCHAR(255),
    data_nascimento DATE,
    telefone VARCHAR(20),
    cpf VARCHAR(14) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    perfil ENUM('normal', 'administrador') NOT NULL DEFAULT 'normal',
    status ENUM('ativo', 'inativo') NOT NULL DEFAULT 'ativo',
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (usuario_id)
);


---criação da tabela produtos
CREATE TABLE Produtos_tb (
    produto_id INT(11) NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10, 2) NOT NULL,
    quantidade INT(11) NOT NULL,
    usuario_id INT(11) NOT NULL,
    PRIMARY KEY (produto_id),
    FOREIGN KEY (usuario_id) REFERENCES Usuario_tb(usuario_id)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);


---criação da tabela vendas
CREATE TABLE Vendas_tb (
    venda_id INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT,
    data_venda DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_usuario) REFERENCES Usuario_tb(id)
);

---criação da tabela itens vendas
CREATE TABLE Itens_venda_tb (
    item_id INT AUTO_INCREMENT PRIMARY KEY,
    id_venda INT,
    id_produto INT,
    quantidade INT NOT NULL,
    preco_unitario DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (id_venda) REFERENCES Vendas_tb(id),
    FOREIGN KEY (id_produto) REFERENCES Produtos_tb(id)
);

Cadastro 1
Nome: João da Silva
Endereço: Rua das Flores, 123, Lisboa
Data de Nascimento: 15/03/1985
Telefone: 912345678
CPF: 12345678901
Email: joao.silva@email.com
Senha: Joao@1234

Cadastro 2
Nome: Maria Oliveira
Endereço: Avenida dos Pioneiros, 456, Porto
Data de Nascimento: 22/07/1990
Telefone: 919876543
CPF: 23456789012
Email: maria.oliveira@email.com
Senha: Maria@5678

Cadastro 3
Nome: Pedro Costa
Endereço: Praça da Independência, 789, Coimbra
Data de Nascimento: 30/11/1978
Telefone: 938765432
CPF: 34567890123
Email: pedro.costa@email.com
Senha: Pedro@9101

Cadastro 4
Nome: Ana Pereira
Endereço: Rua do Comércio, 101, Faro
Data de Nascimento: 08/05/1983
Telefone: 927654321
CPF: 45678901234
Email: ana.pereira@email.com
Senha: Ana@1122

Cadastro 5
Nome: Ricardo Almeida
Endereço: Travessa dos Amigos, 202, Braga
Data de Nascimento: 12/09/1995
Telefone: 936543210
CPF: 56789012345
Email: ricardo.almeida@email.com
Senha: Ricardo@3344


--- Adm
admin@exemplo.com
senha_admin