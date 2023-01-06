<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>

<body>
    <table>
        <?php
        foreach ($ActivitiesSectors as $ActivitieSector) {
            $encode_id = urlencode($ActivitieSector->getId());
        ?>
            <tr>
                <td>
                    <label><?= $ActivitieSector->getLibelle(); ?></label>
                    <input type="submit" name="viewActivitieSector" value="Détails">
                    <a href="index.php?action=updateActivitieSector&id=<?php echo $encode_id; ?>">Modifier</a>
                    <a href="index.php?action=deleteActivitieSector&id=<?php echo $encode_id; ?>">Supprimer</a>
                </td>
            </tr>

        <?php
        }
        ?>
    </table>
    <p>
    <form method="post" action="index.php?action=addActivitieSector">
        <table>
            <tr>
                <td>Libellé</td>
                <td><input required type="text" name="Libelle"></td>
            </tr>
        </table>
        <input type="submit" name="add" value="Ajouter">
    </form>
    </p><a href="index.php?action=viewStructures">Liste des structures</a>
</body>

</html>