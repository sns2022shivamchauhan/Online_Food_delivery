<?php

namespace App\Http\Controllers;

use App\Models\Modifier;
use Illuminate\Http\Request;

class ModifierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         $modifiers  = Modifier::all();
        return view('modifier.index', compact('modifiers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('modifier.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $modifier = new Modifier;
        $modifier->name = $request->input('name');
        $modifier->price = $request->input('price');
        $modifier->is_active = $request->input('is_active');
        $modifier->sort_order = $request->input('sort_order');
        $modifier->save();
        return redirect()->back()->with('success', 'Category Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Modifier $modifier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Modifier $modifier)
    {
        //
        return view('modifier.edit');

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Modifier $modifier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Modifier $modifier)
    {
        //
    }
}
