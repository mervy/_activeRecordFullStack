<?php

use Mervy\ActiveRecord\database\models\Author;
use Mervy\ActiveRecord\database\activerecord\Find;
use Mervy\ActiveRecord\database\activerecord\Insert;
use Mervy\ActiveRecord\database\activerecord\Update;

require '../vendor/autoload.php';

setInitialErrorsPhp();

$author = new Author;
$author->firstName = "Mary";
$author->lastName = "Stoukoo";
$author->email = 'mary_xpx@yahoo.com.br';
$author->password = password_hash('Master,-', PASSWORD_BCRYPT);
$author->status = 1;

//var_dump($author->execute(new Update(field:'id', value:1)));
var_dump($author->execute(new Insert));

echo $author->password;

//INSERT INTO `_mvc2021`.authors (firstName, lastName, email, password, status) VALUES('', '', '', '', '0');
