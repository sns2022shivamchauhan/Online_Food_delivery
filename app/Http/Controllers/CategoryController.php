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
      'is_pizza' => 'required|in:active,inactive',
      'category_status' => 'required|in:active,inactive',
  ]);

  if ($validator->fails()) {
      return redirect()->back()->withErrors($validator)->withInput();
  }

    $category = new Category;
    $category->name = $request->input('name');
    $category->is_pizza = $request->input('is_pizza');
    $category->category_status = $request->input('category_status');
    $category->save();
    return redirect()->back()->with('success', 'Category Created Successfully.');

  }
}
