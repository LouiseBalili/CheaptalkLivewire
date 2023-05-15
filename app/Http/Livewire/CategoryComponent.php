<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\category;

class CategoryComponent extends Component
{
    public function render()
    {

        $categories = Category::all();

        return view('livewire.category.category-component', ['categories' => $categories])->layout('livewire.layouts.base');
    }
}
