<?php

require 'Shapes.php';
require 'Shaper.php';

class App {
    
    private $_shapes;
    
    public function __construct() {
        $this->_shapes = [
            ['type' => 'circle', 'params' => [/*some params*/]],
            ['type' => 'triangle', 'params' => [/*some params*/]],
            ['type' => 'square', 'params' => [/*some other params*/]]
        ];
    }
    
    public function run(){
        $shapes = ($_POST['shapes']) ?: $this->_shapes;
        
        $shaper = new Shaper();
        foreach($shapes as $shape){
            echo $shaper->render($shape).'<br>';
        }
    }
}


$app = new App();
$app->run();
