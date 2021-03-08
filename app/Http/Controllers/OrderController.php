<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Order;
use App\Models\Order_details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
    * Crea una nueva instancia del controlador
    */
   public function __construct()
   {
      //Garantiza que los métodos del controlador sean con usuario autenticado. Esto se puede hacer también en la ruta
      $this->middleware('auth');
   }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $orders = Order::where('user_id', Auth::user()->id)->orderBy('id','desc')->paginate(6);

        return view('order.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $foods = Food::all();
        return view('order.create', compact('foods'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'street' => 'required',
            'phone' => 'required|numeric',
            'food_id' => 'required|numeric',
            'cantidad' => 'required|numeric',
        ]);

        $order = new Order();
        $order_det = new Order_details();

        $order->street = $request->street;
        $order->phone = $request->phone;
        $order->user_id = Auth::user()->id;
        $order->total = 0;

        $order->save();

        $pedido = Order::all();

        $order_det->order_id = $pedido->last()->id;
        $order_det->food_id = $request->food_id;
        $order_det->cantidad = $request->cantidad;

        $precio = (Food::find($request->food_id)->price) * $request->cantidad;
        $order_det->total = $precio;

        $order_det->save();

        $order->total = $precio;
        $order->save();

        return redirect()->route('order.index',$order);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {

        $orders = Order_details::where('order_id', $order->id)->orderBy('id','desc')->paginate(6);
        return view('order.show', compact('orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $foods = Food::all();
        $orders_det = Order_details::where('order_id', $order->id);
        return view('order.edit', compact('foods', 'order','orders_det'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'street' => 'required',
            'phone' => 'required|numeric',
            'food_id' => 'required|numeric',
        ]);

        $order->street = $request->street;
        $order->phone = $request->phone;

        $order_det = new Order_details();

        $order_det->order_id = $order->id;
        $order_det->food_id = $request->food_id;
        $order_det->cantidad = $request->cantidad;
        $precio = (Food::find($request->food_id)->price) * $request->cantidad;
        $order_det->total = $precio;

        $order_det->save();

        $order->total = $order->total + $precio;

        $order->save();

        return redirect()->route('order.edit',$order);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
