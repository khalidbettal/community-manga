<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{
  use WithPagination;
    public function loadMyPosts()
    {


        $posts = Auth::user()->posts()->paginate(10);
        return redirect()->route('posts')->with('myPostsLoaded', $posts);
    }
    public function render()
    {
        return view('livewire.dashboard');
    }
}
