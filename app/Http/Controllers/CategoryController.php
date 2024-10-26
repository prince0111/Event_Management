<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function CategoryView(){
        $data['allData'] = Category::all();
        return view("admin.category.category",$data);
    }
    public function CategoryAdd(){
        return view("admin.category.category-add");
    }
    public function CategoryStore(Request $request){

        $nameExists = Category::where('name', $request->name)->exists();
        if ($nameExists) {
            toastr()->warning('Category Already Exist!');
        return redirect()->route('category.add');
        } else {
        $data = new Category();
        $data->name = $request->name;
        $data->save();

        toastr()->success('Category has been Created successfully!');
        return redirect()->route('category.view');
        }
    }
    public function CategoryEdit($id){
        $categoryEdit = category::find($id);
        return view('admin.category.category-edit',compact('categoryEdit'));
    }

    public function CategoryUpdate(Request $request, $id){
        $nameExists = Category::where('name', $request->name)->exists();
        if ($nameExists) {
            $categoryEdit = category::find($id);
            toastr()->warning('Category Already Exist!');
            return view('admin.category.category-edit',compact('categoryEdit'));
        } else {

            $nameExists = Event::where('category_id', $id)->exists();
        if ($nameExists) {
            $categoryEdit = category::find($id);
            toastr()->warning('Category is used in Event Cant Edit!');
            return view('admin.category.category-edit',compact('categoryEdit'));
        } else {
            $data = Category::find($id);
            $data->name = $request->name;
            $data->save();

            toastr()->success('Category has been Edit successfully!');
            return redirect()->route('category.view');
        }
        }
    }//End Unit Update

    public function CategoryDelete($id){
        $nameExists = Event::where('category_id', $id)->exists();
        if ($nameExists) {
            toastr()->warning('Category is used in Event Cant Delete!');
            return redirect()->route('category.view');
        } else {
            $data = Category::find($id);
            $data->delete();
            toastr()->warning('Category has been Deleted Successfully!');
            return redirect()->route('category.view');
        }
       
    }
}
