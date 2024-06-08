<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Session;
class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showing()
    {
        return view('form');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function datapost(StorePostRequest $request)
    {    
            $request->validated();
            foreach($request->inputs as $key=> $value){
            Form::create($value);
            }
       
        Session::flash('success', 'Data Submitted Successfully');
        return redirect()->back();
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
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Form $form)
    {
        //
    }
}
