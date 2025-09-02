<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(Request $request)
    {

        $user = auth()->user();
        return response()->json([
            'status' => true,
            'message' => 'User Profile',
            'user' => $user,
        ]);
    }
}
