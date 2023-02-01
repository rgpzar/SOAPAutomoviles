<?php
$marca = isset($_GET['marca']) ?? null;


?>
<!DOCTYPE html>
<html>
<head>
    <style>
        figure {
            border: 1px #cccccc solid;
            padding: 4px;
            margin: auto;
        }

        figcaption {
            background-color: navy;
            color: white;
            font-weight: bolder;
            font-style: italic;
            padding: 2px;
            text-align: center;
        }
    </style>
</head>
<body>
<h1>Modelos disponibles marca: <?=$marca?></h1>
    <figure>
        <img src="images/<?=strtolower($marca)?>.jpg" alt="logo <?=$marca?>" />
        <figcaption>Serie 1</figcaption>
    </figure>
    <figure>
        <img src="images/<?=strtolower($marca)?>.jpg" alt="logo <?=$marca?>" />
        <figcaption>Serie 3</figcaption>
    </figure>
    <figure>
        <img src="images/<?=strtolower($marca)?>.jpg" alt="logo <?=$marca?>" />
        <figcaption>Serie 5</figcaption>
    </figure>
    <figure>
        <img src="images/<?=strtolower($marca)?>.jpg" alt="logo <?=$marca?>" />
        <figcaption>Serie 6</figcaption>
    </figure>
    <figure>
        <img src="images/<?=strtolower($marca)?>.jpg" alt="logo <?=$marca?>" />
        <figcaption>Serie 7</figcaption>
    </figure>

</body>
</html>