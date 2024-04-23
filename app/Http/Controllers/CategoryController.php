<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Category;


class CategoryController extends Controller
{

  public function index()
  {
    $categories = Category::all(); // Retrieve all categories from the database
    return view('category.index', compact('categories')); // Pass the categories to the view
  }
  //
  public function create()
  {
    return view('category.create');
  }

  public function store(Request $request)
  {

    $validator = Validator::make($request->all(), [
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
      $image->storeAs('public/category_images', $imageName);
    }
    $category = new Category;
    $category->name = $request->input('name');
    $category->image = $imageName;
    // $category->description = $request->input('description');
    $category->is_active = $request->input('is_active');
    $category->sort_order = $request->input('sort_order');

    $category->save();
    return redirect()->back()->with('success', 'Category Created Successfully.');

  }

  public function edit(Category $category)
  {

    return view('category.edit',compact('category'));
  }



  public function update(Request $request, Category $category)
{
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
    $category->name = $request->input('name');
    // Update other fields as needed

    // Save the updated category
    $category->save();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Category updated successfully.');
}

public function destroy(Category $category)
{
    // Delete the category
    $category->delete();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Category deleted successfully.');
}



}
