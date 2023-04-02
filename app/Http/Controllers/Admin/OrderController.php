<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $status='Pending';
        $products=Order::where('status', $status)->get();
        return view('admin.pendingorders', compact('products')); 
    }

}
