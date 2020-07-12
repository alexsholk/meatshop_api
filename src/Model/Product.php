<?php

namespace App\Model;

use App\Model\Interfaces\CanCreateFromArray;

class Product implements \JsonSerializable, CanCreateFromArray
{
    private $categoryId;
    private $id;
    private $title;
    private $image;
    private $description;
    private $price;
    private $unit;
    private $inputType;
    private $quantity;
    private $options = [];

    /** Getters */

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getDescription()
    {
        return $this->description;
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

    public function getQuantity(): ?Quantity
    {
        return $this->quantity;
    }

    public function getOption($title): ?ProductOption
    {
        return $this->options[$title] ?? null;
    }

    public function getOptionByCode($code): ?ProductOption
    {
        foreach ($this->getCurrentOptions() as $option) {
            /** @var ProductOption $option */
            if ($option->getCode() === $code) {
                return $option;
            }
        }
        return null;
    }

    public function getOrCreateOption($title): ProductOption
    {
        if (!isset($this->options[$title])) {
            $this->options[$title] = (new ProductOption())->setTitle($title);
        }
        return $this->options[$title];
    }

    public function getCurrentOptions()
    {
        foreach ($this->options as $option) {
            /** @var ProductOption $option */
            yield $option;
            if ($optionValue = $option->getCurrentOptionValue()) {
                yield from $optionValue->getOptions();
            }
        }
    }

    public function getCurrentPrice()
    {
        $price = $this->price;
        foreach ($this->getCurrentOptions() as $option) {
            /** @var ProductOption $option */
            if ($optionValue = $option->getCurrentOptionValue()) {
                if ($optionValue->getPrice()) {
                    $price = $optionValue->getPrice();
                }
            }
        }
        return $price;
    }

    public function getCurrentInputType()
    {
        $inputType = $this->inputType;
        foreach ($this->getCurrentOptions() as $option) {
            /** @var ProductOption $option */
            if ($optionValue = $option->getCurrentOptionValue()) {
                if ($optionValue->getInputType()) {
                    $inputType = $optionValue->getInputType();
                }
            }
        }
        return $inputType;
    }

    public function getCurrentPieceWeight()
    {
        $weight = null;
        foreach ($this->getCurrentOptions() as $option) {
            /** @var ProductOption $option */
            if ($optionValue = $option->getCurrentOptionValue()) {
                if ($optionValue->getWeight()) {
                    $weight = $optionValue->getWeight();
                }
            }
        }
        return $weight;
    }

    public function getBaseCost()
    {
        if (!$this->getQuantity()) {
            return null;
        }
        $amount = $this->getQuantity()->getAmount();

        $price = $this->getCurrentPrice();
        switch ($this->getCurrentInputType()) {
            case InputType::INPUT_TYPE_WEIGHT:
                return $price * $amount / 1000;
            case InputType::INPUT_TYPE_COUNT:
                return $price * $amount * $this->getCurrentPieceWeight() / 1000;
        }

        return null;
    }

    public function getAddonsCost()
    {
        $addonsCost = 0;
        foreach ($this->getCurrentOptions() as $option) {
            /** @var ProductOption $option */
            if ($optionValue = $option->getCurrentOptionValue()) {
                if ($optionValue->getPriceMultiplier()) {
                    $addonsCost += $this->getBaseCost() * $optionValue->getPriceMultiplier();
                }
            }
        }
        return $addonsCost;
    }

    public function getTotalCost()
    {
        return $this->getBaseCost() + $this->getAddonsCost();
    }

    /** Setters */

    public function setCategoryId($id)
    {
        $this->categoryId = $id;
        return $this;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    public function setDescription($description)
    {
        $this->description = $description;
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

    public function setQuantity(Quantity $quantity)
    {
        $this->quantity = $quantity;
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
        $quantity = $this->getQuantity() ? $this->getQuantity()->jsonSerialize() : null;
        return array_filter([
            'category_id' => $this->categoryId,
            'id' => $this->id,
            'data' => array_filter([
                'title' => $this->title,
                'image' => $this->image,
                'description' => $this->description,
                'price' => $this->price,
                'unit' => $this->unit,
                'input_type' => $this->inputType,
                'quantity' => $quantity,
                'options' => $options,
            ])
        ]);
    }

    public static function createFromArray(array $data)
    {
        $product = (new Product())
            ->setCategoryId($data['category_id'] ?? null)
            ->setId($data['id'] ?? null)
            ->setTitle($data['data']['title'] ?? null)
            ->setImage($data['data']['image'] ?? null)
            ->setDescription($data['data']['description'] ?? null)
            ->setPrice($data['data']['price'] ?? null)
            ->setUnit($data['data']['unit'] ?? null)
            ->setInputType($data['data']['input_type'] ?? null)
            ->setQuantity(Quantity::createFromArray($data['data']['quantity']));

        foreach ($data['data']['options'] ?? [] as $option) {
            $option = ProductOption::createFromArray($option);
            $product->setOption($option);
        }

        return $product;
    }
}