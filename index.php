<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mega Sena</title>
</head>
<body>
    <?php
        $contador = isset($_GET['temp']) ? $_GET['temp'] : 0;

    ?>
    <h1>Mega Sena <img src="https://img.icons8.com/color/48/000000/leprechaun-hat.png"/></h1>
    <div class="box">
        <div class=pass>
            <div class="pass-luck"><?php echo $contador == 0 ? "?" : rand(1, 60)?></div>
            <div class="pass-luck"><?php echo $contador == 0 ? "?" : rand(1, 60)?></div>
            <div class="pass-luck"><?php echo $contador == 0 ? "?" : rand(1, 60)?></div>
            <div class="pass-luck"><?php echo $contador == 0 ? "?" : rand(1, 60)?></div>
            <div class="pass-luck"><?php echo $contador == 0 ? "?" : rand(1, 60)?></div>
            <div class="pass-luck"><?php echo $contador == 0 ? "?" : rand(1, 60)?></div>
        </div>
    </div>
    <div class="button">
        <form action="?temp=1" method="post">
            <button>Estou com sorte</button>
        </form>
    </div>
    <?php
        
     ?>
</body>
</html>