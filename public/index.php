<?php

use Mervy\ActiveRecord\database\models\Author;
use Mervy\ActiveRecord\database\activerecord\FindAll;

require '../vendor/autoload.php';

setInitialErrorsPhp();

$author = new Author;
print_r($author->execute(new FindAll(fields: 'id, firstName')));



/*
echo "
<style>
ul  {background-color: black; color: #fff; padding: 5px;}
a {color: #fff}
ul li {display: inline-block; padding: 10px}
</style>
<ul>
    <li><a href='?page=1&off=0'>Home</a></li>
    <li><a href='?page=2&off=10'>Page 1</a></li>
    <li><a href='?page=3&off=20'>Page 2</a></li>
    <li><a href='?page=4&off=30'>Page 3</a></li>

</ul>
";

$pg = (!$_GET['page'] && $_GET['page'] == '') ? 1 : $_GET['page'];
$off = (!$_GET['off'] && $_GET['off'] == '') ? 0 : $_GET['off'];
$limit = 10;

echo "<pre>";

switch ($pg) {
    case '':
        print_r($author->execute(new FindAll(orderby: 'id asc', limit: $limit, offset: $off)));
        echo $off;
        break;
    case 1:
        print_r($author->execute(new FindAll(orderby: 'id asc', limit: $limit, offset: $off)));
        echo $off;
        break;
    case 2:
        print_r($author->execute(new FindAll(orderby: 'id asc', limit: $limit, offset: $off)));
        echo $off;
        break;
    case 3:
        print_r($author->execute(new FindAll(orderby: 'id asc', limit: $limit, offset: $off)));
        echo $off;
        break;
    case 4:
        print_r($author->execute(new FindAll(orderby: 'id asc', limit: $limit, offset: $off)));
        echo $off;
        break;
}
*/