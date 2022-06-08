<?php

require_once "./mobileModel.php";



class Samsung extends Mobile
{
    public $root;


    public function __construct($model, $manufacture, $color, $screenSize, $root)
    {
        parent::__construct($model, $manufacture, $color, $screenSize);

        $this->root = $root ? "True" : "False";
    }

    public function display()
    {
        parent::display();
        echo "<br>";    
        echo "Root: $this->root";
    }


    public function checkScreenSize() {
        parent::isScreenLarge();
    }


    public function __toString() {
        return "Model: $this->model <br>
                Manufacture: $this->manufacture <br>
                Color: $this->color <br>
                Screen Size: $this->screenSize <br>
                Root: $this->root";
    }
}