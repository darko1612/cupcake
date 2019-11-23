<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Page $page)
    {
        $first_page = Page::all()->first();

        return view('admin.home', compact('first_page'));
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
        $options = [
            0 => ['value' => '/home', 'title' => 'Templejt 1'],
            1 => ['value' => '/kontakt', 'title' => 'Templejt 2'],
            2 => ['value' => '/o_meni', 'title' => 'Templejt 3'],
            3 => ['value' => '/proizvodi', 'title' => 'Templejt 4'],
        ];

        return view('admin.create', ['page_count' => $page_count, 'first_page' => $first_page, 'options'=> $options]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $page = new Page();

        $page->title = request('title');
        $page->template = request('template');
        $page->position = request('position');
        $page->save();
        return redirect('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
       return view('admin.show', compact('page', $page));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('admin.edit', compact('page', $page));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $page->title = request('title');
        $page->save();
        return redirect('admin/' . $page->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
       Page::find($page->id)->delete();
       return redirect('/admin');
    }
}
