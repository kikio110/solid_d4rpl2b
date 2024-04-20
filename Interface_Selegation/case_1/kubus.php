<?php

require_once 'shape_3D_dimention.php';  
require_once 'shape_2D_dimention.php';

class Kubus implements Shape3D, Shape2D {
    public function calculate_Volume(): void{
    echo "mengghitung volume kubus";
    }
    public function calculate_Area(): void{
    echo "Menghitung luas permukaan kubus";
    }
}