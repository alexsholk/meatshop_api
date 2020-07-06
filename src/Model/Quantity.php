<?php

namespace App\Model;

use App\Model\Interfaces\CanCreateFromArray;

class Quantity implements \JsonSerializable, CanCreateFromArray
{
    private $amount;
    private $unit;

    /** Getters */

    public function getAmount()
    {
        return $this->amount;
    }

    public function getUnit()
    {
        return $this->unit;
    }

    /** Setters */

    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }

    /** Serialization */

    public function jsonSerialize()
    {
        return [
            $this->amount,
            $this->unit,
        ];
    }

    public static function createFromArray(array $data)
    {
        return (new Quantity())
            ->setAmount($data['amount'] ?? null)
            ->setUnit($data['unit'] ?? null);
    }
}