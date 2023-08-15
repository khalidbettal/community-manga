<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class SinglePost extends Component
{
    public $slug;
    public $post;
    public $comments;

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->post = Post::with('comments.user')->where('slug', $slug)->firstOrFail();
        $this->comments = $this->post->comments;
    }

    public function render()
    {
        return view('livewire.single-post', [
            'post' => $this->post,
            'comments' => $this->comments,
        ]);
    }
}

