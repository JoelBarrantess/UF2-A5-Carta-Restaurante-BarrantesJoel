<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de la Brasería</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <script src="https://kit.fontawesome.com/3d804e666f.js" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar">
    <div class="container">
        <h1 class="navbar-brand">Brasería La Parrilla</h1>
    </div>
</nav>
<br>
<br>
<br>
<br>

<div class="container">
    <?php
    $menu = simplexml_load_file("./xml/carta.xml");
    foreach ($menu->plato as $plato) {
        echo "<div class='plato item'>";
        echo "<img src='./img/$plato->imagen' alt='$plato->nombre'>";
        echo "<div class='contenido'>";
        echo "<h2>$plato->nombre</h2>";
        echo "<p>$plato->descripcion</p>";
        
        // Verificar si el plato contiene gluten y mostrar el icono correspondiente
        if ($plato->gluten == 'true') {
            echo "<p> <span class='icono-gluten'><i class='fa-solid fa-wheat-awn-circle-exclamation' style='color: #db0a0a;'></i></span><p>Contiene Gluten!</p>";
        } else {
            echo "<p>No contiene Gluten</p>";
        }
        
        echo "<p>Calorías: $plato->calorias</p>";
        echo "<p>Precio: $plato->precio</p>";
        echo "</div>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
