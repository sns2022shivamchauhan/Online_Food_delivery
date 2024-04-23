<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Validator;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $item = Item::all();
        return view('items.index', compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = validator::make($request->all(), [
          'name' => 'required|string|max:255',
          // 'category_status' => 'required|in:active,inactive',
          // 'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
        ]);

        if ($validator->fails()) {
          return redirect()->back()->withErrors($validator)->withInput();
        }


        if ($request->hasFile('image')) {
          // Get the file from the request
          $image = $request->file('image');

          // Generate a unique name for the file
          $imageName = time() . '.' . $image->getClientOriginalExtension();

          // Store the file in the public/images directory
          $image->storeAs('public/item_images', $imageName);
        }
        $item = new Item;
        $item->name = $request->input('name');
        $item->description = $request->input('description');
        $item->price = $request->input('price');
        $item->image = $imageName;
        $item->is_active = $request->input('is_active');
        $item->sort_order = $request->input('sort_order');
        $item->save();
        return redirect()->back()->with('success', 'item Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
        return view('items.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        //
         // Validate the request data
    $validator = Validator::make($request->all(), [
      'name' => 'required|string|max:255',
      // Add validation rules for other fields if needed
  ]);

  // If validation fails, redirect back with errors
  if ($validator->fails()) {
      return redirect()->back()->withErrors($validator)->withInput();
  }

  // Update the category with the new data
  $item->name = $request->input('name');
  // Update other fields as needed

  // Save the updated category
  $item->save();

  // Redirect back with a success message
  return redirect()->back()->with('success', 'item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        //
    }
}
