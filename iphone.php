<?php

require_once "./mobileModel.php";

class Iphone extends Mobile
{
    public $appInstalled;
    private $screenSizeCheck;

    public function __construct($model, $manufacture, $color, $screenSize, $appInstalled)
    {
        parent::__construct($model, $manufacture, $color, $screenSize);

        $this->appInstalled = $appInstalled < 0 ? $appInstalled = "Applications installed must be positive number" : $appInstalled;
        $this->screenSizeCheck = parent::isScreenLarge();
    }

    public function display()
    {
        parent::display();
        echo "<br>";
        echo "Application Installed: $this->appInstalled ";
    }


    public function checkScreenSize()
    {
        if ($this->screenSizeCheck) {
            echo "Screen size is big";
        }
    }


    public function __toString()
    {
        return "Model: $this->model <br>
                Manufacture: $this->manufacture <br>
                Color: $this->color <br>
                Screen Size: $this->screenSize <br>
                App installed: $this->appInstalled <br>";
    }
}
