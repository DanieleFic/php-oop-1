<?php

    require_once __DIR__. "./classes/movie.php";

    $filmArr = [
        new Film("The Batman","Cinecomic","3 marzo 2022"),
        new Film("Joker","Cinecomic","3 ottobre 2019")
    ];
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Es oop</title>
    </head>
    <body>
            <ul>
                <?php
                foreach($filmArr as $elemento){
                    echo "<li>{$elemento->getfilm()}</li>";
                }?>
            </ul>
    </body>
    </html>

