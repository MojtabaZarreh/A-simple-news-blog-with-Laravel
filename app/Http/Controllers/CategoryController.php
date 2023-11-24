<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    public function home(): View
    {
        $categories = Category::all();
        return view('category', ['categories' => $categories]);
    }

    public function index(): View
    {
        $categories = Category::all();
        return view('panel.category.index', ['categories' => $categories]);
    }

    public function create(): View
    {
        return view('panel.category.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $name = $request->input('name');
        $category = new Category();
        $category->name = $name;
        $category->save();
        return redirect()->route('index');
    }

    public function edit($id): View
    {
        $category = Category::all()->find($id);
        return view('panel.category.edit', ['category' => $category]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $name = $request->input('name');
        $category = Category::all()->find($id);
        $category->name = $name;
        $category->save();

        return redirect()->route('index');
    }

    public function destroy($id):RedirectResponse
    {
        $category = Category::all()->find($id);
        $category->delete();
        return redirect()->route('index');
    }
}