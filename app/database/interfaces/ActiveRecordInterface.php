<?php

namespace Mervy\ActiveRecord\database\interfaces;

interface ActiveRecordInterface
{
    //public function insert();
    public function update(UpdateInterface $updateInterface);
   /* 
    public function delete();
    public function find();
    public function findBy();
    public function all();
    */
}
