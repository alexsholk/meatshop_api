<?php

require_once __DIR__ . '/helpers/helpers.php';

return (function () {
    $products = [];
    foreach (new FilesystemIterator(__DIR__ . '/products') as $dir) {
        /** @var $dir SplFileInfo */
        if ($dir->isDir()) {
            foreach (new FilesystemIterator($dir->getPathname()) as $file) {
                /** @var $file SplFileInfo */
                $products[] = require $file->getPathname();
            }
        }
    }
    return $products;
})();