<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
    public function index(Request $request)
    {
        $langs = ['ar','en'];
        if($request->has('lang')){
            if (in_array($request->get('lang'),$langs)){
                Session::put('locale', $request->get('lang'));
                return redirect()->back();
            }
        }
        return redirect()->back();
    }
}
