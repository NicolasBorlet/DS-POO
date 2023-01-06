<?php

namespace mvc\model\entities;

require_once('Coord.php');

class Structure extends Coord
{
    private string $name;
    private bool $statement;

    /**
     * @param string $NOM
     * @param bool $ESTASSO
     * @param int $CP
     * @param string $VILLE
     * @param string $RUE
     */
    public function __construct(int $CP,  string $VILLE, string $RUE, string $NOM, bool $ESTASSO)
    {
        parent::__construct($CP, $RUE, $VILLE);
        $this->NOM = $NOM;
        $this->ESTASSO = $ESTASSO;
    }

    /**
     * @return bool
     */
    public function getEstasso(): bool
    {
        return $this->ESTASSO;
    }

    /**
     * @param bool $ESTASSO
     */
    public function setEstasso(bool $ESTASSO): void
    {
        $this->ESTASSO = $ESTASSO;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->NOM;
    }

    /**
     * @param string $NOM
     */
    public function setNom(string $NOM): void
    {
        $this->NOM = $NOM;
    }

}