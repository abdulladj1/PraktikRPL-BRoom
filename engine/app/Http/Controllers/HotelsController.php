<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.hotels');
    }
    public function junior()
    {
        return view('pages.junior');
    }
    public function exec()
    {
        return view('pages.executive');
    }
    public function bookgv(Request $request)
    {
        return view('pages.bookingGV', ['request' => $request]);
    }
    public function bookuo()
    {
        return view('pages.bookingUO');
    }
    public function bookmm()
    {
        return view('pages.bookingMM');
    }
    public function bookhv()
    {
        return view('pages.bookingHV');
    }
    public function bookre()
    {
        return view('pages.bookingRE');
    }
    public function bookob()
    {
        return view('pages.bookingOB');
    }
    public function bookah()
    {
        return view('pages.bookingAH');
    }
    public function bookeg()
    {
        return view('pages.bookingEG');
    }
    public function booktb()
    {
        return view('pages.bookingTB');
    }
    public function super()
    {
        return view('pages.super');
    }
    public function checkout(Request $request)
    {
        return view('pages.checkout', ['request' => $request]);
    }
    public function end(Request $request)
    {
        return view('pages.succ', ['request' => $request]);
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
        //
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
