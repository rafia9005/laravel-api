<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\AlumniDetailResource;
use App\Http\Resources\PostDetailResource;
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
        $posts = Post::with('writer:id,username,email,role')->get();
        $alumni = Alumni::with('DetailAccount:id,username,email,role')->get();
    
        return response()->json([
            'data' => [
                'profile' => $user,
                'users' => $users,
                'posts' => PostDetailResource::collection($posts),
                'alumni' => AlumniDetailResource::collection($alumni),
            ],
        ], 200);
    }
}
