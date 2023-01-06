<?php

namespace mvc\controller;

require_once(__DIR__ . '/../model/managers/PDOManager.php');

use mvc\model\entities\Entity;
use mvc\model\manager\PDOManager;
use \PDOStatement;
use \PDO;

abstract class AController
{
    protected PDOManager $manager;

    /**
     * @return PDOManager
     */
    public function getManager(): PDOManager
    {
        return $this->manager;
    }

    /**
     * @param PDOManager $manager
     */
    public function setManager(PDOManager $manager): void
    {
        $this->manager = $manager;
    }

    /**
     * @param int $id
     * @return Entity
     */
    public function findById(int $id): ?Entity
    {
        return ($this->getManager()->findById($id));
    }

    /**
     * @return PDOStatement
     */
    public function find(): PDOStatement
    {
        return ($this->getManager()->find());
    }

    /**
     * @return array
     */
    public function findAll(): array
    {
        return ($this->getManager()->findAll(PDO::FETCH_ASSOC));
    }

    /**
     * @param Entity $o
     */
    public function insert(Entity $e): void
    {
        $this->getManager()->insert($e);
    }

    /**
     * @param Entity $o
     */
    //add function for update ActivitieSector
    public function update(Entity $e): void
    {
        $this->getManager()->update($e);
    }

    //function for delete ActivitieSector
    public function delete(int $id): void
    {
        $this->getManager()->delete($id);
    }
}
