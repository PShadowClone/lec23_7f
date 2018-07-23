<?php


class HourlyEmployee extends Person
{

    public $hour;
    public $price;

    public function __construct($id, $name, $email, $phone, $hour, $price)
    {
        parent::__construct($id, $name, $email, $phone);
        $this->hour = $hour;
        $this->price = $price;
    }

    public function getSalary()
    {
        return $this->price * $this->hour;
    }
}