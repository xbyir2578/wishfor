<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $user = User::orderBy('id', 'desc')->paginate(10);
        
        return view('users.index', [
           'user' => $user, 
        ]);
    }
    
    public function show($id)
    {
        $user = User::findOrFail($id);
        
        $user->loadRelationshipCounts();
        
        $wishfors = $user->wishfors()->orderBy('created_at', 'desc')->paginate(10);

        return view('users.show', [
            'user' => $user,
            'wishfors' => $wishfors,
        ]);
    }
}