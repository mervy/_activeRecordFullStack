<?php

namespace Mervy\ActiveRecord\database\activerecord;

use Mervy\ActiveRecord\database\interfaces\ActiveRecordInterface;
use Mervy\ActiveRecord\database\interfaces\InsertInterface;

class Insert implements InsertInterface
{
    public function insert(ActiveRecordInterface $activeRecordInterface)
    {
        return 'insert';
    }
}
