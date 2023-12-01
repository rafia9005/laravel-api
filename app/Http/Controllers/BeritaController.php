<?php

namespace App\Http\Controllers;

use App\Http\Resources\BeritaResource;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        return BeritaResource::collection($berita);
    }
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'berita_content' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }


        $author = Auth::id();
        $beritaCreate = new Berita();
        $beritaCreate->title = $request->title;
        $beritaCreate->berita_content = $request->berita_content;
        $beritaCreate->save();

        return response()->json(['data' => $beritaCreate]);
    }
}
