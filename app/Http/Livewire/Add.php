<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Genre;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;


class Add extends Component
{
    use WithFileUploads;
   public $selectedGenres = [];
    public $categoryId = 1;
    public $postTitle;
    public $postDescription;
    public $file;


    protected $rules = [
        'selectedGenres' => 'required',
        'categoryId' => 'required',
        'postTitle' => 'required|min:6',
        'postDescription' => 'required|min:6',
        
    ];

    public function createPost(){
        $this->validate();
        $this->file->store('public/posts');
        $post = Post::create([
            'title' => $this->postTitle,
            'description' => $this->postDescription,
            'category_id' => $this->categoryId,
            'user_id' => auth()->user()->id,
            'image' => $this->file->hashName(),
            'slug' => Str::slug($this->postTitle),
        ]);
        $post->genres()->attach(Genre::whereIn('genreName', $this->selectedGenres)->pluck('id')->toArray());
        $this->reset();
        session()->flash('success', 'Post successfully created.');

    }





    public function render()
    {
        $genres = Genre::all();
        $categories = Category::all();
        return view('livewire.add', compact('genres', 'categories'));
    }
}
