<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APP de Músicas</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <div class="dashboard-container">
        <nav>
            <ul>
                <li><a href="#">Início</a></li>
                <li><a href="#">Playlists</a></li>
                <li><a href="#">Favoritas</a></li>
                <li><a href="#">Perfil</a></li>

                <div class="perfil-usuario">
                    <img src="https://ui-avatars.com/api/?name=Ian+Barrueco&background=008080&color=fff" alt="Avatar">
                    <span>Ian Barrueco</span>
                </div>

            </ul>
        </nav>

        <main>
            <section class="container-cards">

                <article>
                    <h2>Recentes</h2>
                    <p>Vizualize as Playlists que você escutou recentemente.</p>
                    <a href="#" class="btn">Acessar</a>
                </article>

                <article>
                    <h2>Artistas favoritos</h2>
                    <p>Veja o perfil e as músicas dos artistas qe você mais gosta.</p>
                    <a href="#" class="btn">Acessar</a>
                </article>

                <article>
                    <h2>Lançamentos de hoje</h2>
                    <p>Veja as músicas lançadas que foram lançadas hoje.</p>
                    <a href="#" class="btn">Acessar</a>
                </article>

            </section>
        </main>    
    </div>

<footer>
    <p>&copy; <?php echo date('Y'); ?> - Desenvolvido por Ian na aula de Web I</p>
</footer>

</body>
</html>