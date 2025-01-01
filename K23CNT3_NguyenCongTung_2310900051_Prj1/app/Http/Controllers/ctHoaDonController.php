<?php

namespace App\Http\Controllers;

use App\Models\ctHoaDon;
use Illuminate\Http\Request;

class ctHoaDonController extends Controller
{
    public function ctList(){
        $ctHoaDon=ctHoaDon::paginate(5);
        return view('ctAdmin.ctHoaDon.ct-list',compact('ctHoaDon'));
    }
}
