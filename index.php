<?php
require_once('./controller/StructureController.php');
require_once('./controller/ActivitiesSectors.php');

use mvc\controller\StructureController;
use mvc\controller\ActivitiesSectors;

// ajouter si action non reconnue => erreur au lieu de page d'acceuil
try {
    if (isset($_GET['action'])) {
        if (stripos($_GET['action'], 'Structure')) {
            $controler = new StructureController();
            switch ($_GET['action']) {
                case 'viewStructure':
                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                        $controler->viewStructure($_GET['id']);
                    } else {
                        $error = 'Erreur : mauvais identifiant<br/>';
                    }
                    break;
                case 'viewStructures':
                    $controler->viewStructures();
                    break;
                case 'addStructure':
                    if (isset($_POST['NOM'], $_POST['ESTASSO'], $_POST['CP'], $_POST['VILLE'], $_POST['RUE'])) {
                        $controler->addStructure();
                    } else {
                        $error = 'Erreur de paramètres<br/>';
                    }
                    break;
                default:
                    $error = 'Erreur : action non reconnue<br/>';
                    break;
            }
        } elseif (stripos($_GET['action'], 'Activitie')) {
            $controler = new ActivitiesSectors();
            switch ($_GET['action']) {
                case 'viewActivitieSector':
                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                        $controler->viewActivitieSector($_GET['id']);
                    } else {
                        $error = 'Erreur : mauvais identifiant<br/>';
                    }
                    break;

                case 'viewActivitiesSectors':
                    $controler->viewActivitiesSectors();
                    break;

                case 'addActivitieSector':
                    if (isset($_POST['Libelle'])) {
                        $controler->addActivitieSector();
                    } else {
                        $error = 'Erreur de paramètres<br/>';
                    }
                    break;
                case 'deleteActivitieSector':
                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                        $controler->deleteActivitieSector($_GET['id']);
                    } else {
                        $error = 'Erreur : mauvais identifiant<br/>';
                    }
                    break;
                case 'updateActivitieSector':
                    if (isset($_POST['Libelle'], $_POST['id']) && $_POST['id']) {
                        $controler->updateActivitieSector($_POST['id']);
                    } else {
                        $error = 'Erreur de paramètres<br/>';
                    }
                    break;
                default:
                    $error = 'Erreur : action non reconnue<br/>';
                    break;
            }
        } else {
            $error = 'Erreur : action non reconnues<br/>';
        }
    } else {
?>
        <a href="index.php?action=viewStructures">Liste des structures</a><br />
        <a href="index.php?action=viewActivitiesSectors">Liste des autorisations</a>
<?php
    }
} catch (Exception $ex) {
    $error = 'Error ' . $ex->getCode() . ' : ' . $ex->getMessage() . '<br/>' . str_replace(
        '\n',
        '<br/>',
        $ex->getTraceAsString()
    );
}

if (isset($error)) {
    require(__DIR__ . '/view/error.php');
}
?>