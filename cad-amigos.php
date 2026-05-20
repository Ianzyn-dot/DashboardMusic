<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cad-Amigo</title>
        <link rel="stylesheet" href="index.css">

    <link rel="stylesheet" href="cadastros.css">
</head>
<body>
    <div class="dashboard-container">

<?php include 'menu.php';?>

    <main>

        <section class="card-form">
            <div class="form-header">
                <h2><i class="fa-solid fa-user-plus"></i> Adicionar Novo Amigo</h2>
                <p>Preencha do dados abaixo para adicionar uma nova amizade.</p>
            </div>

            <form action="processa.php" method="POST">
                <div class="form-group">
                    <label for="nome">Nome de Usuário</label>
                    <input type="text" id="nome" placeholder="Digite o nome" required>

                        <select id="status">
                            <option value="Ativo">Ativo</option>
                            <option value="Inativo">Inativo</option>
                        </select>

                </div>

                <div class="form-row">
                    <div class="form-group flex-1">
                        <label for="senha">Código</label>
                        <input type="password" id="senha" name="senha" required>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="button" class="btn-save" id="btn-salvar"> <i class="fa-solid fa-floppy-disk"></i>Salvar</button>
                    <a href="amigos.php" class="btn-cancel">Cancelar</a>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
                    
                </div>
            </form>
        </section>

    </main>
</div>
<?php include 'footer.php';?>

    <script>

    const btnSalvar = document.getElementById('btn-salvar');

    btnSalvar.addEventListener('click', function() {

        const nome = document.getElementById('nome').value;
        const status = document.getElementById('status').value;

        console.log(nome);
        console.log(status);

        const novoAmigo = {
            id: Date.now(),
            nome: nome,
            status: status
        };

        let listaAmigos = JSON.parse(localStorage.getItem('amigos')) || [];

        listaAmigos.push(novoAmigo);

        localStorage.setItem('amigos', JSON.stringify(listaAmigos));

        alert('Amigo cadastrado com sucesso!');

        window.location.href = 'amigos.php';

    });

    </script>

</body>
</html>