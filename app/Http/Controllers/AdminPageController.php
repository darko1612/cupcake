<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class AdminPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $page = Page::where('title', $id)->first();
        $options = [
            0 => ['value' => '/home', 'title' => 'Templejt 1'],
            1 => ['value' => '/kontakt', 'title' => 'Templejt 2'],
            2 => ['value' => '/o_meni', 'title' => 'Templejt 3'],
            3 => ['value' => '/proizvodi', 'title' => 'Templejt 4'],
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
