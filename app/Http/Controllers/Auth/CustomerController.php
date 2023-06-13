<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers=customer::all();
        return view('auth.customer.index',['customers'=>$customers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('auth.customer.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

       $a= $request->validate([
            'name'=>['required','string'],
            'phone'=>['required','string'],
            'email'=>['required','string'],
            'city'=>['required','string'],
            'category'=>['required','integer']
            ]);
            customer::Create([
                'customer_name'=>$request->name,
                 'customer_phone_no'=>$request->phone,
                'customer_email'=>$request->email,
                'customer_city'=>$request->city,
                'category_id'=>$request->category
            ]);
           // dd($a);

            return redirect()->route('customer.index')->with('Success', 'Tag Added');

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
