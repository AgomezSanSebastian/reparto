<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Restaurant;
use Illuminate\Auth\Events\Validated;

class FoodController extends Controller
{

    public function index(){
        $foods = Food::paginate(5);

        return view('food.index',compact('foods'));
    }

    public function show(Food $food){
        return view('food.show', compact('food'));
    }

/**
 * Crear nuevo componente
 */
    public function new(){
        $restaurants = Restaurant::all();
        return view('food.new', compact('restaurants'));
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'restaurant_id' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

        $food = new Food();

        $food->name = $request->name;
        $food->description = $request->description;
        $food->restaurant_id = $request->restaurant_id;
        $food->price = $request->price;

        $food->save();

        return redirect()->route('food.show',$food);
    }

    /**
     * Editar un componente
     */
    public function edit(Food $food){
        $restaurants = Restaurant::all();
        return view('food.edit', compact('food'),compact('restaurants'));
    }

    public function update(Request $request, Food $food){

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'restaurant_id' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

        $food->name = $request->name;
        $food->description = $request->description;
        $food->restaurant_id = $request->restaurant_id;
        $food->price = $request->price;

        $food->save();

        return redirect()->route('food.show',$food);
    }

    public function destroy(Food $food) {
        $food->delete();

       return redirect()->route('food.index');
    }

}
