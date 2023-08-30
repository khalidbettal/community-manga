<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Post;
use Livewire\Component;

class SinglePost extends Component
{
    public $slug;
    public $post;
    public $comments;

    public $comment;
    public $reply;


    protected $rules1 = [
        'comment' => 'required',
    ];
    protected $rules2 = [
        'reply' => 'required',
    ];





    public function mount($slug)
    {
        $this->slug = $slug;
        $this->post = Post::with('comments.user')->where('slug', $slug)->firstOrFail();
        $this->comments = $this->post->comments->sortByDesc('created_at');
    }


    public function render()
    {
        return view('livewire.single-post', [
            'post' => $this->post,
            'comments' => $this->comments,
        ]);
    }

    public function comment($postId )
    {

     $this->validate($this->rules1);

     Comment::create([
         'user_id' => auth()->user()->id,
         'post_id' => $postId,
         'parent_id' => null,
         'comment' => $this->comment,
     ]);
     $this->comment = '';
     $this->redirect(route('post.single', ['slug' => $this->slug]));
    }

    public function reply($postId, $parentId)
    {


        $this->validate($this->rules2);

        Comment::create([
            'user_id' => auth()->user()->id,
            'post_id' => $postId,
            'parent_id' => $parentId,
            'comment' => $this->reply,

        ]);
        $this->reply = '';
        $this->redirect(route('post.single', ['slug' => $this->slug]));
    }


    }



