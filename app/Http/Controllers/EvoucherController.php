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
}
