<?php


namespace mvc\model\entities;

require_once('Entity.php');

abstract class Coord extends Entity
{
    private int $postalCode;

    private string $rue, $ville;

    /**
     * @param int|null $id
     */
    public function __construct(?int $id,  int $CP, string $VILLE, string $RUE)
    {
        parent::__construct($id);
        $this->postalCode = $CP;
        $this->ville = $VILLE;
        $this->rue = $RUE;
    }

    /**
     * @return int
     */public function getPostalCode()
    {
        return $this->CP;
    }

    /**
     * @param int $postalCode
     */public function setPostalCode($CP)
    {
        $this->CP = $CP;
    }

    /**
     * @return string
     */public function getRue()
    {
        return $this->RUE;
    }

    /**
     * @param string $rue
     */public function setRue($RUE)
    {
        $this->RUE = $RUE;
    }

    /**
     * @return string
     */public function getVille()
    {
        return $this->VILLE;
    }

    /**
     * @param string $ville
     */public function setVille($VILLE)
    {
        $this->VILLE = $VILLE;
    }


}