<?php
   require_once __DIR__ . '/data/actors.php';
   require_once __DIR__ . '/data/directors.php';
   require_once __DIR__ . '/data/movies.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section id="movies">
        <?php var_dump($movies[0]) ?>
        <h1>Lista dei Film</h1>
        <ul>
            <?php foreach($movies as $movie) : ?>
            <li> <h4>Titolo : <?php echo($movie->title)?></h3></li>
            <ul>
                <li> <p>Genere: <?php echo($movie->type) ?></p></li>
                <li> <p>Durata: <?php echo($movie->length) ?></p></li>
                <li> <p>Regista: <?php echo($movie->director->getFullName()) ?></p></li>
                <?php foreach($actors as $actor) : ?>
                    <li> <p>Attori: <?php echo($actor->getFullName()) ?></p></li>
                <?php endforeach; ?>
                

            </ul>
            <?php endforeach; ?>
        </ul>
    </section>
        
</body>
</html>