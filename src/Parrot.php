<?php

class Parrot
{
    const EUROPEAN = 0;
    const AFRICAN = 1;
    const NORWEGIAN_BLUE = 2;

    /** @var int */
    private $type;

    /** @var int */
    private $numberOfCoconuts;

    /** @var float */
    private $voltage;

    /** @var bool */
    private $isNailed;

    /**
     * @param int   $type
     * @param int   $numberOfCoconuts
     * @param float $voltage
     * @param bool  $isNailed
     */
    public function __construct($type, $numberOfCoconuts, $voltage, $isNailed)
    {
        $this->type = $type;
        $this->numberOfCoconuts = $numberOfCoconuts;
        $this->voltage = $voltage;
        $this->isNailed = $isNailed;
    }

    /**
     * @return float
     * @throws Exception
     */
    public function getSpeed()
    {
        switch ($this->type) {
            case self::EUROPEAN:
                return 12.0;

            case self::AFRICAN:
                return max(0, 12.0 - 9.0 * $this->numberOfCoconuts);

            case self::NORWEGIAN_BLUE:
                if ($this->isNailed) {
                    return 0;
                }

                return 12.0 + $this->voltage * 1.5;

            default:
                throw new Exception("Unknown parrot type");
        }
    }
}
