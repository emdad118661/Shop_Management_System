<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voucher;

class EvoucherController extends Controller
{
    //show table
    public function list(){
        $vouchers = Voucher::all();
        return view('voucher.elist')
        ->with('vouchers', $vouchers);
    }

// create
       public function create(){
        $voucher = Voucher::all(); 
         return view('voucher.ecreate')->with('voucher',$voucher);
     }
     public function addSubmit(Request $req){
        $this->validate($req,
        [
            'VOUID' => 'required|unique:vouchers,VOUID',
            'VOUCODE' => 'required|unique:vouchers,VOUCODE',
            'VOUPRICE' => 'required',
        ]
    );

    $vou = new Voucher();
    $vou->VOUID = $req->VOUID;
    $vou->VOUCODE = $req->VOUCODE;
    $vou->VOUPRICE = $req->VOUPRICE;
    $vou->save();

    return redirect()->route('voucher.elist');
     }


// edit 
    public function edit(Request $req)
    {
        $voucher = Voucher::where('VOUID', '=', decrypt($req->VOUID))
        ->select('VOUID','VOUCODE','VOUPRICE')
        ->first();
        return view('voucher.emedit')
        ->with('voucher', $voucher);
    }

    public function editSubmit(Request $req)
    {
        $this->validate($req,
            [
                'VOUCODE' => 'required|unique:vouchers,VOUCODE',
                'VOUPRICE' => 'required',
            ]
        );
        //end of validation
        $vou = Voucher::where('VOUID', '=', decrypt($req->VOUID))->first();
        // var_dump($st);
        $vou->VOUCODE = $req->VOUCODE;
        $vou->VOUPRICE = $req->VOUPRICE;
        $vou->save();
        return "<h1>form updated!</h1>";
    }

    public function delete(Request $req)
    {
        $voucher = Voucher::where('VOUID',decrypt($req->VOUID))->delete();
        return redirect()->route('voucher.elist');
    }
}
