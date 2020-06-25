<?php

namespace App\Model;

class ProductOptionValue implements \JsonSerializable
{
    private $title;
    private $price;
    private $unit;
    private $inputType;
    private $weight;
    private $priceMultiplier;
    private $options = [];

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }

    public function setInputType($inputType)
    {
        $this->inputType = $inputType;
        return $this;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    public function setPriceMultiplier($priceMultiplier)
    {
        $this->priceMultiplier = $priceMultiplier;
        return $this;
    }

    public function getOption($title): ProductOption
    {
        if (!isset($this->options[$title])) {
            $this->options[$title] = (new ProductOption())->setTitle($title);
        }
        return $this->options[$title];
    }

    public function jsonSerialize()
    {
        $options = [];
        foreach ($this->options as $option) {
            $options[] = $option->jsonSerialize();
        }
        return array_filter([
            'title' => $this->title,
            'price' => $this->price,
            'unit' => $this->unit,
            'input_type' => $this->inputType,
            'weight' => $this->weight,
            'price_multiplier' => $this->priceMultiplier,
            'options' => array_filter($options),
        ]);
    }
}