<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\post;

class HomeComponent extends Component
{

    public $category = 'all', $search;

    public function render()
    {
        $query = Post::orderBy('created_at', 'desc')->search($this->search);

        if($this->category != 'all'){
            $query->where('category_id', $this->category);
        }

        $posts = $query->get();

        return view('livewire.home-component', ['posts' => $posts])->layout('livewire.layouts.base');
    }
}
