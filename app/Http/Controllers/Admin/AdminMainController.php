<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Setting;

class AdminMainController extends Controller
{
    public function index (){
        return view('admin.admin');
    }

    public function setting (){
        $products = Product::all();
        $homepagesetting = Setting::first() ?? new Setting(); 
        return view('admin.settings', compact('products', 'homepagesetting'));
    }

    public function homepageupdate(Request $request){
        $request->validate([
            'discounted_product_id' => 'required|exists:products,id',
            'discounted_percent' => 'required|numeric|min:0',
            'discounted_heading' => 'required|string|max:255',
            'discounted_subheading' => 'required|string|max:255',
            'featured_product_1_id' => 'nullable|exists:products,id',
            'featured_product_2_id' => 'nullable|exists:products,id',
        ]);

        $homepagesetting = Setting::first() ?? new Setting();
        $homepagesetting->fill($request->all());
        $homepagesetting->save();

        return redirect()->route('admin.settings')->with('success', 'Homepage setting updated successfully');
    }
    
    public function manage_users (){
        return view('admin.manage.user');
    }

    public function manage_stores (){
        return view('admin.manage.store');
    }

    public function cart_history (){
        return view('admin.cart.history');
    }

    public function order_history (){
        return view('admin.order.history'); 
    }
}
