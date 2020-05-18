<?php

namespace App\Http\Controllers\Dev;

use App\Http\Controllers\Controller;
use App\Http\Resources\Alert\ErrorResource;
use App\Models\Category;
use App\Models\Market;
use App\Models\Product;
use Corcel\Model\Post;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index()
    {
        $posts = Post::status('publish')
//            ->select(['ID', 'post_title',])
            ->where('post_type', 'post')
            ->limit(3)
            ->get();

        return $posts;

// A specific post
//        $post = Post::find(31);
//        echo $post->post_title;
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
        return $request->all();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
