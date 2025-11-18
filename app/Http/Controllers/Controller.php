<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('page.index', compact('pages'));
    }

    public function create()
    {
        return view('page.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        Page::create($request->all());
        return redirect()->route('page.index');
    }

    public function edit($id)
    {
        $page = Page::findOrFail($id);
        return view('page.edit', compact('page'));
    }

    public function update(Request $request, $id)
    {
        $page = Page::findOrFail($id);
        $page->update($request->all());
        return redirect()->route('page.index');
    }

    public function destroy($id)
    {
        Page::destroy($id);
        return back();
    }
}