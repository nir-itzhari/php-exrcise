<?php

require_once "./screenSize.php";

abstract class Mobile implements ScreenSize 
{
    public $model;
    public $manufacture;
    public $color;
    public $screenSize;

    public function __construct($model, $manufacture, $color, $screenSize)
    {
        $this->model = $model;
        $this->manufacture = $manufacture;
        $this->color = $color;
        $this->screenSize = $screenSize < 5 | $screenSize > 20 ? $screenSize = "Screen Size must be between 5 to 20 inches" : $screenSize;
    }

    public function display()
    {
        echo "Model: $this->model";
        echo "<br>";
        echo "Manufacture: $this->manufacture";
        echo "<br>";
        echo "Color: $this->color";
        echo "<br>";
        echo "Screen Size: $this->screenSize";
        echo "Is screen large: " . $this->isScreenLarge();
    }

    public function isScreenLarge()
    {
        if ($this->screenSize > 15) {
            echo "<br>";
            echo "Screen Size is Big: True";
        } else {
            echo "<br>";
            echo "Screen Size is Big: False";
        }
    }
}
