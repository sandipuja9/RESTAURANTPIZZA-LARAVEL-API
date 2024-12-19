<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Ambil semua data order dari database
        $orders = Order::with('orderDetails')->get(); // Load relasi jika ada

        // Kembalikan data dalam format JSON
        return response()->json([
            'success' => true,
            'data' => $orders
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'restaurant_id' => 'required|integer',
            'order_details' => 'required|array',
            'total_price' => 'required|numeric',
        ]);

        // Simpan data ke database (contoh)
        $order = Order::create($validatedData);

        // Kembalikan respons JSON
        return response()->json([
            'message' => 'Order created successfully',
            'order' => $order,
        ], 201);
    }

        /**
         * Display the specified resource.
         *
         * @param  \App\Models\Order  $order
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            $order = Order::findOrFail($id);
            return response()->json($order);
        }
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
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
        //
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
