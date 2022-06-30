<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Wishfor;

class OwnedController extends Controller
{
    public function store(Request $request, $id)
    {
        //$wishfor = User::where('id', $id)->get();
        
        //Wishfor::where('id', $id)->get();
        
        //Wishfor::find($id)->get();
    
        //取得したレコードの「owned」カラムをtrueに設定し、レコードの更新を行う
        $wishfor = Wishfor::find($id);
        
        $wishfor->owned = $request->owned;
        $wishfor->save();

        return back();
    }

    public function destroy($id)
    {
        //User::where('id', $id)->unget();
        // \Auth::user()->where('id', $id)->unget();
        
        //Wishfor::where('id', $id)->unget();
        
        Wishfor::find($id)->unget();
        
        return back();
    }
}