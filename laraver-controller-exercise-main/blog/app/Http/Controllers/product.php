<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class product extends Controller
{
    public function viewProduct(){
        $cars = array(
            [
                "name" => "Volvo",
                "price" => 10000
            ],
            [
                "name" => "BMW",
                "price" => 50000
            ],
            [
                "name" => "Toyota",
                "price" => 30000
            ],
            [
                "name" => "masarati",
                "price" => 90000
            ],
            [
                "name" => "opel",
                "price" => 5000
            ]);    
        return view('product', compact('cars'));
    }
}
