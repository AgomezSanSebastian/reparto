<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index(){
        $restaurantes = Restaurant::all();

        return view('restaurant.index',compact('restaurantes'));
    }

    public function getImage($filename){
        $file = Storage::disk('images')->get($filename);
        return new Response($file, 300);
     }
}
