<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
       return view ('welcome'); 
    }

    function showHomePage(){
        return view('home');
    }

    function showArtikelPage() {
        return view('contact', [
            'title' => 'hello', 
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident velit doloribus exercitationem ullam corrupti quos obcaecati sed dolores veritatis accusantium. Harum, eos? Praesentium quod pariatur hic? Sit commodi sint in.'
        ]);
    }
}    
