<?php
require 'core/ClassLoader.php';

$loder = new ClassLoader();
$loder->registerDir(dirname(__FILE__). '\core');
$loder->registerDir(dirname(__FILE__). '\models');
$loder->register();

?>