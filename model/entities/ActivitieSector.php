<?php

namespace mvc\model\entities;

require_once('Entity.php');

class ActivitieSector extends Entity
{
    private string $libelle;

    /**
     * @param int|null $id
     * @param string $libelle
     */
    public function __construct(?int $id, string $libelle)
    {
        parent::__construct($id);
        $this->libelle = $libelle;
    }

    /**
     * @return string
     */
    public function getLibelle(): string
    {
        return $this->libelle;
    }

    /**
     * @param string $libelle
     */
    public function setLibelle(string $libelle): void
    {
        $this->libelle = $libelle;
    }
}
