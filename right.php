<?php

/** @var \Modules\Base\Classes\Fetch\Rights $this */

$this->add_right("product", "category", "administrator", view:true, add:true, edit:true, delete:true);
$this->add_right("product", "category", "manager", view:true, add:true, edit:true, delete:true);
$this->add_right("product", "category", "supervisor", view:true, add:true, edit:true, delete:true);
$this->add_right("product", "category", "staff", view:true, add:true, edit:true);
$this->add_right("product", "category", "registered", view:true, add:true);
$this->add_right("product", "category", "guest", view:true, );
