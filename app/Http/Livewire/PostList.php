<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Genre;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostList extends Component
{
    use WithPagination;

    public $selectedCategory = '';
    public $selectedGenre = '';
    public $isFilterApplied = false; // Add a flag to track if the filters are applied

    // Method to fetch the filtered posts
    public function getFilteredPosts()
    {
        $category = Category::where('categoryName', $this->selectedCategory)->first();
        $genre = Genre::where('GenreName', $this->selectedGenre)->first();

        $query = Post::query()->with('user', 'category', 'genres');

        if ($genre) {
            $query->whereHas('genres', function ($q) use ($genre) {
                $q->where('genre_id', $genre->id);
            });
        }

        if ($category) {
            $query->where('category_id', $category->id);
        }

        return $query->paginate(10);
    }

    // Method to handle the save button click
    public function save()
    {
        $this->isFilterApplied = true; // Set the flag to true when the filters are applied
    }

    public function render()
    {

        $myPostsLoaded = session('myPostsLoaded', []);

        // Check if the filters are applied, if not, show all posts or user's posts
        if ($this->isFilterApplied) {
            $posts = $this->getFilteredPosts();
        } elseif (!empty($myPostsLoaded)) {
            // Show the authenticated user's posts when the "My Posts" button is clicked and no filters are applied
            $posts = $myPostsLoaded;
        } else {
            // Show all posts by default
            $posts = Post::query()->with('user', 'category', 'genres')->paginate(10);
        }

        $genres = Genre::all();
        $categories = Category::all();

        return view('livewire.post-list', compact('posts', 'genres', 'categories'));
    }
}
