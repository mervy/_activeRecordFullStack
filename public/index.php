<?php

use Mervy\ActiveRecord\database\models\Author;
use Mervy\ActiveRecord\database\activerecord\Delete;

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

//var_dump($author->execute(new Update(field:'id', value:1)));
echo $author->execute(new Delete(field:'id', value:503));

