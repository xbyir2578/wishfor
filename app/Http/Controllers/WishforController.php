<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Wishfor;

class WishforController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) { // 認証済みの場合
            // 認証済みユーザを取得
            $user = \Auth::user();
            
            $wishfors = $user->wishfors()->orderBy('created_at', 'desc')->paginate(10);

            $data = [
                'user' => $user,
                'wishfors' => $wishfors,
            ];
        }

        return view('welcome', $data);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|max:255',
            'url' => 'required|max:255',
            
        ]);

        $request->user()->wishfors()->create([
            'content' => $request->content,
            'url' => $request->url,
            //'owned' =>$request->owned,
            
        ]);

        // return back();
        return redirect('/');
    }
    
    public function destroy($id)
    {
        $wishfor = \App\Wishfor::findOrFail($id);

        if (\Auth::id() === $wishfor->user_id) {
            $wishfor->delete();
        }

        return back();
    }
}
