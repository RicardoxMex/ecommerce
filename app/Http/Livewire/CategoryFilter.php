<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryFilter extends Component
{
    public $category;
    public function render()
    {
        return view('livewire.category-filter');
    }
}
