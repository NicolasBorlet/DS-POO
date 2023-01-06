<?php

namespace mvc\controller;

require_once('AController.php');
require_once(__DIR__ . '/../model/managers/StructureManager.php');

use mvc\model\entities\Structure;
use mvc\model\manager\StructureManager;

class StructureController extends AController
{
    public function __construct()
    {
        $this->manager = new StructureManager();
    }

    public function viewStructures(): void
    {
        $title = 'Liste des structures';
        $structures = $this->manager->findAll();

        require(__DIR__ . '/../view/viewStructures.php');
    }

    public function viewStructure($id): void
    {
        $title = 'Détail de la structure';
        $structure = $this->manager->findById($id);

        if ($structure) {
            require(__DIR__ . '/../view/viewStructure.php');
        } else {
            $error = 'id de structure non valide';
            require(__DIR__ . '/../view/error.php');
        }
    }

    public function addStructure(): void
    {
        $structure = new Structure($_POST['NOM'], $_POST['ESTASSO'], $_POST['ADRESSE'], $_POST['CP'], $_POST['VILLE']);
        $this->manager->insert($structure);

        header('Location: index.php?action=viewStructures');
    }
}
