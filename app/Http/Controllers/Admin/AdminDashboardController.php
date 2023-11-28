<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $users = User::all();
        $posts = Post::all();
        $alumni = Alumni::all();
    
        return response()->json([
            'data' => [
                'profile' => $user,
                'users' => $users,
                'posts' => $posts,
                'alumni' => $alumni,
            ],
        ]);
    }
}
