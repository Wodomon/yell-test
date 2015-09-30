<?php

interface Shape {
    public function draw($params);
}

class Square implements Shape {
    public function draw($params) {
        //make some square
        return 'square';
    }
}

class Circle implements Shape {
    public function draw($params) {
        //make some circle
        return 'circle';
    }
}
