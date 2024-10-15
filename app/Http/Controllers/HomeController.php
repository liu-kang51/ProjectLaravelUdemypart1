<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\MyBlog;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index(){
        // Product::find(1)->delete();
        // $product = Product::all();
        // dd($product);   
        // $product = Product::find(2);
        // $product = Product::withTrashed()->find(1); //untuk menliht data yang di hps dari soft delete 
        $product = Product::onlyTrashed()->get(); //untuk menliht data yang di hps dari soft delete 
        dd($product);   

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





//create data in db

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




 // $products = DB::table('products')->avg('price');
        // dd($products);

        //Create Data via orm model

        // $user = new User();
        // $user->name = 'wsxwsxwsx';
        // $user->email = '1111111111111@gmail.com';
        // $user->password = '11111';
        // $user->save();

        // $product = new Product();
        // $product->name = 'Laptop';
        // $product->description = 'adfaafad';
        // $product->price = 1000000;
        // $product->save();

        //read data 
        // $users = User::all();
        // foreach($users as $user){
        //     echo $user->name . ' --- ' . $user->email;
        //     echo "<br>";
        //     // echo $user->email . ' ';
        // }
        // $users = User::find(1);
        // dd($users);

        //update data
        // $user = User::where('id' , 1 )->first();
        // $user->email = "hello@gmail.com";
        // $user->password = "mmmm";
        // $user->save();
            // $user = User::find(1);
            // $user->name = 'test';
            // $user->save();

        //Delete data
        // $user = User::find(1)->delete();
        // $user = User::findorfail(3);
        // $user->delete();


         //is_admin = 0 (boolean)

        // User::create([
        //     'name' => 'admin12313',
        //     'email' => '1231231@gmail.com',
        //     'password' => bcrypt('123456'),
        //     'remenber_token' => 'test3443'
        // ]);
        
        // User::insert([
        //     [
        //         'name' => 'aadsfadfa',
        //         'email' => 'adfssfas21@gmail.com',
        //         'password' => '123456',
        //     ],
        //     [
        //         'name' => 'fdfdd',
        //         'email' => 'adafa213@gmail.com',
        //         'password' => '123456',
        //     ]
        // ]);



            //find somedata
           // $product = Product::where(['id' => 1])->where('price', '>', 303)->get(); //where id = 1 // can konsional 
        // $product = Product::where(['id' => 1])->where('price', 303)->get();
        // $product = Product::where('name', 'LIKE', '%dolor%')->orWhere('description', 'LIKE', '%aut%')->get();
        // dd($product);//condition untuk mencari data
        // $product = Product::whereIn('id',[1,2,3,4,5])->get();
        // $product = Product::whereBetween('price', [100, 300])->get(); 
        // dd($product);


        //scope active
        // $blogs = MyBlog::Active()->get();
        // dd($blogs);