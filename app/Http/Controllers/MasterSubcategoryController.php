<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;

class MasterSubcategoryController extends Controller
{
    public function storesubcategory (Request $request) {
        $validate_data = $request->validate([
            'subcategory_name' => 'unique:subcategories|max:100|min:2', // Tabel subcategories, bukan categories
            'category_id' => 'required|exists:categories,id', // Tambahkan kolom id untuk validasi foreign key
        ]);


        Subcategory::create($validate_data);

        return redirect()->back()->with('success', 'Sub Category Added Successfully');
    }

    public function showsubcategory($id) {
        $subcategory_info = Subcategory::find($id);
        return view('admin.sub_category.edit', compact('subcategory_info'));
    }

    public function updatesubcategory(Request $request, $id) {
        $subcategory = Subcategory::findOrFail($id);         
        $validate_data = $request->validate([
            'subcategory_name' => 'unique:subcategories|max:100|min:2', // Tabel subcategories, bukan categories
        ]);

        $subcategory->update($validate_data);

        return redirect() ->back()->with('success', 'Sub Category Updated Successfully');
    }

    public function deletesubcategory($id) {
        Subcategory::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Sub Category Deleted Successfully');
    }
}
