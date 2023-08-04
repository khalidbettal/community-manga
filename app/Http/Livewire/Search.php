<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Genre;
use App\Models\Post;
use Livewire\Component;

class Search extends Component
{




 

    public function render()
    {
        $categories = Category::all();
        $genres = Genre::all();
        return view('livewire.search', compact('categories', 'genres'));
    }
}
