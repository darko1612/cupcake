<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Illuminate\Support\Facades\App;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all()->sortBy('position', 1);
        $first_page = Page::all()->first();

        return view('admin.show', ['pages' => $pages, 'first_page' => $first_page]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_count = Page::all()->count();
        $first_page = Page::all()->first();
        $pages = Page::all()->sortBy('position', 1);

        $options = [
            0 => ['value' => '/home', 'title' => 'Templejt 1'],
            1 => ['value' => '/o_meni', 'title' => 'Templejt 2'],
            2 => ['value' => '/proizvodi', 'title' => 'Templejt 3'],
            3 => ['value' => '/kontakt', 'title' => 'Templejt 4'],
        ];

        return view('admin.create', ['page_count' => $page_count, 'first_page' => $first_page, 'options'=> $options, 'pages' => $pages]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Page $page)
    {

        $page->fill($request->all());
        if($request->hasFile('image'))
        {
           $image = $request->file('image');
            $filename = $request->file('image')->hashName();
            $path = $image->move('public/img', $filename);
            $page->image = $path;

        }
        if($request->hasFile('background'))
        {
            $background = $request->file('background');
            $filename = $request->file('background')->hashName();
            $path = $background->move('../public/img', $filename);
            $page->background = $path;

        }

        $page->save();

        return redirect('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $first_page = Page::all()->first();
        $page_count = Page::all()->count();

        $pages = Page::all()->sortBy('position', 1);
        return view('admin.show', ['first_page' => $first_page, 'pages' => $pages, 'page_count' => $page_count]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $first_page = Page::all()->first();
        $page_count = Page::all()->count();
        $page = Page::where('page_title', $id)->first();
        $options = [
            0 => ['value' => '/home', 'title' => 'Templejt 1'],
            1 => ['value' => '/o_meni', 'title' => 'Templejt 2'],
            2 => ['value' => '/proizvodi', 'title' => 'Templejt 3'],
            3 => ['value' => '/kontakt', 'title' => 'Templejt 4'],
        ];

        $pages = Page::all()->sortBy('position', 1);
        return view('admin.edit', ['first_page' => $first_page, 'pages' => $pages, 'page_count' => $page_count,
            'page' => $page, 'options' => $options]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $page = Page::where('page_title', '=', $id)->firstOrFail();
        $page->fill($request->all());
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $filename = $request->file('image')->hashName();
            $path = $image->move('public/img', $filename);
            $page->image = $path;

        }
        if($request->hasFile('background'))
        {
            $background = $request->file('background');
            $filename = $request->file('background')->hashName();
            $path = $background->move('../public/img', $filename);
            $page->background = $path;

        }
        $page->update();

        return redirect('admin/pages');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $page = Page::where('page_title', $id)->first();
        $page->delete();

        return redirect('admin/pages');
    }
}
