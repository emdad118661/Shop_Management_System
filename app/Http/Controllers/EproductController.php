<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class EproductController extends Controller
{
    //
    public function list(){
        $products = Product::all();
        return view('product.elist')
        ->with('products', $products);
    }
    public function edit(Request $req)
    {
        $product = Product::where('PID', '=', decrypt($req->PID))
        ->select('PID', 'PBPRICE', 'PSTOCK', 'PDISCOUNT', 'PDESCRIPTION', 'PSOLDQUANTITY')
        ->first();
        return view('product.emedit')
        ->with('product', $product);
    }
    public function editSubmit(Request $req)
    {
        $this->validate($req,
            [
                'PBPRICE' => 'required',
                'PSTOCK' => 'required',
                'PDISCOUNT' => 'required',
                'PDESCRIPTION' => 'required',
                'PSOLDQUANTITY' => 'required'
            ]
        );
        //end of validation
        $pr = Product::where('PID', '=', decrypt($req->PID))->first();
        // var_dump($st);
        $pr->PBPRICE = $req->PBPRICE;
        $pr->PSTOCK = $req->PSTOCK;
        $pr->PDISCOUNT = $req->PDISCOUNT;
        $pr->PDESCRIPTION = $req->PDESCRIPTION;
        $pr->PSOLDQUANTITY = $req->PSOLDQUANTITY;
        $pr->save();
        return "<h1>form updated!</h1>";
    }
}
