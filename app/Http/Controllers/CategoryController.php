<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller{
    public function index()
    {
        $categories = Category::withCount([
                        'products'=> function($query){
                        $query->where('status', '1');},'thirds'])
                        ->get();

        // $categories = Category::withCount([
        //                 'products'=>fn($query) => $query->where('status', '0'),
        //                 'thirds'=>fn($q) => $q->where('status', '1'),
        //                 ])->get();

        return view('welcome', compact('categories'));
    }

    public function create()
    {
    }

    public function store(StoreCategoryRequest $request)
    {
    }


    public function show(Category $category)
    {
    }

    public function edit(Category $category)
    {
        //
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    public function destroy(Category $category)
    {
        //
    }
}
