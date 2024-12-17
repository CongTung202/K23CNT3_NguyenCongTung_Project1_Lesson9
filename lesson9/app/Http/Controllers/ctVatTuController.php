<?php

namespace App\Http\Controllers;

use App\Models\ctVatTu;
use Illuminate\Http\Request;

class ctVatTuController extends Controller
{
    //
    public function list(){
        //lay du lieu tu db
        $ctVatTus=ctVatTu::paginate(10);
        return view('ctVatTu.List',['ctVatTus'=>$ctVatTus]);
    }
}
