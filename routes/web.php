<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => 'home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => 'about',
        "name" => "Salim Maula Hudzaifah",
        "email" => "huzaifahh956@gmail.com",
        "image" => "salim4.jpg"
    ]);
});



Route::get('/posts', [PostController::class, 'index']);

//Halaman single post
Route::get('post/{post:slug}', [PostController::class, 'show']

    //! sudah tidak butuh karna kita sudah membuat model
    // $blog_post = [
    //     [
    //         "title" => "Judul Post Pertama",
    //         "slug" => "judul-post-pertama",
    //         "author" => "Salim Maula",
    //         "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit voluptatum eos quibusdam blanditiis, eaque praesentium
    //         iure optio totam fugiat autem cumque quas sunt deserunt earum modi provident delectus repudiandae tempore magni porro
    //         quia iste! Enim optio distinctio sit aperiam modi id perspiciatis incidunt nihil sapiente labore est iste quaerat ab
    //         quisquam laudantium, nemo ipsam eum corrupti, delectus ullam. A et praesentium nam voluptate inventore rem eveniet nulla
    //         facere cumque tenetur. Soluta, voluptas corrupti optio suscipit explicabo tempora veritatis? Consequuntur, facere?
    //         "
    //     ],
    //     [
    //         "title" => "Judul Post Kedua",
    //         "slug" => "judul-post-kedua",
    //         "author" => "Hafiz Salim",
    //         "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel quisquam nesciunt dolores corporis autem nam quos fugiat
    //         soluta quis neque beatae animi, ex quidem porro magni. At magnam nam sint cupiditate est ullam impedit dicta! Quod,
    //         temporibus est. Sequi deleniti iure rerum sed dolor, aliquam saepe minus iusto numquam sit molestias corporis
    //         repudiandae, fugiat exercitationem eos dignissimos quae laudantium iste! Quis obcaecati doloribus voluptatibus
    //         laboriosam rem esse cupiditate officiis hic ipsum distinctio a architecto aspernatur, ratione consequatur, debitis id
    //         alias enim neque! Animi voluptatem architecto soluta beatae quas! Maxime eum tempore voluptate ut ullam qui laudantium,
    //         officia culpa. Quos, in!"
    //     ],
    // ];
);

Route::get('/categories', function(){
    return view('categories',[
        'title' =>'Post categories',
        'active' => 'categories',
        'categories' => Category::all(),
    ]);
});

//! Kedua route di bawah sudah tidak dipake lagi karna sudah di tangani dengan model

// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('posts',[
//         'title' => "Post by Category : $category->name" ,
//         'active' => 'categories',

//         'posts' => $category->posts->load('category', 'author'),
//     ]);
// });


//username merupakan binding route yang telah kita daftarkan di table
// Route::get('/authors/{author:username}', function(User $author){
//     return view('posts',[
//         'title' =>"Post By Author : $author->name",
//         'posts' => $author->posts->load('category', 'author'),
//         'active' => 'post'
//     ]);
// });
