<?php
class Employe
{
    private $id;
    private $firstName;
    private $lastName;
    private $salary;
    public function __construct($id, $firstName, $salary, $lastName)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->salary = $salary;
    }
    public function getId()
    {
        return $this->id;
    }

    public function getLastName()
    {
        return $this->lastName;
    }
    public function getFirstName()
    {
        return $this->firstName;
    }
    public function getName()
    {
        return $this->firstName
            . " " . $this->lastName;
    }


    public function getSalary()
    {
        return $this->salary;
    }
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    public function getAnnualSalary()
    {
        return $this->salary * 12;
    }
    public function raiseSalary($percent)
    {
        $this->salary += ($this->salary * $percent) / 100;
        return $this->salary;
    }
    public function __toString()
    {
        return "Employe[id=$this->id,firstName=$this->firstName,lastName=$this->lastName,salary=$this->salary]";
    }
}
$employe = new Employe(1, "Ali", 20000, "sayed");
echo $employe->getName();
echo "<br>";
echo $employe->getAnnualSalary();
echo "<br>";
$employe->raiseSalary(10);
echo $employe->getSalary();
echo "<br>";
echo $employe->__toString();
echo "<br>";

echo $employe;

echo "<br>";
