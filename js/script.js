document.getElementById('imagemInput').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
        const img = document.getElementById('imagemExibida');
        img.src = e.target.result;
        img.style.display = 'block';
    };

    if (file) {
        reader.readAsDataURL(file);
    }
});

   // Função para mostrar/ocultar a senha
   const showPassword = document.querySelector('#showPassword');
   const senha = document.querySelector('#senha');
   const senha2 = document.querySelector('#senha2');
   let mostrar = false; // Variável de controle para alternar entre mostrar e ocultar a senha

    // Adiciona um evento de clique ao botão de mostrar/ocultar senha
   showPassword.addEventListener('click', () => {
       if (mostrar) { // Se a senha estiver visível
           senha.type = 'password';
           senha2.type = 'password';
           showPassword.src = '../image/olho_fechado.png';
           mostrar = false; // Atualiza o estado para "não mostrar"
       } else { // Se a senha estiver oculta
           senha.type = 'text';
           senha2.type = 'text';
           showPassword.src = '../image/olho_aberto.png';
           mostrar = true; // Atualiza o estado para "mostrar"
       }
   });

   // Função para validar o formulário
   function validarForm() {
       const senhaValue = senha.value; //Obtem o valor do campo de senha
       const senha2Value = senha2.value;
       const exibir = document.querySelector('#message'); //Exibe uma mensagem

       // Verifica se a senha atende aos critérios de segurança
       if (!validarSenha(senhaValue)) {
           exibir.textContent = 'Senha inválida! A senha deve conter pelo menos 8 caracteres, incluindo letras maiúsculas, minúsculas, dígitos e caracteres especiais';
           exibir.style.color = 'red';
           senha.style.outline = '1px solid red';
           senha2.style.outline = '1px solid red';
           return false; // Impede o envio do formulário
       }

       // Verifica se as senhas coincidem
       if (senhaValue !== senha2Value) {
           exibir.textContent = 'Senhas não conferem, digite novamente.';
           exibir.style.color = 'red';
           senha.style.outline = '1px solid red';
           senha2.style.outline = '1px solid red';
           return false; // Impede o envio do formulário
       }

       // Se todas as validações passarem
       exibir.textContent = '';
       return true; // Permite o envio do formulário
   }

   // Função para verificar se a senha atende aos critérios de segurança
   function validarSenha(senha) {
       const temMaiscula = /[A-Z]/.test(senha); // 'test()' verifica se um padrão específico é encontrado em uma string. Ele é um método de objetos do tipo RegExp (expressão regular) e retorna um valor booleano (true ou false).
       const temMinuscula = /[a-z]/.test(senha);
       const temDigito = /[0-9]/.test(senha);
       const temCaracterEspecial = /[!@#$%^&*(),.?":{}|<>]/.test(senha);
       const temOito = senha.length >= 8;

       return temMaiscula && temMinuscula && temDigito && temCaracterEspecial && temOito;
   }

function exibirAlerta() {
    alert('Cadastro bem sucedido!')
}


//slider
// Seleciona todas as imagens dentro do elemento com o id "banner" que possuem a classe "banner-image"
const images = document.querySelectorAll('#banner .banner-image');

// Inicializa o índice da imagem atual como 0 (começa pela primeira imagem)
let currentIndex = 0;

// Função para mostrar a imagem no índice fornecido
function showImage(index) {
    // Itera sobre todas as imagens
    images.forEach((image, i) => {
        // Remove a classe 'active' de todas as imagens
        image.classList.remove('active');
        // Se o índice da imagem atual (i) for igual ao índice fornecido (index),
        // adiciona a classe 'active' à imagem correspondente
        if (i === index) {
            image.classList.add('active');
        }
    });
}

// Função para avançar para a próxima imagem no slider
function nextImage() {
    // Incrementa o índice atual em 1, e usa o operador % (módulo) para
    // garantir que o índice volte a 0 quando atingir o final do array de imagens
    currentIndex = (currentIndex + 1) % images.length;
    // Mostra a imagem correspondente ao novo índice
    showImage(currentIndex);
}

// Função para iniciar o slider
function startSlider() {
    // Mostra a primeira imagem ao iniciar
    showImage(currentIndex);
    // Define um intervalo para mudar a imagem a cada 3 segundos (3000 milissegundos)
    setInterval(nextImage, 3000);
}

// Chama a função para iniciar o slider
startSlider();


