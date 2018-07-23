<?php

class SalaryEmployee extends Person
{

    public $salary;

    public function __construct($id, $name, $email, $phone, $salary)
    {
        parent::__construct($id, $name, $email, $phone);
        $this->salary = $salary;
    }


    public function getSalary()
    {
        return $this->salary;
    }
}