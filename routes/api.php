<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// routes to get ALL, get one, create one, update one, delete one
// eg Route::get('/posts', function (get all the posts)), Route::post('/posts', function(create a post))

// we don't make a separate route for each, we condense this logic into controllers
// eg Route::get('/posts', 'PostController@index') => get all the posts
// eg Route::post('/posts', 'PostController@store') => create a post

//The above makes the code long, so we can condense this further by using resources
Route::apiResource('messages', 'MessageController'); //a list of routes will be created for us


Route::get('/intro', function()
{
    return ['message'=> 'hello'];
});


// Create database & migrations => create model => create controller => return info
// Route::get('/posts', function()
// {
//     $post = Post::create([
//         'title' => 'First Post',
//         'slug' => 'furst post'
//     ]); // every time we run this url, we are creating a post
//     return $post; //we return this so we can see it on the url
// });



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
