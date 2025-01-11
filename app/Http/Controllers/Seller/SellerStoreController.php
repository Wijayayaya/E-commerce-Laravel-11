<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerStoreController extends Controller
{
          public function index(){
        return view ('seller.store.create');
    }

        public function manage(){
            $user_id = Auth::user()->id;
            $stores = Store::where('user_id', $user_id)->get();
        return view ('seller.store.manage', compact('stores'));
    }

    public function store(Request $request){
        $validate_data = $request->validate([
            'store_name' => 'unique:stores|max:100|min:3',
            'slug' => 'unique:stores|required',
            'details' => 'required',
        ]);

        Store::create([
            'store_name'=> $request->store_name,
            'slug'=> $request->slug,
            'details'=> $request->details,
            'user_id'=> Auth::user()->id,
        ]);

        return redirect()->back()->with('success', 'Store Created Successfully');
    }

    public function showstore($id) {
        $stores_info = Store::find($id);
        return view('seller.store.edit', compact('stores_info'));
    }

    public function updatestore(Request $request, $id) {
        $stores_info = Store::findOrFail($id);         
        $validate_data = $request->validate([
            'store_name' => 'unique:stores|max:100|min:3',
            'slug' => 'unique:stores|required',
            'details' => 'required',
        ]);

        $stores_info->update($validate_data);

        return redirect() ->back()->with('success', 'Store Updated Successfully');
    }

    public function deletestore($id) {
        Store::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Store Deleted Successfully');
    }
}
