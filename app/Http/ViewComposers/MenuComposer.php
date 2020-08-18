<?php
namespace App\Http\ViewComposers;

use App\Category;
use Illuminate\Contracts\View\View;

class MenuComposer
{
    protected $parentCategories;

    public function __construct(Category $category)
    {
        $this->parentCategories=$category;
    }

    public function compose(View $view)
    {
         $view->with('parentCategories',
             $this->parentCategories->with('children')->whereNull('parent_id')->get());
    }
}
