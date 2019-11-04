<?php
interface fly
{
    const dap = 100;
    public function dapCanh();
}
interface eat
{
    const no = 100;
    public function an();
}

class bird implements fly,eat
{
    protected $name;
    protected $statement;
    protected $address;

    public function __construct($name = "Undefined")
    {
        $this->name = $name;
    }

    public function an()
    {
        $statement = eat::no;
        echo $statement . " no roi";
    }
    public function dapCanh()
    {
        $address = fly::dap;
        echo $address;
    }
}

$chimku = new bird();
$chimku->an();
