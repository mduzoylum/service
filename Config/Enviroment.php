<?php

include_once 'AutoLoader.php';
$include= new AutoLoader();

$include->include("Interface");
$include->include("Controllers/Platform");
$include->include("Controllers/Serialization");
$include->include("Controllers/Service/Conversion");
$include->include("Controllers/Service");
