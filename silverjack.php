<?php
    $names = array(
        "Misael Aguilar",
        "Doug Alexander",
        "Tristan Anderson",
        "Erica Au",
        "Sonali Bharat",
        "Lucas Childers",
        "Jack Cousineau",
        "Brandon Cruz",
        "Ediberto Cruz Cruz",
        "Luigi D'Antonio",
        "Ben Dagg",
        "Jessie Dowding",
        "Cristian Galvan",
        "Alan Garcia",
        "Meya Gorbea",
        "Bianca Jaramillo",
        "Matt Johnson",
        "Morgan Juran",
        "Monique La Croix",
        "Scott Ligon",
        "Adrian Martinez",
        "Sean McCarthy",
        "Hardesh Mohar",
        "Daniel Mora",
        "Luis Mora",
        "Bryant Ng",
        "Chris Ngo",
        "Tim Perry",
        "Anna Pomelov",
        "Bryan Rodriguez",
        "Alex Ruvalcaba",
        "Josh Shallow",
        "Mateo Sixtos",
        "Austin Thao",
        "Garrett Tibbetts",
        "Michael Vargas",
        "Ulysses Vega",
        "Edwin Yantis");
        
    function getPlayers($num){
        $players = array_rand($names, $num);
        print_r($players);
    }

?>


<!DOCTYPE html>

<html>

<head>
     <meta charset="utf-8">
     <title>Lab 3: Silverjack</title>
</head>

<body>
    <?php
        getPlayers(4);
    ?>
</body>

</html>