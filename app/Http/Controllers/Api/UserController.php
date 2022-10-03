<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

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
}
