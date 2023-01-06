<?php

namespace mvc\model\entities;

require_once('Structure.php');

class Association extends Structure
{
    private int $NB_ACTIONNAIRES, $NB_DONATEURS;

    /**
     * @param null $donateurNumber
     * @param int $actionnaryNumber
     */
    public function __construct(?int $id, string $NOM, bool $ESTASSO, null $NB_ACTIONNAIRES, int $NB_DONATEURS)
    {
        parent::__construct($NOM, $ESTASSO);
        $this->NB_ACTIONNAIRES = $NB_ACTIONNAIRES;
        $this->NB_DONATEURS = $NB_DONATEURS;
    }

    /**
     * @return int
     */
    public function getNbActionnaires(): null
    {
        return $this->NB_ACTIONNAIRES;
    }

    /**
     * @param int $NB_ACTIONNAIRES
     */
    public function setNbActionnaires(int $NB_ACTIONNAIRES): void
    {
        $this->NB_ACTIONNAIRES = $NB_ACTIONNAIRES;
    }

    /**
     * @return null
     */
    public function getNbDonateurs(): int
    {
        return $this->NB_DONATEURS;
    }

    /**
     * @param null $donateurNumber
     */
    public function setNbDonateurs(int $NB_DONATEURS): void
    {
        $this->NB_DONATEURS = $NB_DONATEURS;
    }

}