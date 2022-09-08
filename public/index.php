<?php

use Mervy\ActiveRecord\database\models\Author;
use Mervy\ActiveRecord\database\activerecord\Insert;
use Mervy\ActiveRecord\database\activerecord\Update;

require '../vendor/autoload.php';

setInitialErrorsPhp();

$user = new Author;
$user->firstName = "Mary";
$user->lastName = "Johnson Larry";
$user->id = 1;

echo $user->insert(new Insert);
