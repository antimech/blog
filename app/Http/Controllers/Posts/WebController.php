<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\View\View;

class WebController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(Post $post): View
    {
        return view('blog.show', [
            'post' => $post
        ]);
    }
}
