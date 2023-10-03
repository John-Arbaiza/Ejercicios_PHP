<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programación</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= BASE_DIR; ?>css/Style.css">
</head>
<body>

<header>
    <nav>
        <h1>
           <a href="index.php?controller=Home&action=showHome"> PHP ORIENTADO A OBJETOS</a>
        </h1>

        <ul>
            <li><a href="index.php?controller=Home&action=showHome">Home</a></li>
            <li><a href="index.php?controller=About&action=showAbout">About</a></li>
            <li><a href="index.php?controller=Contact&action=showContact">Contact</a></li>
        </ul>
    </nav>
</header>
    