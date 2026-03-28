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
                        <input type="password" name="senha" placeholder="Senha" required>
                    </div>

                <button type="submit" class="btn-login">Acessar conta</button>

                </form>
            </div>

        </div>

    </body>
</html>