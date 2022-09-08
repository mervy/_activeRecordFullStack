<?php

use Mervy\ActiveRecord\database\models\Author;
use Mervy\ActiveRecord\database\activerecord\Find;
use Mervy\ActiveRecord\database\activerecord\Insert;
use Mervy\ActiveRecord\database\activerecord\Update;

require '../vendor/autoload.php';

setInitialErrorsPhp();

$author = new Author;
$author->firstName = "Rogério";
$author->lastName = "Soares";
$author->email = 'rgrsoares@yahoo.com.br';
$author->status = 1;

var_dump($author->execute(new Update(field:'id', value:1)));