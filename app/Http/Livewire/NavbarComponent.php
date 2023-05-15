<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\post;

class NavbarComponent extends Component
{
    public $category = 'all', $search;
    public function render()
    {

        $query = Post::orderBy('created_at', 'desc')->search($this->search);
        $posts = $query->get();
        return view('livewire.navbar-component', ['posts' => $posts]);
    }
}
