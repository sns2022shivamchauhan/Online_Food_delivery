<?php

namespace App\Http\Controllers;

use App\Models\ModifierGroup;
use Illuminate\Http\Request;

class ModifierGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $modifierGroups = ModifierGroup::all();
        return view('modifier_group.index', compact('modifierGroups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('modifier_group.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $modifierGroup = new ModifierGroup;
        $modifierGroup->name = $request->input('name');
        $modifierGroup->is_active = $request->input('is_active');
        $modifierGroup->is_limit = $request->input('is_limit');
        $modifierGroup->min_limit = $request->input('limit');
        $modifierGroup->max_limit = $request->input('limit');
        $modifierGroup->sort_order = $request->input('sort_order');
        $modifierGroup->save();
        return redirect()->back()->with('success', 'Category Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ModifierGroup $modifierGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ModifierGroup $modifierGroup)
    {
        //

        return view();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ModifierGroup $modifierGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModifierGroup $modifierGroup)
    {
        //
    }
}
