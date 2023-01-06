<?php


namespace mvc\controller;

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('AController.php');
require_once(__DIR__ . '/../model/managers/ActivitieSectorManager.php');

use mvc\model\entities\ActivitieSector;
use mvc\model\manager\ActivitieSectorManager;

class ActivitiesSectors extends AController
{
    public function __construct()
    {
        $this->manager = new ActivitieSectorManager();
    }

    public function viewActivitiesSectors(): void
    {
        $title = 'Liste des secteurs d`activités';
        $ActivitiesSectors = $this->findAll();

        require(__DIR__ . '/../view/viewActivitiesSectors.php');
    }

    public function viewActivitieSector($id): void
    {
        $title = 'Détail du secteur d`activité';
        $ActivitieSector = $this->findById($id);


        if ($ActivitieSector) {
            require(__DIR__ . '/../view/viewActivitieSector.php');
        } else {
            $error = 'id du secteur d`activité non valide';
            require(__DIR__ . '/../view/error.php');
        }
    }

    public function addActivitieSector(): void
    {
        $ActivitieSector = new ActivitieSector(null, $_POST['Libelle']);
        $this->insert($ActivitieSector);
        header('Location: index.php?action=viewActivitiesSectors');
    }

    //add function for delete ActivitieSector
    public function deleteActivitieSector($id): void
    {
        $this->deleteActivitieSector($id);
        header('Location: index.php?action=viewActivitiesSectors');
    }

    public function updateActivitieSector($id): void
    {
        $ActivitieSector = new ActivitieSector($id, $_POST['Libelle']);
        $this->update($ActivitieSector);
        header('Location: index.php?action=viewActivitiesSectors');
    }
}
