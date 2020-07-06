<?php

namespace App\Model;

use App\Model\Interfaces\CanCreateFromArray;

class Category implements \JsonSerializable, CanCreateFromArray
{
    private $id;
    private $parentId;
    private $slug;
    private $title;

    /** Getters */

    public function getId()
    {
        return $this->id;
    }

    public function getParentId()
    {
        return $this->parentId;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function getTitle()
    {
        return $this->title;
    }

    /** Setters */

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
        return $this;
    }

    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /** Serialization */

    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'parent_id' => $this->parentId,
            'data' => [
                'slug' => $this->slug,
                'title' => $this->title,
            ],
        ];
    }

    public static function createFromArray(array $data)
    {
        return (new Category())
            ->setId($data['id'] ?? null)
            ->setParentId($data['parent_id'] ?? null)
            ->setSlug($data['data']['slug'] ?? null)
            ->setTitle($data['data']['title'] ?? null);
    }
}