<?php

namespace App\Http\Controllers;

use App\Models\ctNhaCC;
use Illuminate\Http\Request;

class ctNhacCCcontroller extends Controller
{
    //list / create/edit /deete
    public function list(){
        //lay du lieu tu db
        $ctNhaCCs=ctNhaCC::paginate(10);
        return view('ctNhaCC.List',['ctNhaCCs'=>$ctNhaCCs]);
    }
}
