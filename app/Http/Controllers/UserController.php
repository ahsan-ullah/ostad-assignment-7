<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return "Hello Laravel!";
        return view("User");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login($request_email, $request_password)
    {
        $email = "ahsanullah@gmail.com";
        $password = "123456789";
        if($email == $request_email && $password == $request_password) {

            return "Login Successful";
        } else {
            return "Login is Invalid";
        }
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
