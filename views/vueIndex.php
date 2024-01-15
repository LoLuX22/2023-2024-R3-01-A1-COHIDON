<link rel="stylesheet" href="public/css/main2.css">

<h1>Pokédex de <?= $nomDresseur ?></h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Pokemon</th>
            <th>Description</th>
            <th>Types</th>
            <th>Image</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($listPokemon as $pokemon) : ?>
        <tr>
                <td><?= $pokemon->getIdPokemon() ?></td>
                <td><?= $pokemon->getNomEspece() ?></td>
                <td><?= $pokemon->getDescription() ?></td>
                <td><?= $pokemon->getTypeOne() . " " . $pokemon->getTypeTwo()  ?></td>
                <td><img src="<?= $pokemon->getUrlImg() ?>" alt="<?= $pokemon->getNomEspece() ?>"></td>
                <td>
                    <a href="modifier-pokemon?idPokemon=<?= $pokemon->getIdPokemon() ?>"><img src="Images/Pen.png" alt="Modifier"></a>
                    <a href="supprimer-pokemon?idPokemon=<?= $pokemon->getIdPokemon() ?>"><img src="Images/Bin.png" alt="Supprimer"></a>
                </td>
            </tr>
    <?php endforeach; ?>

    </body>
</table>