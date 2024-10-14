<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index(){
        $products = DB::table('products')->avg('price');
        dd($products);

        return view('welcome');
      
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





  //insert data
    //     DB::table('users')->insert([[
    //         'name' => 'hohan111',
    //         'email' => 'jaaaa11111@example.com',
    //         'password' => '1234'
    //     ],
    //     [
    //         'name' => 'artik12313',
    //         'email' => 'johdafafn@example.com',
    //         'password' => '1234'
    //     ]]
    // );

    //Get data
    // $users = DB::table('users')->where('email','jaaaa@example.com')->where('id', 2)->first();
    // $users = DB::table('users')->where('id', '>', 2 )->get();
    // return $users;

    //Update data
    // DB::table('users')->where('id', 1)->update([
    //     'name' => 'kimak',
    //     'email' => 'adafs234243@gmail.com',
    // ]);

    //delete data
    // DB::table('users')->where('id',1)->delete();
    //    return view ('welcome'); 

      // $blogs = DB::table('blogs')->pluck('title','id')->toArray();
        // dd($blogs);