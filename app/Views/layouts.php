<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follows">
    <meta name="description" content="Hola mundo conbase de datos, hola + CRUD">
    <title>HOLA MUNDO</title>
    <link rel="icon" href="<?= BASE_URL ? rtrim(BASE_URL,'/'): ''?>/images/logo.ico">
    <link rel="stylesheet" href="<?= BASE_URL ? rtrim(BASE_URL, '/'): ''?>/assets/css/estilos.css">
</head>
<body>
    <header class="container">
        <h1>
        </h1>
        <nav>
            <a href="<?= BASE_URL ? rtrim(BASE_URL, '/'): ''?>/mensajes">Mensajes</a>
            <a href="<?= BASE_URL ? rtrim(BASE_URL, '/'): ''?>/mensajes">Mensajes</a>
        </nav>
    </header>
    <main class="container">
        <?php include $viewFile;?>
    </main>
    <footer class="container footer">
        <small>
            Hecho con corazón en PHP MVC
        </small>
    </footer>
</body>
</html>