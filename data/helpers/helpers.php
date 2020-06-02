<?php

function getAddons() {
    static $addons;
    if (!$addons) {
        $addons = require_once __DIR__ . '/../product-addons.php';
    }
    return $addons;
}

function getMarinades(array $ids)
{
    $marinades = getAddons()['marinades'];
    if (empty($ids)) return $marinades;
    $out = [];
    if (!is_array($marinades)) {
        dump($marinades);
        die;
    }
    foreach ($marinades as $marinade) {
        if (in_array($marinade['id'], $ids)) {
            $out[] = $marinade;
        }
    }
    return $out;
}

function getSpices(array $ids)
{
    $spices = getAddons()['spices'];
    if (empty($ids)) return $spices;
    $out = [];
    foreach ($spices as $spice) {
        if (in_array($spice['id'], $ids)) {
            $out[] = $spice;
        }
    }
    return $out;
}

function getMarinadeOption(array $ids)
{
    return [
        'code' => 'marinade',
        'title' => 'Маринад',
        'required' => false,
        'exclusive' => true,
        'values' => getMarinades($ids),
    ];
}

function getSpiceOption(array $ids)
{
    return [
        'code' => 'spice',
        'title' => 'Специи',
        'required' => false,
        'exclusive' => true,
        'values' => getSpices($ids),
    ];
}

function generateRandomIntArray(int $count, int $min, int $max)
{
    if (abs($max - $min) + 1 < $count) {
        throw new LogicException('Can\'t generate enough unique values from given range');
    }
    $out = [];
    while (count($out) < $count) {
        $out[] = rand($min, $max);
        $out = array_unique($out);
    }
    sort($out);
    return $out;
}