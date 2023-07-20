<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostList extends Component
{
    use WithPagination;

    public function render()
    {
        $filteredPosts = session('filteredPosts', []);

        $posts = $filteredPosts ? $filteredPosts : Post::paginate(10); // Adjust the number of posts per page as needed

        return view('livewire.post-list', compact('posts'));
    }
}

