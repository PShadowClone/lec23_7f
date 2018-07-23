<?php
require_once 'PersonInterface.php';

require_once 'EmployeeInterface.php';
require_once 'Person.php';
require_once 'HourlyEmployee.php';
require_once 'SalaryEmployee.php';
require_once 'SomeEmployee.php';

$employees = [];
//$person = new Person(1, "ali", "ali@hotmail.com", "23423");
$hourlyEmployee = new HourlyEmployee(1, "ali", "ali@hotmail.com", "23423", 2, 3);
$salaryEmployee = new SalaryEmployee(1, "ali", "ali@hotmail.com", "23423", 2);
$someEmployee = new SomeEmployee(1, "ali", "ali@hotmail.com", "23423");
array_push($employees, $hourlyEmployee);
array_push($employees, $salaryEmployee);
array_push($employees, $someEmployee);

foreach ($employees as $employee) {
    echo 'Salary is : ' . $employee->getSalary();
    echo '<br/>';


}


