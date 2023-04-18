<?php

namespace App\Http\Controllers;

use App\Models\addcompany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class AddcompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_Home(request $request)
    {
        $form = new addcompany();

        $form->name = $request->input('name');
        $form->image = $request->input('image');
        $form->address = $request->input('address');
        $form->contact = $request->input('contact');
        $form->website = $request->input('website');
        $form->email = $request->input('email');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getclientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/form/',$filename);
            $form->image = $filename;
        }
        else{
            return $request;
            $form->image = '';
        }
        $form->save();
        return view('companyprofile');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = addcompany::all();
        return view("/companyprofile", compact("users"));
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
     * @param  \App\Models\addcompany  $addcompany
     * @return \Illuminate\Http\Response
     */
    public function show(addcompany $addcompany)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\addcompany  $addcompany
     * @return \Illuminate\Http\Response
     */
    public function edit(addcompany $addcompany)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\addcompany  $addcompany
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, addcompany $addcompany)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\addcompany  $addcompany
     * @return \Illuminate\Http\Response
     */
    public function destroy(addcompany $addcompany)
    {
        //
    }
}
