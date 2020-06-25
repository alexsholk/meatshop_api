<?php

namespace App\Model;

class Product implements \JsonSerializable
{
    private $categoryId;
    private $id;
    private $title;
    private $image;
    private $description;
    private $price;
    private $unit;
    private $inputType;
    private $options = [];

    public static function create()
    {
        return new Product();
    }

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

    public function getId()
    {
        return $this->id;
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
            'category_id' => $this->categoryId,
            'id' => $this->id,
            'data' => array_filter([
                'title' => $this->title,
                'image' => $this->image,
                'description' => $this->description,
                'price' => $this->price,
                'unit' => $this->unit,
                'input_type' => $this->inputType,
                'options' => $options,
            ])
        ]);
    }
}