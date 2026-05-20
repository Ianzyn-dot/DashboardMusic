<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="tabelas.css">
</head>
<body>

<div class="dashboard-container">
    <?php include 'menu.php';?>
    
    <main>
        <div class="header-content">
            <div class="header-title">
            <h2>Playlists</h2>
            <p>Visualize e gerencie suas Playlists.</p>
            </div>
        <a href="cad-playlist.php" class="btn-add"><i class="fa-solid fa-plus"></i> Adicionar Nova Playlist</a>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Conteudo</th>
                        <th>Categoria</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody id="tabela-playlists">
                    <tr>
                        <td>01</td>
                        
                        <td><span class="badge ativo">Tocando</span></td>
                        <td><button class="btn-icon"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button class="btn-icon"></button></td>
                        
                    </tr>

                    <tr>
                        <td>02</td>
                        
                        <td><span class="badge inativo">Começar</span></td>
                        <td><button class="btn-icon"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="btn-icon"></button></td>
                       
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

    <script>

function carregarPlaylists() {

    const tabela = document.getElementById('tabela-playlists');

    let listaPlaylists = JSON.parse(localStorage.getItem('playlists')) || [];

    tabela.innerHTML = '';

    listaPlaylists.forEach(function(playlist, index) {

        tabela.innerHTML += `

        <tr>
            <td>${index + 1}</td>
            <td>${playlist.nome}</td>
            <td>${playlist.status}</td>

            <td>
                <button class="btn-icon" onclick="excluirPlaylist(${index})">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </td>
        </tr>

        `;

    });

}

function excluirPlaylist(index) {

    if(confirm('Deseja excluir esta playlist ?')) {

    let listaPlaylists = JSON.parse(localStorage.getItem('playlists')) || [];

    listaPlaylists.splice(index, 1);

    localStorage.setItem('playlists', JSON.stringify(listaPlaylists));

    carregarPlaylists();

    }

}

carregarPlaylists();

</script>

</body>
</html>