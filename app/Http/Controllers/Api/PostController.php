<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // get post
        $posts = Post::latest()->paginate(5);

        // rerturn collection of posts  as a resource
        return new PostResource(true, 'List Data Posts', $posts);
    }
}
