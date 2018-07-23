<?php

class SomeEmployee extends Person
{

    public function __construct($id, $name, $email, $phone)
    {
        parent::__construct($id, $name, $email, $phone);
    }

    public function getSalary()
    {
        return '32';
    }
}