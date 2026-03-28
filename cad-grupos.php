<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cad-Grupos</title>
        <link rel="stylesheet" href="index.css">

    <link rel="stylesheet" href="cadastros.css">
</head>
<body>
    <div class="dashboard-container">

<?php include 'menu.php';?>

    <main>

        <section class="card-form">
            <div class="form-header">
                <h2><i class="fa-solid fa-user-plus"></i> Novo Grupo</h2>
                <p>Preencha do dados abaixo para registrar um novo grupo.</p>
            </div>

            <form action="processa.php" method="POST">
                <div class="form-group">
                    <label for="nome">Nome do grupo</label>
                    <input type="text" id="nome" name="nome" placeholder="Ex: Pão de Batata" required>
                </div>

                <div class="form-group">
                    <label for="email">Quantidade Membros</label>
                    <input type="int" id="number" name="number" placeholder="" required>
                </div>

                <div class="form-row">
                    <div class="form-group flex-1">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" required>
                    </div>

                    <div class="form-group flex-1">
                        <label for="nivel">Nível</label>
                        <select id="nivel" name="nivel">
                            <option value="2">Administrador</option>
                        </select>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-save"> <i class="fa-solid fa-floppy-disk"></i>Salvar</button>
                    <a href="grupos.php" class="btn-cancel">Cancelar</a>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
                </div>
            </form>
        </section>

    </main>
</div>
<?php include 'footer.php';?>

</body>
</html>