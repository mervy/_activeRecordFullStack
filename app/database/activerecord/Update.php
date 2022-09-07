<?php

namespace Mervy\ActiveRecord\database\activerecord;

use Mervy\ActiveRecord\database\interfaces\ActiveRecordInterface;
use Mervy\ActiveRecord\database\interfaces\UpdateInterface;

class Update implements UpdateInterface
{
    public function update(ActiveRecordInterface $activeRecordInterface){
        var_dump($activeRecordInterface->getAttributes());
    }
}
