<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class bookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        // Validasi input jika diperlukan
        $request->validate([
            // Atur aturan validasi di sini
        ]);

        // Simpan data ke database
        Booking::create([
            'hotel_name' => $request->input('hotel_name'),
            'rooms' => $request->input('rooms'),
            'full_name' => $request->input('full_name'),
            'check_in_date' => $request->input('check_in_date'),
            'check_out_date' => $request->input('check_out_date'),
            'total_amount' => $request->input('total_amount'),
            // tambahkan kolom lain sesuai kebutuhan
        ]);

        // Tambahkan perhitungan total di sini
        $checkInDate = new \DateTime($request->input('checkInDate'));
        $checkOutDate = new \DateTime($request->input('checkOutDate'));
        $nightCount = $checkInDate->diff($checkOutDate)->days;
        $amount = (int) $request->input('amount');
        $harga = (int) $request->input('harga');

        $totalAmount = $nightCount * $harga * $amount; // Ganti 150000 dengan harga yang sesuai

        // Simpan data ke database
        $booking = new Booking();
        $booking->type = $request->input('type');
        $booking->hotel_name = $request->input('hotelName');
        $booking->name = $request->input('name');
        $booking->amount = $amount; // Gunakan variabel $amount yang sudah dihitung
        $booking->check_in_date = $request->input('checkInDate');
        $booking->check_out_date = $request->input('checkOutDate');
        $booking->total_amount = $totalAmount;
        $booking->save();

        // Redirect atau tampilkan halaman sesuai kebutuhan
        return redirect()->route('pages.succ');
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
