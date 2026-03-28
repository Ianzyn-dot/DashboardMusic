<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="tabelas.css">
</head>
<body>

<div class="dashboard-container">
    <?php include 'menu.php';?>
    
    <main>
        <div class="header-content">
            <div class="header-title">
                <h2>Amigos</h2>
                <p>Visualize e gerencie a sua lista de amigos.</p>
            </div>
            <a href="cad-amigos.php" class="btn-add"><i class="fa-solid fa-plus"></i> Adicionar Novo Amigo</a>
        </div>

        

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Ian Barrueco</td>
                        <td><span class="badge ativo">Ativo</span></td>
                        <td><button class="btn-icon"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="btn-icon"><i class="fa-solid fa-trash"></i></button></td>
                    </tr>

                    <tr>
                        <td>02</td>
                        <td>Mariani Della Líbera</td>
                        <td><span class="badge inativo">Inativo há 2 minutos</span></td>
                        <td><button class="btn-icon"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="btn-icon"><i class="fa-solid fa-trash"></i></button></td>
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
                    </tr>
                </tbody>
                <tfoot>
                    <td colspan="6" align="right"> Informação da quantidade de registro...</td>
                </tfoot>
            </table>
        </div>
    </main>
</div>

<?php include 'footer.php';?>

</body>
</html>