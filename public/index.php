<?php

use Mervy\ActiveRecord\database\models\Author;
use Mervy\ActiveRecord\database\models\Article;
use Mervy\ActiveRecord\database\models\Category;

require '../vendor/autoload.php';

setInitialErrorsPhp();

$user = new Author;
$user->firstName = "Mary";
$user->lastName = "Johnson Larry";
$user->id = 1;

var_dump($user);
