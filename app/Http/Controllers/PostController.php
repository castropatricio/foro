<?php

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{
    public function show(Post $post, $slug)
    {
//        abort_unless($post->slug == $slug, 404);

        if($post->slug != $slug){
            return redirect($post->url, 301);
        }

        return view('posts.show', compact('post'));
    }
}
