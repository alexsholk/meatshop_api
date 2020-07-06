<?php

namespace App\Model;

use App\Model\Interfaces\CanCreateFromArray;

class ProductOptionValue implements \JsonSerializable, CanCreateFromArray
{
    private $title;
    private $price;
    private $unit;
    private $inputType;
    private $weight;
    private $priceMultiplier;
    private $options = [];

    /** Getters */

    public function getTitle()
    {
        return $this->title;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getUnit()
    {
        return $this->unit;
    }

    public function getInputType()
    {
        return $this->inputType;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getPriceMultiplier()
    {
        return $this->priceMultiplier;
    }

    public function getOption($title): ?ProductOption
    {
        return $this->options[$title] ?? null;
    }

    public function getOrCreateOption($title): ProductOption
    {
        if (!isset($this->options[$title])) {
            $this->options[$title] = (new ProductOption())->setTitle($title);
        }
        return $this->options[$title];
    }

    public function getOptions()
    {
        foreach ($this->options as $option) {
            yield $option;
        }
    }

    /** Setters */

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

    public function setOption(ProductOption $option)
    {
        $this->options[$option->getTitle()] = $option;
        return $this;
    }

    /** Serialization */

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

    public static function createFromArray(array $data)
    {
        $optionValue = (new ProductOptionValue())
            ->setTitle($data['title'] ?? null)
            ->setPrice($data['price'] ?? null)
            ->setUnit($data['unit'] ?? null)
            ->setInputType($data['input_type'] ?? null)
            ->setWeight($data['weight'] ?? null)
            ->setPriceMultiplier($data['price_multiplier'] ?? null);

        foreach ($data['options'] ?? [] as $option) {
            $option = ProductOption::createFromArray($option);
            $optionValue->setOption($option);
        }

        return $optionValue;
    }
}