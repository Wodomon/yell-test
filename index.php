<?php
ini_set('display_errors', 'on');
require 'Shapes.php';
require 'Shaper.php';

class App {
    
    private $shapes;
    
    public function __construct() {
        $this->shapes = [
            ['type' => 'circle', 'params' => [/*some params*/]],
            ['type' => 'triangle', 'params' => [/*some params*/]],
            ['type' => 'square', 'params' => [/*some other params*/]]
        ];
    }
    
    public function run(){
        $shaper = new Shaper();
        foreach($this->shapes as $shape){
            echo $shaper->render($shape).'<br>';
        }
    }
}


$app = new App();
$app->run();
