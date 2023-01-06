<?php

namespace mvc\model\entities;

require_once('Structure.php');

class Entreprise extends Structure
{
    private int $actionnaryNumber, $donateurNumber;

    /**
     * @param null $donateurNumber
     * @param int $actionnaryNumber
     */
    public function __construct(?int $id, string $NOM, bool $ESTASSO, int $NB_ACTIONNAIRES, null $NB_DONATEURS)
    {
        parent::__construct($NOM, $ESTASSO);
        $this->NB_ACTIONNAIRES = $NB_ACTIONNAIRES;
        $this->NB_DONATEURS = $NB_DONATEURS;
    }

    /**
     * @return int
     */
    public function getNbActionnaires(): int
    {
        return $this->NB_ACTIONNAIRES;
    }

    /**
     * @param int $actionnaryNumber
     */
    public function setNbActionnaires(int $NB_ACTIONNAIRES): void
    {
        $this->NB_ACTIONNAIRES = $NB_ACTIONNAIRES;
    }

    /**
     * @return null
     */
    public function getNbDonateurs(): null
    {
        return $this->NB_DONATEURS;
    }

    /**
     * @param null $NB_DONATEURS
     */
    public function setNbDonateurs(null $NB_DONATEURS): void
    {
        $this->NB_DONATEURS = $NB_DONATEURS;
    }

}