<?php

declare (strict_types = 1);
class Person
{
    private $name;
    private $age;

    public function setInfo(string $name, int $age): void
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function getInfo(): string
    {
        return "My name is $this->name and i am $this->age years old !";
    }
}

$person1 = new Person();
$person1->setInfo("Faisal Ahammed", 29);
echo $person1->getInfo();
