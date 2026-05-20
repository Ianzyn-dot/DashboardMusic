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
                    <input type="text" id="nome-grupo" placeholder="Nome do grupo" required>

                        <select id="status-grupo">
                            <option value="Publico">Publico</option>
                            <option value="Privado">Privado</option>
                        </select> 
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
                    <button type="button" class="btn-save" id="btn-salvar-grupo"> <i class="fa-solid fa-floppy-disk"></i>Salvar</button>
                    <a href="grupos.php" class="btn-cancel">Cancelar</a>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
                </div>
            </form>
        </section>

    </main>
</div>
<?php include 'footer.php';?>

    <script>

    const btnSalvarGrupo = document.getElementById('btn-salvar-grupo');

    btnSalvarGrupo.addEventListener('click', function(event) {

        event.preventDefault();

        const nome = document.getElementById('nome-grupo').value;
        const status = document.getElementById('status-grupo').value;

        const novoGrupo = {
            id: Date.now(),
            nome: nome,
            status: status
        };

    let listaGrupos = JSON.parse(localStorage.getItem('grupos')) || [];

    listaGrupos.push(novoGrupo);

    localStorage.setItem('grupos', JSON.stringify(listaGrupos));

    alert('Grupo cadastrado com sucesso!');

    window.location.href = 'grupos.php';

});

</script>

</body>
</html>