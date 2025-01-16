<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller{

    public function store(Request $request){

    $validated = $request->validate([
                'user_id' => 'required|exists:users,id',
                'products' => 'required|array',
                'amount' => 'required|numeric|min:0',
                'payment_method' => 'required|string|in:card,paypal,bank_transfer',
                ]);



            $order = Order::create([
            'user_id' => $request->user_id,
            'products' => json_encode($request->products),
            'amount' => $request->amount,
            'payment_method' => $request->payment_method,
            ]);

            return response()->json([
                'message' => 'Pedido criado com sucesso!',
                'order' => $order
            ], 201);
    }

    public function userOrders()
    {
        $orders = Order::where('user_id', auth()->id())
                      ->orderBy('created_at', 'desc')
                      ->get();

        return view('user.orders', compact('orders'));
    }
}
