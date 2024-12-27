<?php

namespace App\Http\Controllers;

use App\Models\ctQuanTriModels;
use Illuminate\Http\Request;

class ctQuanTriController extends Controller
{
    //
    public function ctList(){
        $ctAdmin=ctQuanTriModels::paginate(5);
        return view('ctAdmin.ctAdmin.ct-list',compact('ctAdmin'));
    }
    public function ctDelete($id)
    {
        $ctAdmin = ctQuanTriModels::find($id);
        $ctAdmin->delete();
        return redirect()->route('CongTung.Admin.List');
    }
}
