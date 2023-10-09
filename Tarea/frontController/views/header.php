<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STORE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASE_DIR; ?>CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <nav>
            <h1>
                <a href="<?= BASE_DIR; ?>Home/index/">
                 CONFIANZA STORE <i class="fa-solid fa-store"></i>
                </a>
            </h1>
            
            <ul>
                <li><a href="<?= BASE_DIR; ?>Home/index/">Home</a></li>
                <li><a href="<?= BASE_DIR; ?>Cliente/">Clientes</a></li>
                <li class="final"><a href="<?= BASE_DIR; ?>Cliente/new/">Registrar</a></li>
            </ul>
        </nav>
    </header>