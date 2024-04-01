<?php

/** @var \Modules\Base\Classes\Fetch\Rights $this */

$this->add_right("product", "category", "administrator", view:true, add:true, edit:true, delete:true);
$this->add_right("product", "category", "manager", view:true, add:true, edit:true, delete:true);
$this->add_right("product", "category", "supervisor", view:true, add:true, edit:true, delete:true);
$this->add_right("product", "category", "staff", view:true, add:true, edit:true);
$this->add_right("product", "category", "registered", view:true, add:true);
$this->add_right("product", "category", "guest", view:true, );

$this->add_right("product", "product", "administrator", view:true, add:true, edit:true, delete:true);
$this->add_right("product", "product", "manager", view:true, add:true, edit:true, delete:true);
$this->add_right("product", "product", "supervisor", view:true, add:true, edit:true, delete:true);
$this->add_right("product", "product", "staff", view:true, add:true, edit:true);
$this->add_right("product", "product", "registered", view:true, add:true);
$this->add_right("product", "product", "guest", view:true, );

$this->add_right("product", "stock", "administrator", view:true, add:true, edit:true, delete:true);
$this->add_right("product", "stock", "manager", view:true, add:true, edit:true, delete:true);
$this->add_right("product", "stock", "supervisor", view:true, add:true, edit:true, delete:true);
$this->add_right("product", "stock", "staff", view:true, add:true, edit:true);
$this->add_right("product", "stock", "registered", view:true, add:true);
$this->add_right("product", "stock", "guest", view:true, );

$this->add_right("product", "type", "administrator", view:true, add:true, edit:true, delete:true);
$this->add_right("product", "type", "manager", view:true, add:true, edit:true, delete:true);
$this->add_right("product", "type", "supervisor", view:true, add:true, edit:true, delete:true);
$this->add_right("product", "type", "staff", view:true, add:true, edit:true);
$this->add_right("product", "type", "registered", view:true, add:true);
$this->add_right("product", "type", "guest", view:true, );