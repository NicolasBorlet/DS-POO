<?php

namespace mvc\model\manager;

require_once('PDOManager.php');

require_once(__DIR__ . '/../entities/Structure.php');
require_once(__DIR__ . '/../entities/Entity.php');
require_once('PDOManager.php');

use mvc\model\entities\Structure;
use mvc\model\entities\Entity;
use \PDOStatement;

class StructureManager extends PDOManager
{
    public function findById(int $id): ?Entity
    {
        $stmt = $this->executePrepare("select * from structure where id=:id", ['ID' => $id]);
        $structure = $stmt->fetch();
        if (!$structure) return null;
        return new Structure(
            $structure['ID'],
            $structure['NOM'],
            $structure['ESTASSO'],
            $structure['CP'],
            $structure['VILLE'],
            $structure['RUE']
        );
    }

    public function find(): PDOStatement
    {
        $stmt = $this->executePrepare("select * from structure", []);
        return $stmt;
    }

    public function findAll(int $pdoFecthMode): array
    {
        $stmt = $this->find();
        $structures = $stmt->fetchAll($pdoFecthMode);

        $structuresEntities = [];
        foreach ($structures as $structure) {
            $structuresEntities[] = new Structure(
                $structure['ID'],
                $structure['NOM'],
                $structure['ESTASSO'],
                $structure['CP'],
                $structure['VILLE'],
                $structure['RUE']
            );
        }
        return $structuresEntities;
    }

    public function insert(Entity $e): PDOStatement
    {
        $req = "insert into structure(id, NOM, ESTASSO, CP, VILLE, RUE) values (:id, :NOM, :ESTASSO, 
                    :CP, :VILLE, :RUE)";
        $params = array(
            'ID' => $e->getId(), 'NOM' => $e->getName(), 'ESTASSO' => $e->getEstasso(), 'CP' => $e->getPostalCode(),
            'VILLE' => $e->getVille(), 'RUE' => $e->getRue()
        );
        $res = $this->executePrepare($req, $params);
        return $res;
    }

    //Add function for update and delete
    public function update(Entity $e): PDOStatement
    {
        $req = "update structure set NOM=:NOM, ESTASSO=:ESTASSO, CP=:CP, VILLE=:VILLE, RUE=:RUE where id=:id";
        $params = array(
            'ID' => $e->getId(), 'NOM' => $e->getName(), 'ESTASSO' => $e->getEstasso(), 'CP' => $e->getPostalCode(),
            'VILLE' => $e->getVille(), 'RUE' => $e->getRue()
        );
        $res = $this->executePrepare($req, $params);
        return $res;
    }

     public function delete(Entity $e): PDOStatement
     {
        $req = "delete from structure where id=:id";
        $params = array('ID' => $e->getId());
        $res = $this->executePrepare($req, $params);
       return $res;
    }
}
