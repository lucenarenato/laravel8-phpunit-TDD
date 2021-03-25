<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;


class UploadController extends Controller
{
    public function index()
    {
        return view('upload');
    }
 
    public function store(Request $request)
    {
        Upload::create([
            'file' => $request->file('file')->store('file', 'public')
        ]);
 
        if ($request->wantsJson()) {
            return response([], 204);
        }
 
        return back();
    }
}
