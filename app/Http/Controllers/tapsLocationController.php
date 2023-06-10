<?php

namespace App\Http\Controllers;

use App\Models\taps;
use Illuminate\Http\Request;

class tapsLocationController extends Controller
{
    function listlocations(){
        $result=taps::all();
        return $result;
    }


    public function gettaps($personName) {
        return taps::where('personName','like',$personName) -> first();
    }
    
    public function addtap(Request $request) {
        $list = new taps();
        $list->Buissnes_type = $request->input('location');
        $list->emailLogedIn = $request->input('personName');
        $list->appleWallet = $request->input('website');
        $list->save();
        return  $list;
    }


}
