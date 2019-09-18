<?php

namespace App\Http\Controllers;

use App\MyClass;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = MyClass::all()->sortBy('name');

        return view('class.index', compact('classes'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MyClass  $myClass
     * @return \Illuminate\Http\Response
     */
    public function show(MyClass $myClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MyClass  $myClass
     * @return \Illuminate\Http\Response
     */
    public function edit(MyClass $myClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MyClass  $myClass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MyClass $myClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MyClass  $myClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyClass $myClass)
    {
        //
    }
}
