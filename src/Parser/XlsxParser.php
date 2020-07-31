<?php

namespace App\Parser;

use App\Model\Category;
use App\Model\Product;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class XlsxParser
{
    const CATEGORY_IMAGE_DIR = '/uploads/categories/';
    const PRODUCT_IMAGE_DIR = '/uploads/products/';

    const SHEET_TITLE_MEAT = 'Мясо';
    const SHEET_TITLE_MARINADES = 'Маринады';
    const SHEET_TITLE_SPICES = 'Специи';

    // Cell numbers
    const CATEGORY_TITLE = 0;
    const CATEGORY_SLUG = 1;
    const PRODUCT_TITLE = 2;
    const PRODUCT_IMAGE = 3;
    const OPTION_1_TITLE = 4;
    const OPTION_1_VALUE = 5;
    const OPTION_2_TITLE = 6;
    const OPTION_2_VALUE = 7;
    const PRICE = 8;
    const AMOUNT = 9;
    const PRICE_PER_AMOUNT = 10;
    const INPUT_TYPE = 11;
    const OPTION_3_TITLE = 12;
    const OPTION_3_VALUE_1 = 13;
    const OPTION_3_VALUE_2 = 14;
    const OPTION_3_VALUE_3 = 15;
    const OPTION_3_VALUE_4 = 16;
    const OPTION_3_VALUE_5 = 17;
    const OPTION_3_VALUE_6 = 18;
    const OPTION_4_TITLE = 19;
    const OPTION_4_VALUE_1 = 20;
    const OPTION_4_VALUE_2 = 21;
    const OPTION_4_VALUE_3 = 22;
    const OPTION_4_VALUE_4 = 23;
    const OPTION_4_VALUE_5 = 24;
    const OPTION_4_VALUE_6 = 25;
    const NUTRIENTS_FAT = 26;
    const NUTRIENTS_PROTEIN = 27;
    const NUTRIENTS_CARBOHYDRATE = 28;
    const PRODUCT_DESCRIPTION = 29;

    // Cell numbers (Addons)
    const ADDON_TITLE = 0;
    const ADDON_PRICE = 1;

    public static function parse($filePath)
    {
        $data = self::toArray(self::loadFile($filePath));

        $categories = self::extractCategories($data);
        $products = self::extractProducts($data);

        return [
            'categories' => array_values($categories),
            'products' => array_values($products),
        ];
    }

    private static function loadFile($filePath): Spreadsheet
    {
        if (!is_readable($filePath)) {
            throw new \Exception('File doesn\'t exist or readable.');
        }
        return IOFactory::load($filePath);
    }

    private static function toArray(Spreadsheet $spreadsheet): array
    {
        $data = [];
        foreach ($spreadsheet->getAllSheets() as $sheet) {
            /** @var $sheet Worksheet */
            switch ($sheet->getTitle()) {
                case self::SHEET_TITLE_MEAT:
                case self::SHEET_TITLE_MARINADES:
                case self::SHEET_TITLE_SPICES:
                    $data[$sheet->getTitle()] = array_filter($sheet->toArray(), function ($row) {
                        return count(array_filter($row));
                    });
                    break;
            }
        }
        return $data;
    }

    private static function extractAddons($data): array
    {
        $out = [];
        foreach ($data as $row) {
            $out[$row[self::ADDON_TITLE]] = $row[self::ADDON_PRICE];
        }
        return $out;
    }

    private static function extractCategories($data): array
    {
        $idCounter = 0;
        $categories = [];

        foreach ($data[self::SHEET_TITLE_MEAT] as $row) {
            if (isset($categories[$row[self::CATEGORY_TITLE]])) {
                continue;
            }
            $categories[$row[self::CATEGORY_TITLE]] = (new Category())
                ->setId(++$idCounter)
                ->setParentId(null)
                ->setSlug($row[self::CATEGORY_SLUG])
                ->setTitle($row[self::CATEGORY_TITLE])
                ->setImage(self::CATEGORY_IMAGE_DIR . $row[self::CATEGORY_SLUG] . '.jpg');
        }
        return $categories;
    }

    private static function extractProducts($data): array
    {
        $categories = self::extractCategories($data);
        //$marinades = self::extractAddons($data[self::SHEET_TITLE_MARINADES]);
        //$spices = self::extractAddons($data[self::SHEET_TITLE_SPICES]);

        $idCounter = 0;
        $products = [];
        foreach ($data[self::SHEET_TITLE_MEAT] as $row) {
            $productUniqString = $row[self::CATEGORY_TITLE] . '_' . $row[self::PRODUCT_TITLE];
            $product = isset($products[$productUniqString]) ?
                $products[$productUniqString] :
                ($products[$productUniqString] = (new Product())->setId(++$idCounter));

            $product
                ->setCategoryId($categories[$row[self::CATEGORY_TITLE]]->getId())
                ->setTitle($row[self::PRODUCT_TITLE])
                ->setImage(self::PRODUCT_IMAGE_DIR . $row[self::PRODUCT_IMAGE])
                ->setDescription($row[self::PRODUCT_DESCRIPTION]);

            $option1Value = $product
                ->getOrCreateOption($row[self::OPTION_1_TITLE])
                ->setCode('slicing')
                ->setIsRequired(true)
                ->getOrCreateOptionValue($row[self::OPTION_1_VALUE]);

            $pricedOptionValue = trim($row[self::OPTION_2_TITLE]) ?
                $option1Value
                    ->getOrCreateOption($row[self::OPTION_2_TITLE])
                    ->setCode('type')
                    ->setIsRequired(true)
                    ->getOrCreateOptionValue($row[self::OPTION_2_VALUE]) :
                $option1Value;

            $pricedOptionValue
                ->setPrice($row[self::PRICE])
                ->setUnit('кг')
                ->setInputType(trim($row[self::INPUT_TYPE]) === 'Количество' ? 'count' : 'weight');

            if (trim($row[self::AMOUNT])) {
                $pricedOptionValue->setWeight((float)$row[self::AMOUNT] * 1000);
            }

            // Spices
            if (trim($row[self::OPTION_3_TITLE]) &&
                trim($row[self::OPTION_3_VALUE_1])
            ) {
                $option3 = $option1Value
                    ->getOrCreateOption($row[self::OPTION_3_TITLE])
                    ->setCode('spice')
                    ->setIsRequired(false)
                    ->setMutuallyExclusive(1);


                $option3cols = [
                    self::OPTION_3_VALUE_1,
                    self::OPTION_3_VALUE_2,
                    self::OPTION_3_VALUE_3,
                    self::OPTION_3_VALUE_4,
                    self::OPTION_3_VALUE_5,
                    self::OPTION_3_VALUE_6
                ];

                foreach ($option3cols as $colNumber) {
                    if (trim($row[$colNumber])) {
                        $option3
                            ->getOrCreateOptionValue($row[$colNumber])
                            ->setPriceMultiplier(0.15);
                    }
                }
            }

            // Marinades
            if (trim($row[self::OPTION_4_TITLE]) &&
                trim($row[self::OPTION_4_VALUE_1])
            ) {
                $option4 = $option1Value
                    ->getOrCreateOption($row[self::OPTION_4_TITLE])
                    ->setCode('marinade')
                    ->setIsRequired(false)
                    ->setMutuallyExclusive(1);

                $option4cols = [
                    self::OPTION_4_VALUE_1,
                    self::OPTION_4_VALUE_2,
                    self::OPTION_4_VALUE_3,
                    self::OPTION_4_VALUE_4,
                    self::OPTION_4_VALUE_5,
                    self::OPTION_4_VALUE_6,
                ];
                foreach ($option4cols as $colNumber) {
                    if (trim($row[$colNumber])) {
                        $option4
                            ->getOrCreateOptionValue($row[$colNumber])
                            ->setPriceMultiplier(0.3);
                    }
                }
            }
        }
        return $products;
    }
}