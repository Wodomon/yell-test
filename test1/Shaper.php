<?php

class Shaper {
    
    public function render($data){
        try{
            return $this->getShape($data['type'])->draw($data['params']);
        } catch (Exception $e){
            return $e->getMessage();
        }
    }
    
    private function getShape($type){
        switch($type){
            case 'square': return new Square();
            case 'circle': return new Circle();
            default: throw new Exception('No shape type: '.$type);
        }
    }
}
