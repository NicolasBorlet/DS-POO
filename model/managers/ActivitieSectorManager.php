<?php

namespace mvc\model\manager;

require_once(__DIR__ . '/../entities/ActivitieSector.php');
require_once(__DIR__ . '/../entities/Entity.php');
require_once('PDOManager.php');

use mvc\model\entities\ActivitieSector;
use mvc\model\entities\Entity;
use \PDOStatement;

class ActivitieSectorManager extends PDOManager
{
    public function findById(int $id): ?Entity
    {
        $stmt = $this->executePrepare("select * from activitiesector where id=:id", ['id' => $id]);
        $ActivitieSector = $stmt->fetch();
        if (!$ActivitieSector) return null;
        return new ActivitieSector($ActivitieSector['ID'], $ActivitieSector['NOM']);
    }

    public function find(): PDOStatement
    {
        $stmt = $this->executePrepare("select * from activitiesector", []);
        return $stmt;
    }

    public function findAll(int $pdoFecthMode): array
    {
        $stmt = $this->find();
        $activitiesSectors = $stmt->fetchAll($pdoFecthMode);

        $activitiesSectorsEntities = [];
        foreach ($activitiesSectors as $activitieSector) {
            $activitiesSectorsEntities[] = new ActivitieSector($activitieSector['ID'], $activitieSector['LIBELLE']);
        }
        return $activitiesSectorsEntities;
    }

    public function insert(Entity $e): PDOStatement
    {
        // $req = "insert into activitiesector(id, libelle) values (:id, :libelle)";
        // $params = array('id' => $e->getId(), 'libelle' => $e->getLibelle());
        // $res = $this->executePrepare($req, $params);
        // return $res;
        return $this->executePrepare('', []);
    }

    public function update(Entity $e): PDOStatement
    {
        // $req = "update activitiesector set libelle=:libelle where id=:id";
        // $params = array('id' => $e->getId(), 'libelle' => $e->getLibelle());
        // $res = $this->executePrepare($req, $params);
        // return $res;
        return $this->executePrepare('', []);
    }

    public function delete(int $id): PDOStatement
    {
        $req = "delete from activitiesector where id=:id";
        $params = array('id' => $id);
        $res = $this->executePrepare($req, $params);
        return $res;
    }
}
