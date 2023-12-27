<?php

namespace App\View\Components;

use Closure;
use App\Models\Categories;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class SidebarCategoryList extends Component
{
    /**
     * Create a new component instance.
     */
    public $categories, $title;

    public function __construct($title)
    {
        $this->categories = Categories::all();
        $this->title = $title;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar-category-list');
    }
}
