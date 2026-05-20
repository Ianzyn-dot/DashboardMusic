<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">

</head>
    <body>
        
        <div class="login-container">

            <div class="login-card">

                <div class="login-header">
                    <i class="fa-solid fa-newspaper logo-icon"></i>
                    <h2>Login</h2>
                </div>

                <form action="valida_login.php" method="POST">

                    <div class="form-group">
                        <input type="email" name="email" placeholder="E-mail" required>
                    </div>

                    <div class="form-group">
                        <div style="margin-bottom: 15px";>
                            <input type="password" id="senha-login" placeholder="Digite sua senha">
                            <span id="icone-olho" style="cursor: pointer; margin-left: -30px;"> </span>
                        </div>
                        <input type="password" name="senha" placeholder="Senha" required>
                    </div>

                <button type="submit" class="btn-login">Acessar conta</button>

                </form>
            </div>

        </div>

    <script>
        //1. Capura os elementos de HTML
        const inputSenha = document.getElementById('senha-login');
        const iconeOlho = document.getElementById('icone-olho');

        //2. Cria o ouvinte de cliques no ícone de olho
        iconeOlho.addEventListener('click', function() {
            //3. Lógica de altenãncia (If/Else)
            if (inputSenha.type === 'password') {
                inputSnenha.type = 'text'; // Fica visível
                iconeOlho.innerText = '🙈'; // Muda o Emoji
            }else {
                inputSenha.type = 'password'; // Fica oculto
                iconeOlho.innerText = '👁️'; // Volta o Emoji
            }

        });
    </script>

    </body>
</html>