<?php
    require_once __Dir__ . "/classes/Movie.php";
    $film = [];
    $film[] = new Movie("Dune", "Sci-fi", 2021, "english");
    $film[] = new Movie("Arrival", "Thriller ", 2016, "english");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OOP</title>
    </head>
    <body>
        <?php foreach($film as $movie) :?>
            <ul>
                <li><?= $movie->getTitle(); ?>, <?= $movie->getYear(); ?></li>
            </ul>
        <?php endforeach;?>
    </body>
</html>