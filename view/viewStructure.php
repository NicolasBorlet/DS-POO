<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>
<body>
<p>
<?php
if ($structure) { ?>
Id : <?= $structure->getId() ?><br/>
Libellé : <?= $structure->getLibelle() ?><br/>
<?php } ?>
</p>
<p>
<a href="index.php?action=viewStructures">Liste des comptes</a><br/>
<a href="index.php?action=viewActivitiesSectors">Liste des autorisations</a>
</p>
</body>
</html>
