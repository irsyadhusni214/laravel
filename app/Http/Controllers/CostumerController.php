<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CostumerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $costumer = \App\Costumer::all();
        return $costumer;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    public function store($code_customer, $name, $email, $country, $city, $address, $contact_number)
    {
        $costumer = new \App\Costumer();
        $costumer->code_customer = $code_customer;
        $costumer->name = $name;
        $costumer->email = $email;
        $costumer->country = $country;
        $costumer->city = $city;
        $costumer->address = $address;
        $costumer->contact_number = $contact_number;
        $costumer->save();
        return $costumer;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $costumer = \App\Costumer::find($id);
        return $costumer;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $code_customer, $name, $email, $country, $city, $address, $contact_number)
    {
        $costumer = \App\Costumer::find($id);
        $costumer->code_customer = $code_customer;
        $costumer->name = $name;
        $costumer->email = $email;
        $costumer->country = $country;
        $costumer->city = $city;
        $costumer->address = $address;
        $costumer->contact_number = $contact_number;
        $costumer->save();
        return $costumer;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $costumer = \App\Costumer::find($id);
        $costumer->delete();
        return $costumer;
    }
}
