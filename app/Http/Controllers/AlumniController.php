<?php

namespace App\Http\Controllers;

use App\Http\Resources\AlumniDetailResource;
use App\Http\Resources\AlumniResource;
use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class AlumniController extends Controller
{
    public function index()
    {
        $alumni = Alumni::with('Account:id,username,email')->get();
        return AlumniResource::collection($alumni);
    }
    public function show($id)
    {
        $alumniShow = Alumni::with('DetailAccount:id,username,email')->findOrFail($id);
        return new AlumniDetailResource($alumniShow);
    }
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'nomer' => 'required|unique:alumni,nomer',
            'alamat' => 'required|string',
        ]);

        if ($validator->fails()){
            return response()->json(['errors' => $validator->errors()], 422);
        }
        
        $alumniCreate = new Alumni();
        $alumniCreate->nama = $request->nama;
        $alumniCreate->nomer = $request->nomer;
        $alumniCreate->alamat = $request->alamat;
        $alumniCreate->created_at = now();
        $alumniCreate->account = Auth::id();
        

        // Menyimpan kedalam database!
        $alumniCreate->save();
        return new AlumniDetailResource($alumniCreate);
    }
}
