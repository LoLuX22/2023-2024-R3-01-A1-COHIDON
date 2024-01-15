<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="public/css/main2.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $titre ?></title>
</head>

<body>
<header>
    <!-- Menu -->
    <nav>
    <button href="index.php"><a href="index.php">Pokémons</a></button>
        <button><a href="index.php?action=add-pokemon">Ajouter un Pokémon</a></button>
        <button><a href="index.php?action=add-type-pokemon">Ajouter un type de Pokémon</a></button>
        <button><a href="index.php?action=search">Rechercher un Pokémon</a></button>
    </nav>
</header>
<!-- #contenu -->
<main id="contenu">
<?=$contenu ?>
</main>
<footer>

</footer>
</body>

</html>
