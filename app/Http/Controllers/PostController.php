<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {

        $postsWithTags = Post::all();

// Extract tags from the collection of posts
       $allTags = $postsWithTags->pluck('tags')->flatten()->unique();
       dd($allTags);


    }

}
