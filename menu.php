<?php

/** @var \Modules\Base\Classes\Fetch\Menus $this */


$this->add_module_info("product", [
    'title' => 'Product',
    'description' => 'Product',
    'icon' => 'fas fa-store',
    'path' => '/product/admin/product',
    'class_str' => 'text-green-800 border-green-800'
]);

 
$this->add_menu("product", "product", "Product", "/product/admin/product", "fas fa-cogs", 5);
$this->add_menu("product", "category", "Category", "/product/admin/category", "fas fa-cogs", 5);
$this->add_menu("product", "stock", "Stock", "/product/admin/stock", "fas fa-cogs", 5);
$this->add_menu("product", "type", "type", "/product/admin/type", "fas fa-cogs", 5);
