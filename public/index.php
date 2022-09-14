<?php

use Mervy\ActiveRecord\database\models\Author;
use Mervy\ActiveRecord\database\activerecord\Delete;
use Mervy\ActiveRecord\database\activerecord\FindBy;

require '../vendor/autoload.php';

setInitialErrorsPhp();

$author = new Author;
/*
$author->firstName = "Mary";
$author->lastName = "Stoukoo";
$author->email = 'mary_xpx@yahoo.com.br';
$author->password = password_hash('Master,-', PASSWORD_BCRYPT);
$author->status = 1;
*/

//($author->execute(new Update(field:'id', value:1)));
print_r($author->execute(new FindBy(field:'id', value:5, fields: 'id, firstName, password')));

