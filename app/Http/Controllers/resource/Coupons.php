<?php

namespace App\Http\Controllers\Resource;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;

class Coupons extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coupons = Coupon::all();
        return view('content.resource.coupons', compact('coupons'));
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
        $coupon = new Coupon();
        $coupon->code = $request.input('coupon_code');
        $coupon->name = $request.input('coupon_name');
        $coupon->discount_value = $request.input('discount_value');
        $coupon->discount_type = $request.input('discount_type');
        $coupon->status = $request.input('status');

        $coupon->save();
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
        $coupon = Coupon::findOrFail($request.input('id'));
        $coupon->code = $request.input('coupon_code');
        $coupon->name = $request.input('coupon_name');
        $coupon->discount_value = $request.input('discount_value');
        $coupon->discount_type = $request.input('discount_type');
        $coupon->status = $request.input('status');

        $coupon->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
