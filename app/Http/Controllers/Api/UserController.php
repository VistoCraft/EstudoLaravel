<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function __invoke()
    {
        //$users = User::all();
        
        $userLogged = Auth::id();
        //$users = User::where('id', '!=', $userLogged->id)->get();

        return response()->json([
            'users' => $userLogged
        ], Response::HTTP_OK);
    }

}
