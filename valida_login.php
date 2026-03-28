<?php 
    // Dados de acesso "Chumbbados"
    $userMaster = "admin@log.com";
    $passMaster = "123456";

    //Recebimento via POST 
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email == $userMaster && $senha == $passMaster) {
        // Sucesso: Vai para o Dashboard
        header("Location: index.php");
    } else {
        // Erro: Volta para o login com um sinalizador
        header("Location: login.php?erro=1");
    }
    exit();
?>

<?php if (isser($_GET['erro'])): ?>
    <p class="erro-alert">Usuário ou senha incorretos!</p>
<?php endif; ?>