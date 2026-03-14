<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário</title>
    <link rel="stylesheet" href="usuarios.css">
</head>
<body>

<?php include 'menu.php';?>
    
    <main>
        <div class="header-content">
            <h2>Gestão de Usuários</h2>
            <p>Visualize e gerencie as permissões dos usuários de sistema.</p>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Acesso</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Ian Barrueco</td>
                        <td>ianzinhobarrueco@gmail.com</td>
                        <td>Administrador</td>
                        <td><span class="badge ativo">Ativo</span></td>
                        <td><button class="btn-icon"><i class="fa-solid fa-pen-to-square"></i></button></td>
                    </tr>

                    <tr>
                        <td>02</td>
                        <td>Mariani Della Líbera</td>
                        <td>mari@gmail.com</td>
                        <td>Editor</td>
                        <td><span class="badge ativo">Ativo</span></td>
                        <td><button class="btn-icon"><i class="fa-solid fa-pen-to-square"></i></button></td>
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

<?php include 'footer.php';?>

</body>
</html>