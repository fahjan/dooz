<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;

class Home extends Controller
{

    public function home()
    {
        // Post::create(['title' => 'الخبر التجريبي الأول', 'story' => 'نص الخبر الأول التجريبي']);
        return view('website.home');
    }

    public function post(Post $post)
    {


        $post = $post->whereStatus('active');
        return view('website.post', compact('post'));
    }
}
