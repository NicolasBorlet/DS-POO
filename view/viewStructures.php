<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>
<body>
<?php
foreach ($structures as $structure) { ?>
    <form method="post" action="index.php?action=viewStructure&id=<?= $structure->getId()?>">
        <input type="submit" name="viewStructure" value="Détails"/>
    </form>
<?php
}
?>
<p><form method="post" action="index.php?action=addAccount">
    <table>
        <tr><td>Nom</td><td><input required type="text" name="name"></td></tr>
        <tr><td>Statut</td><td><input required type="text" name="statement"></td></tr>
        <tr><td>Code Postal</td><td><input required type="text" name="postalCode"></td></tr>
        <tr><td>Ville</td><td><input required type="text" name="ville"></td></tr>
        <tr><td>Rue</td><td><input type="text" name="rue"></td></tr>
    </table>
    <input type="submit" name="add" value="Ajouter">
</form>
</p>
<p>
<a href="index.php?action=viewActivitiesSectors">Liste des secteurs d'activités</a>
</p>
</body>
</html>
