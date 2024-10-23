<?php

namespace App\Http\Controllers;

use Str;
use App\Models\File;
use App\Models\Validated;
use Illuminate\Http\Request;
use App\Http\Requests\FileUpload;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File as Handlefile; //untuk membantu membuat file yang sama dengan as

class FileUploadController extends Controller
{
    function index(){
        // $file = File::find(2);
        // HandleFile::delete(public_path($file->file_path));
        // $file->delete();
        //delete file

        $files = File::all();
        return view('file-upload',['files' => $files]);
    }

    // function store(FileUpload $request){

    //     $validated = new Validated();
    //     $validated->file = $request->file;

    //     // $request->validate([
    //     //     'file' => ['required', 'image']  
    //     //   ]);
  
    //     // $request->validate([
    //     //   'file' => ['required', 'file', 'mimes:zip,pdf,csv', 'max:3000']  
    //     // ]);

    //     //upload file
    //     //  $file = Storage::disk('local')->put('/', $request->file('file'));
    //     // $file = $request->file('file')->store('/', 'local');
    //     // $file = $request->file('file')->store('/', 'public'); //default

    //     $file = $request->file('file');
    //     $customName = 'laravel_'. Str::uuid();
    //     $ext = $file->getClientOriginalExtension();
    //     $fileName = $customName. '.' . $ext;
        
    //     $path = $file->storeAs('/', $fileName, 'dir_public');

    //     // $file = $request->file('file')->store('/', 'dir_public'); //custom

    //     // $fileStore = new File();
    //     // $fileStore->file_path = $file;
    //     // $fileStore->save();

    //     $fileStore = new File();
    //     $fileStore->file_path = '/uploads/'.$path;
    //     $fileStore->save(); //custom
        
    //     // return redirect()->back()->with('success', 'Upload sukses!');
    //     dd('sukses');
    // }

    // function download(){
    //     return Storage::disk('local')->download('fUWCjuPRGR2NQ0OpeBlzf0W7EG0Bxpa2tyP9XpiX.png');
    // }

    function store(Request $request){

       

        $request->validate([
            'file' => ['required', 'image']  
          ]);
  
        // $request->validate([
        //   'file' => ['required', 'file', 'mimes:zip,pdf,csv', 'max:3000']  
        // ]);

        //upload file
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
        
        // return redirect()->back()->with('success', 'Upload sukses!');
          
        // return redirect()->route('file.upload');

        // return redirect()->back();
        return redirect()->route('showHomePage');

    }

    function download(){
        return Storage::disk('local')->download('fUWCjuPRGR2NQ0OpeBlzf0W7EG0Bxpa2tyP9XpiX.png');
    }
}