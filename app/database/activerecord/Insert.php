<?php

namespace Mervy\ActiveRecord\database\activerecord;

use Mervy\ActiveRecord\database\interfaces\ActiveRecordInterface;
use Mervy\ActiveRecord\database\interfaces\ActiveRecordExecuteInterface;

class Insert implements ActiveRecordExecuteInterface
{
    public function execute(ActiveRecordInterface $activeRecordInterface)
    {
        echo 'INSERT <br>';
        dd($activeRecordInterface->getAttributes(), 'v');
        echo '<hr>';

    }
}
