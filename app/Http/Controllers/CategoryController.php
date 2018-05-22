<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller

{
  //to create number of main menus
  public function getValueOfMenu(Request $request){
    $getValue=$request->input('number_of_menus');
    return view('category')->with(compact('getValue'));
  }

//to get the list of name of main menu
  public function getNamesOfMenu(Request $request,$number){
    $getName=\Request::input('menu');
    for ($i=0; $i <count($getName) ; $i++) {
      $menus=Category::create([
        'name'=>$getName[$i],
      ]);
    }
  }


  public function manageCategory(){
     $categories = Category::where('parent_id', '=', 0)->get();
     $allCategories = Category::pluck('name','id')->all();

     return view('categoryView',compact('categories','allCategories'));
  }

//add categories into existing menus or categories
   public function addCategory(Request $request){
      $this->validate($request, [
      		'name' => 'required',
      	]);
      $input = $request->all();
      $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];

      Category::create($input);
      return back()->with('success', 'New Category added successfully.');
    }


  public function form(){
    return view('category');
  }
}
