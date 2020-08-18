<?php

function nestedCategories()
{
    $categories = \App\Category::all();
    $result = [];

    foreach ($categories as $category) {
        if (empty($category->parent_id)) {
            $result[$category->id]= (object)array_merge($category->toArray(), ['children' => []]);
        }
    }

    foreach ($categories as $category) {
        if (!empty($category->parent_id)) {
            $result[$category->parent_id]->children[$category->id] = (object)$category->toArray();
        }
    }

    return $result;
}
