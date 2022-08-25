<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Pagina web basica</title>
</head>
<body>
   
    
    <div class="head">

        <div class="logo">
            <a href="in.html">Mictlan Gaming</a>

        </div>

<div class="bienvenido">
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>
</div>


        <nav class="navbar">
            <a href="in.html">Productos</a>
        </nav>

    </div>

    <header class="content header">
        <h2 class="title">Inicio</h2>
        <p>
            integrantes:
        Manzano Gomez Jose Angel,
        Vidales Estrada Saul Arturo,
        Gutierrez Remigio Luis Manuel</p>

        <div class="btn-home">
            <a href="in.html" class="btn">Saber mas</a>
            <a href="https://www.youtube.com/watch?v=IYhCB1r6UCo&t=1s" class="btn">Saber mas</a>
        </div>
    </header>

    <section class="content sau">

        <h2 class="title">Productos</h2>
        <p>   integrantes:
        Manzano Gomez Jose Angel,
        Vidales Estrada Saul Arturo,
        Gutierrez Remigio Luis Manuel</p>
        
        <div class="box-container">

            <div class="box">
                <i class="fab fa-angular"></i>
                <h3>Lorem</h3>
                <p>labore molestias consectetur veniam</p>
            </div>
            <div class="box">
                <i class="fab fa-apple"></i>
                <h3>Lorem</h3>
                <p>labore molestias consectetur veniam</p>
            </div>
            <div class="box">
                <i class="fab fa-android"></i>
                <h3>Lorem</h3>
                <p>labore molestias consectetur veniam</p>
            </div>

        </div>

    </section>

    <section class="content about">

        <h2 class="title">Nosotros</h2>
        <p>La combinación de una amplia oferta comercial, una experiencia de compra emocionante, infraestructura sólida y enfoque de rentabilidad nos permiten servir al cliente y así contar con su preferencia.
        </p>

        <a href="https://www.youtube.com/watch?v=IYhCB1r6UCo&t=1s" class="btn">Saber mas</a>

    </section>

    <section class="content price">

        <article class="contain">
            <h2 class="title">Precio</h2>
            <p>las mejores ofertas de verano que puedes tener aprobecha nuestras promociones.
            </p>

            <a href="https://www.youtube.com/watch?v=IYhCB1r6UCo&t=1s" class="btn">Saber precio</a>

        </article>

    </section>

    <section class="content contact">
        <h2 class="title">Contacto</h2>
        <p>48481548</p>
        <figure class="map">
            <img src="IMAGEN/mapa.png" height="220px" width="100%" alt="mapa">
        </figure>
    </section>
</body>
</html>