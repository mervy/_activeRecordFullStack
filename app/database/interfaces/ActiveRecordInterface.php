<?php

namespace Mervy\ActiveRecord\database\interfaces;

interface ActiveRecordInterface
{
    //public function insert(InsertInterface $insertInterface);
    public function update(UpdateInterface $updateInterface);
   /* 
    public function delete(DeleteInterface $deleteInterface);
    public function find(FindInterface $findInterface);
    public function findBy(FindByInterface $findbyInterface);
    public function all(AllInterface $allInterface);
    */
    public function getTable();
    public function getAttributes();
}
