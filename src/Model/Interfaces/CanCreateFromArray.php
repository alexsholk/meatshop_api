<?php

namespace App\Model\Interfaces;

interface CanCreateFromArray
{
    public static function createFromArray(array $data);
}