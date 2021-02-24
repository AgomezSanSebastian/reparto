<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index(){
        $restaurantes = Restaurant::all();

        return view('restaurant.index',compact('restaurantes'));
    }
}
