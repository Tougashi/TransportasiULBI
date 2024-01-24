<?php

namespace App\View\Components;

use Closure;
use App\Models\Category;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class SidebarCategoryList extends Component
{
    /**
     * Create a new component instance.
     */
    public $categories, $title, $category;

    public function __construct($title)
    {
        $this->categories = Category::get()->take(8);
        $this->title = $title;
        $this->category = Category::where('slug', $title)->pluck('category')->first();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar-category-list');
    }
}
