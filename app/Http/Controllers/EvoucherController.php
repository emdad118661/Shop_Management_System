<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voucher;

class EvoucherController extends Controller
{
    //
    public function list(){
        $vouchers = Voucher::all();
        return view('voucher.elist')
        ->with('vouchers', $vouchers);
    }
     public function create()
     {
        return view('voucher.ecreate');
     }
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
                'VOUCODE' => 'required',
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
