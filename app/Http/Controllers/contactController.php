<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactStoreRequest;
use Illuminate\Http\Request;

class contactController extends Controller
{
    function index() {
        return view('contact');
    }

    function contactSubmit(ContactStoreRequest $request){







































        
    //     $request->validate(
    //         // [
    //         // // 'name' => 'required|max:20|min:2',
    //         // 'name' => ['required' , 'max:20', 'min:2'],
    //         // 'email' => 'required|email',
    //         // ],
    //         // [
    //         //  'name.required' => 'hey tolong minimal 2 kata cok',
    //         //  'name.max' => 'heyy kefull cok ',
    //         //  'name.min' => 'kecil kali cok 2 lah',
    //         //  'email.required' => 'oi pokaii email cok'
    //         // ]
    // );






        // echo $request->name;
        // echo "<br>";
        // echo $request->email;
        // echo "<br>";
        // echo $request->subject;
        // echo "<br>";
        // echo $request->message;
        //request data
        // dd(request());
        // echo $request->name;
        // dd( $request->all());

        
    }

    
    // function contactSubmit(){
    //     dd(request()); // tidak bagus
    // }
    
} 