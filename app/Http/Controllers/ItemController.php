<?php

namespace App\Http\Controllers;
use App\Models\Admin\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
{
    //
    public function index()
    {
        return view('admin.items.index');
    }

    public function create(){
       return view('admin.items.create');
    }

    public function store(Request $request){
      $validator = Validator::make($request->all(), [
        'price' => 'required|decimal',
    ]);

    $item = new Item();
    $item->name = $request->name;
    $item->description = $request->description;
    $item->price = $request->price;
    $item->status = $request->status;
    $item->save();
    // $item->taxes = $request->taxes;
    // $item->categories = $request->categories;
    return redirect()->back()->with('success', 'Item Added successfullly');

    }
}
