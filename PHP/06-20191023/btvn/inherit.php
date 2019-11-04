<?php
class people
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

class girl extends people{
    // public function __construct()
    // {
    //     parent::__construct("Con gai");
    // }
    public function __construct($name = "Coai")
    {
        $this->name = $name;
    }

    public function birth(){
        echo "Co thai :)";
    }
}

$thu = new girl();
$thu->displayName();
$thu->birth();