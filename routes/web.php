<?php

use App\Models\MyBlog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SingleActionController;
use Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher;

Route::get('/', [HomeController::class, 'showHomePage'])->name('showHomePage');

Route::get('contact',[contactController::class, 'index'])->name('contact.index');
Route::post('contact',[contactController::class, 'contactSubmit'])->name('contact.submit');

Route::get('/file-upload', [FileUploadController::class, 'index'])->name('file.upload');

Route::post('/file-upload',[FileUploadController::class, 'store'])->name('file.store');

Route::get('/file-download',[FileUploadController::class, 'download'])->name('file.download');

// post,
// put,
// patch,
// delete








































// Route::get('/home', [HomeController::class, 'showHomePage']);

// Route::fallback(function() {
//     return "404 Not Found The web";
// });

// Route::get('/contact', [HomeController::class,'showArtikelPage']);
// Route::get('/single-action', SingleActionController::class);

// // Route::resource('/blog', BlogController::class);

// Route::get('/blog', function(){
//     $blogs = MyBlog::all(); // Select * From blogs; all data
//     dd($blogs);
// });








// Route::post('/blog/create',[BlogController::class, 'create'])->name('blog.create');
// Route::post('/blog/show',[BlogController::class, 'show'])->name('blog.show');

// Route::post('/blog/update',[BlogController::class, 'update'])->name('blog.update');

// Route::post('/blog/delete',[BlogController::class, 'delete'])->name('blog.delete');




// Route::get('/blog', function () {
//     $title = "blog is page";
//     $description = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident velit doloribus exercitationem ullam corrupti quos obcaecati sed dolores veritatis accusantium. Harum, eos? Praesentium quod pariatur hic? Sit commodi sint in.";
//     return view('blog.cerita',['title' => $title, 'description' => $description]); //buat msk ke sebuah folder dengan namafilenya didalam
// });

// Route::get('/about', function () {
//     $books = ["majalah","buku cerita","buku seram"];
//     return view('about', ['books' => $books]);
// });























//fallback route
// Route::fallback(function() {
//     return "404 Not Found The web";
// });

























//Route Methods
/*
*  1. Get - if we wanna to get data
*  2. POST - submit/store data
*  3. PUT - if update
*  4. PATCH - if update
*  5. DELETE - when we delete something
*
*/

// Route::get('get-route', function () {
//     return;
// });

// Route::post('post-route', function () {
//     return;
// });


// Route::put('put-route', function () {
//     return;
// });


// Route::patch('patch-route', function () {
//     return;
// });


// Route::delete('delete-route', function () {
//     return;
// });




// Route::get('/about', function () {
//     return "is about home";
// })->name('my.about');     

// Route::get('/user/{id}/{slug}', function ($id, $slug) {
//     return "hello user " . $id. " " . $slug;
// })->name('my.user');

// Route::group(['prefix' => 'blog', 'as' => 'blog.'], function(){
//     Route::get('/create', function(){
//         return "Blog Create Page";
//     })->name('create');

//     Route::get('/edit', function(){
//         return "Blog Edit Page";
//     })->name('edit');

//     Route::get('/show', function(){
//         return "Blog Show Page";
//     })->name('show');
// });
