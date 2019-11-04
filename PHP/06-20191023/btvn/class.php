<?php
class oop
{
    protected $name;

    public function __construct($name = "Undefined")
    {
        $this->name = $name;
    }

    public function setName($ten)
    {
        $this->name = $ten;
    }

    public function getName()
    {
        return $this->name;
    }

    public function displayName()
    {
        echo $this->name;
    }
}

$obj = new oop();
$obj->displayName();
