<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('pages.orders', ['request' => $request]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Simpan data pesanan ke database
        Order::create([
            'hotel_name' => $request->input('hotel_name'),
            'check_in_date' => $request->input('check_in_date'),
            'check_out_date' => $request->input('check_out_date'),
            // Tambahkan kolom lain sesuai kebutuhan
        ]);
    }


    // Inside your controller method
    public function showOrder(Request $request)
    {
        // Retrieve data from the request
        $hotelName = $request->input('hotel_name');
        $checkInDate = $request->input('check_in_date');
        $checkOutDate = $request->input('check_out_date');

        // Pass data to the view
        return view('pages.orders', compact('hotelName', 'checkInDate', 'checkOutDate'));
    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
