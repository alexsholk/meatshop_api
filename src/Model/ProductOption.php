<?php

namespace App\Model;

use App\Model\Interfaces\CanCreateFromArray;

class ProductOption implements \JsonSerializable, CanCreateFromArray
{
    private $title;
    private $isRequired;
    private $emptyValueTitle;
    private $mutuallyExclusive;
    private $values = [];

    /** Getters */

    public function getTitle()
    {
        return $this->title;
    }

    public function getIsRequired()
    {
        return $this->isRequired;
    }

    public function getEmptyValueTitle()
    {
        return $this->emptyValueTitle;
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

    /** Setters */

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

    public function setEmptyValueTitle($emptyValueTitle)
    {
        $this->emptyValueTitle = $emptyValueTitle;
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

    /** Serialization */

    public function jsonSerialize()
    {
        $values = [];
        foreach ($this->values as $value) {
            $values[] = $value->jsonSerialize();
        }
        return array_filter([
            'title' => $this->title,
            'required' => $this->isRequired,
            'empty_value_title' => $this->emptyValueTitle,
            'mutually_exclusive' => $this->mutuallyExclusive,
            'values' => array_filter($values),
        ]);
    }

    public static function createFromArray(array $data)
    {
        $option = (new ProductOption())
            ->setTitle($data['title'] ?? null)
            ->setIsRequired($data['required'] ?? null)
            ->setEmptyValueTitle($data['empty_value_title'] ?? null)
            ->setMutuallyExclusive($data['mutually_exclusive'] ?? null);

        foreach ($data['values'] ?? [] as $value) {
            $optionValue = ProductOptionValue::createFromArray($value);
            $option->setOptionValue($optionValue);
        }

        return $option;
    }
}