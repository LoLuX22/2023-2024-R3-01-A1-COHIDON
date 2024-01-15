<?php 
    require_once("controllers/MainController.php");
?>
<head>
    <link href="public/css/main.css" rel="stylesheet">
</head>
<html>
    <body>
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

            <?php
                foreach ($listPokemon as $pokemon)
                {
                    echo
                    ("
                        <tr>
                            <td>$pokemon[idPokemon]</td>
                            <td>$pokemon[nomEspece]</td>
                            <td>$pokemon[description]</td>
                            <td>$pokemon[typeOne] $pokemon[typeTwo]</td>
                            <td><img src=\"$pokemon[urlImg]\" alt='Photo d'un $pokemon[nomEspece]'><img src=public/css/image/Dracofeu.png alt='image dracofeu'></td>
                            <td><a href= index.php?action=edit-pokemon&idPokemon=$pokemon[idPokemon]><img src=public/css/image/Pen.png alt='bouton de modification'></a> 
                                <a href=index.php?action=del-pokemon&idPokemon=$pokemon[idPokemon]><img src=public/css/image/Bin.png alt='bouton de supression'></a></td>
                        </tr>
                    ");
                }
            ?>
        </table>
    </body>
</html>