<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function index()
    {
        $userLogado = Auth::user();

        $users = User::where('id', '!=', $userLogado->id)->get();

        return response()->json([
            'users' => $users
        ], Response::HTTP_OK);
    }
    public function show(User $user)
    {
        return response()->json([
            'user' => $user
        ], Response::HTTP_OK);
    }
    public function me(){
        $userLogado = Auth::user();

        return response()->json([
            'user' => $userLogado
        ], Response::HTTP_OK);
    }
}
