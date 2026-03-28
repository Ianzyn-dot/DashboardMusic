<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cad-Playlist</title>
        <link rel="stylesheet" href="index.css">

    <link rel="stylesheet" href="cadastros.css">
</head>
<body>
    <div class="dashboard-container">

<?php include 'menu.php';?>

    <main>

        <section class="card-form">
            <div class="form-header">
                <h2><i class="fa-solid fa-user-plus"></i> Nova Playlist</h2>
                <p>Preencha do dados abaixo para criar uma nova Playlist.</p>
            </div>

            <form action="processa.php" method="POST">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" placeholder="Ex: Playlist Pão de Batata" required>
                </div>

                <div class="form-group">
                    <label for="nome">Detalhes</label>
                    <input type="text" id="nome" name="nome" placeholder="Escreva um pouco sobre a sua nova playlist" required>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-save"> <i class="fa-solid fa-floppy-disk"></i>Salvar</button>
                    <a href="playlist.php" class="btn-cancel">Cancelar</a>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
                </div>
            </form>
        </section>

    </main>
</div>
<?php include 'footer.php';?>

</body>
</html>