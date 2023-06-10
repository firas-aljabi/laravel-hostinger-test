<?php

namespace App\Http\Controllers;

use App\Models\userInfo;
use Illuminate\Http\Request;

class users_infoController extends Controller
{
    function list(){
        $result=userInfo::all();
        return $result;
    }


    public function geTheCustomer($emailLogedIn) {
        return userInfo::where('emailLogedIn','like',$emailLogedIn) -> first();
    }

 
    public function addDetails(Request $request) {
        $list = new userInfo();
        $list->email = $request->input('email');
        $list->name = $request->input('name');
        $list->location = $request->input('location');
        $list->phonenumber = $request->input('phonenumber');
        $list->photo = $request->input('photo');
        $list->bio = $request->input('bio');
        $list->facebook = $request->input('facebook');
        $list->instagrame = $request->input('instagrame');
        $list->twitter = $request->input('twitter');
        $list->tiktok = $request->input('tiktok');
        $list->linkedIn = $request->input('linkedIn');
        $list->telegrame = $request->input('telegrame');
        $list->Buissnes_type = $request->input('Buissnes_type');
        $list->emailLogedIn = $request->input('emailLogedIn');
        $list->appleWallet = $request->input('appleWallet');
        $list->whatsapp = $request->input('whatsapp');
        $list->save();
        return  $list;
    }

    public function updateCustomer(Request $request, $emailLogedIn)
    {
    //   Validate the request data
      $validatedData =([ 
       'email' => $request->input('email'),
       'name' => $request->input('name'),
       'location' => $request->input('location'),
       'phonenumber' => $request->input('phonenumber'),
       'photo' => $request->input('photo'),
       'bio' => $request->input('bio'),
       'facebook' => $request->input('facebook'),
       'instagrame' => $request->input('instagrame'),
       'twitter' => $request->input('twitter'),
       'tiktok' => $request->input('tiktok'),
       'linkedIn' => $request->input('linkedIn'),
       'telegrame' => $request->input('telegrame'),
       'Buissnes_type' => $request->input('Buissnes_type'),
       'appleWallet' => $request->input('appleWallet'),
      // 'emailLogedIn' => $request->input('emailLogedIn')
      ]);
   
      // Update the item in the database
      $item = userInfo::where('emailLogedIn','=',$emailLogedIn) ;
      $item->update($validatedData);
   
      return response()->json([
        'success' => true,
        'data' => $item
      ]);
    }




}
