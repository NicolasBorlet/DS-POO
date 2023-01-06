<?php

use mvc\model\entities\ActivitieSector;

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>

<body>
    <p>
        <?php
        if ($ActivitieSector) { ?>
            Id : <?= $ActivitieSector->getId() ?><br />
            Libelle : <?= $ActivitieSector->getNom() ?><br />
        <?php } ?>
    </p>
    <p>
        <a href="index.php?action=viewStructures">Liste des structures</a><br />
        <a href="index.php?action=view$ActivitiesSectors">Liste des secteurs d'activités</a>
    </p>
</body>

</html>