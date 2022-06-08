<?php

require_once "./mobileModel.php";



class Samsung extends Mobile
{
    public $root;
    private $screenSizeCheck;

    public function __construct($model, $manufacture, $color, $screenSize, $root)
    {
        parent::__construct($model, $manufacture, $color, $screenSize);

        $this->root = $root ? "True" : "False";
        $this->screenSizeCheck = parent::isScreenLarge();
    }

    public function display()
    {
        parent::display();
        echo "<br>";
        echo "Root: $this->root";
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
                Root: $this->root <br>";
    }
}
