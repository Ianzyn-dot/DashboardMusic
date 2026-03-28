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
        <?php include 'menu.php';?>

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

<?php include 'footer.php';?>

</body>
</html>