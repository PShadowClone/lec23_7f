<?php

class Person implements EmployeeInterface
{


    private $id;
    public $name;
    public $email;
    public $phone;


    public function __construct($id, $name, $email, $phone)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;

    }


    public function setId($id)
    {
        $this->id = intval($id);
    }

    public function getId()
    {
        return 'Id : ' . $this->id;
    }

    public function getSalary()
    {
        return -1;
    }

    public function some()
    {
        // TODO: Implement some() method.
    }
}