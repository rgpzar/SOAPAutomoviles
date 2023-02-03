<?php
require_once "AutoClient.php";
$marca = isset($_GET['marca']) ? $_GET['marca']: null;
$modelos = $client->obtenerModelosPorMarca($marca);
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

        img{
            width: 25%;
        }
    </style>
</head>
<body>
<h1>Modelos disponibles marca: <?=$marca?></h1>
    <?php
    foreach ($modelos as $key=>$value) {
        ?>
    <figure>
        <img src="images/<?= strtolower($marca) ?>.png" alt="logo <?= $marca ?>" />
        <figcaption><?=$value['modelo']?></figcaption>
    </figure>
    <?php
    }
    ?>
</body>
</html>