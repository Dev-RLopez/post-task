<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculationController extends Controller
{
 
    public function AreaOfParallelogram($base,$height){
        $result = $base * $height;
    	return $result;
    }
}