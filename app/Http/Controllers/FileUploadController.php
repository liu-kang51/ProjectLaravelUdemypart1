<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Str;

class FileUploadController extends Controller
{
    function index(){
        $files = File::all();
        return view('file-upload',['files' => $files]);
    }

    function store(Request $request){
        //  $file = Storage::disk('local')->put('/', $request->file('file'));
        // $file = $request->file('file')->store('/', 'local');
        // $file = $request->file('file')->store('/', 'public'); //default

        $file = $request->file('file');
        $customName = 'laravel_'. Str::uuid();
        $ext = $file->getClientOriginalExtension();
        $fileName = $customName. '.' . $ext;
        
        $path = $file->storeAs('/', $fileName, 'dir_public');

        // $file = $request->file('file')->store('/', 'dir_public'); //custom

        // $fileStore = new File();
        // $fileStore->file_path = $file;
        // $fileStore->save();

        $fileStore = new File();
        $fileStore->file_path = '/uploads/'.$path;
        $fileStore->save(); //custom
        
        dd('stored');
    }

    function download(){
        return Storage::disk('local')->download('fUWCjuPRGR2NQ0OpeBlzf0W7EG0Bxpa2tyP9XpiX.png');
    }
}