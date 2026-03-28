<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupos</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="tabelas.css">
</head>
<body>

<div class="dashboard-container">
    <?php include 'menu.php';?>
    
    <main>
        <div class="header-content">
            <div class="header-title">
            <h2>Seus Grupos</h2>
            <p>Visualize e gerencie os grupos que você está participando com seus amigos.</p>
            </div>
        <a href="cad-grupos.php" class="btn-add"><i class="fa-solid fa-plus"></i> Criar Novo Grupo</a>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Membros</th>
                        <th>Cargo</th>
                        <th>Visto</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Grupo 01</td>
                        <td>5</td>
                        <td>Administrador</td>
                        <td><span class="badge ativo">Online</span></td>
                        <td><button class="btn-icon"><i class="fa-solid fa-pen-to-square"></i></button></td>
                        <button class="btn-icon"><i class="fa-solid fa-trash"></i></button></td>
                    </tr>

                    <tr>
                        <td>02</td>
                        <td>Grupo 02</td>
                        <td>10</td>
                        <td>Usuário</td>
                        <td><span class="badge inativo">Offline há 10 dias</span></td>
                        <td><button class="btn-icon"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="btn-icon"><i class="fa-solid fa-trash"></i></button>
                        </td>
                        
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