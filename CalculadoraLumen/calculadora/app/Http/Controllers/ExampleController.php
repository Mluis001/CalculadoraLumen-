<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function Suma($num1, $num2) 
    {
        $sum = $num1 + $num2;
        return $sum;
    }
    
    public function Resta($num1, $num2) 
    {
        $rest = $num1 - $num2;
        return $rest;
    }

    public function Multiplicacion($num1, $num2) 
    {
        $mult = $num1 * $num2;
        return $mult;
    }

    public function Division($num1, $num2) 
    {
        $div = $num1 / $num2;
        return $div;
    }

    public function __construct()
    {
        //
    }

    //
}
