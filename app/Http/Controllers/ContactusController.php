<?php

namespace App\Http\Controllers;

use App\Models\Contactus;
use App\Http\Requests\StoreContactusRequest;
use App\Http\Requests\UpdateContactusRequest;

class ContactusController extends Controller
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
    public function store(StoreContactusRequest $request)
    {
        
        $formdata = $request -> validate([
            'name' => ['required','min:3'],
            'email' => ['required','email'],
            'number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'location' => 'required',
            'message' => 'required'
        ]);
       // dd($request->input());
        
        Contactus::create($request->input());
        return redirect('/')->with('sucess', 'Our team will reach you and your message is delivered to us Sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contactus $contactus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contactus $contactus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactusRequest $request, Contactus $contactus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contactus $contactus)
    {
        //
    }
}
