<?php

namespace App\Model;

class ProductOption implements \JsonSerializable
{
    private $title;
    private $isRequired;
    private $emptyValueTitle;
    private $mutuallyExclusive;
    private $values = [];

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

    public function getOptionValue($title): ProductOptionValue
    {
        if (!isset($this->values[$title])) {
            $this->values[$title] = (new ProductOptionValue())->setTitle($title);
        }
        return $this->values[$title];
    }

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
}