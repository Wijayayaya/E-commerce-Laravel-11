<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MasterCategoryController extends Controller
{
    public function storecategory(Request $request)  {
        $validate_data = $request->validate([
            'category_name' => 'unique:categories|max:100|min:2',
        ]);

        Category::create($validate_data);

        return redirect()->back()->with('success', 'Category Added Successfully');
    }

    public function showcategory($id) {
        $category_info = Category::find($id);
        return view('admin.category.edit', compact('category_info'));
    }

    public function updatecategory(Request $request, $id) {
        $category = Category::findOrFail($id);         
        $validate_data = $request->validate([
            'category_name' => 'unique:categories|max:100|min:2',
        ]);

        $category->update($validate_data);

        return redirect() ->back()->with('success', 'Category Updated Successfully');
    }

    public function deletecategory($id) {
        Category::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Category Deleted Successfully');
    }
}
