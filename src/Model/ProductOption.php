<?php

namespace App\Model;

use App\Model\Interfaces\CanCreateFromArray;

class ProductOption implements \JsonSerializable, CanCreateFromArray
{
    private $code;
    private $title;
    private $isRequired;
    private $mutuallyExclusive;
    private $values = [];
    private $value;

    /** Getters */

    public function getCode()
    {
        return $this->code;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getIsRequired()
    {
        return $this->isRequired;
    }

    public function getMutuallyExclusive()
    {
        return $this->mutuallyExclusive;
    }

    public function getOptionValue($title): ?ProductOptionValue
    {
        return $this->values[$title] ?? null;
    }

    public function getOrCreateOptionValue($title): ProductOptionValue
    {
        if (!isset($this->values[$title])) {
            $this->values[$title] = (new ProductOptionValue())->setTitle($title);
        }
        return $this->values[$title];
    }

    public function getCurrentOptionValue(): ?ProductOptionValue
    {
        return array_values($this->values)[$this->value] ?? null;
    }

    public function getValue(): ?int
    {
        return $this->value;
    }

    /** Setters */

    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function setIsRequired($isRequired)
    {
        $this->isRequired = (bool)$isRequired;
        return $this;
    }

    public function setMutuallyExclusive($mutuallyExclusive)
    {
        $this->mutuallyExclusive = $mutuallyExclusive;
        return $this;
    }

    public function setOptionValue(ProductOptionValue $optionValue)
    {
        $this->values[$optionValue->getTitle()] = $optionValue;
        return $this;
    }

    public function setValue(?int $value)
    {
        $this->value = $value;
        return $this;
    }

    /** Serialization */

    public function jsonSerialize()
    {
        $values = [];
        foreach ($this->values as $value) {
            $values[] = $value->jsonSerialize();
        }
        return array_filter([
            'code' => $this->code,
            'title' => $this->title,
            'required' => $this->isRequired,
            'mutually_exclusive' => $this->mutuallyExclusive,
            'values' => array_filter($values),
        ]);
    }

    public static function createFromArray(array $data)
    {
        $option = (new ProductOption())
            ->setCode($data['code'] ?? null)
            ->setTitle($data['title'] ?? null)
            ->setIsRequired($data['required'] ?? null)
            ->setMutuallyExclusive($data['mutually_exclusive'] ?? null)
            ->setValue($data['value'] ?? null);

        foreach ($data['values'] ?? [] as $value) {
            $optionValue = ProductOptionValue::createFromArray($value);
            $option->setOptionValue($optionValue);
        }

        return $option;
    }
}