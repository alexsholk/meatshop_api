<?php

namespace App\Model;

class Category implements \JsonSerializable
{
    private $id;
    private $parentId;
    private $slug;
    private $title;

    public static function createFromArray($data)
    {
        return (new Category())
            ->setId($data['id'])
            ->setParentId($data['parent_id'])
            ->setSlug($data['data']['slug'])
            ->setTitle($data['data']['title']);
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
}