<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\City;
use App\Models\Post;
use Livewire\Component;

class Search extends Component
{
    public $selectedCategory = '';
    public $selectedCity = '';


    public function find()
    {
        $category = Category::where('categoryName', $this->selectedCategory)->first();
        $city = City::where('cityName', $this->selectedCity)->first();

        $query = Post::query()->with('user', 'category', 'city');
     
        if ($city) {
            $query->where('city_id', $city->id);
        }

        if ($category) {
            $query->where('category_id', $category->id);
        }

        return $query->paginate(5);
    }


    public function save()
    {
        $posts = $this->find(); // Filter the posts
        return redirect()->route('postList')->with('filteredPosts', $posts);
    }

    public function render()
    {
        $categories = Category::all();
        $cities = City::all();
        return view('livewire.search', compact('categories', 'cities'));
    }
}
