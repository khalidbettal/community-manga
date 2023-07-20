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
      $posts = User::find(2)->comments;
      foreach ($posts as $post) {
        echo $post->content;
      }


    }

}
