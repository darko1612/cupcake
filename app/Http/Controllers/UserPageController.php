<?php

namespace App\Http\Controllers;

use App\UserPage;
use App\Page;
use Illuminate\Http\Request;

class UserPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $page = Page::all()->first();
        $pages = Page::all()->sortBy('position', 1);

        return view('templates/' . $page->template, ['pages' => $pages, 'page' => $page]);
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
     * @param  \App\UserPage $userPage
     * @return \Illuminate\Http\Response
     */
    public function show($title)
    {
        $title = str_replace("_", " ", $title);
        $page = Page::where('page_title', $title)->first();
        $pages = Page::all()->sortBy('position', 1);
        $background = str_replace("/public", " ", $page->background);
        $page->background = str_replace("\\", "/", $background);

        return view('templates/' . $page->template, ['pages' => $pages, 'page' => $page]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserPage $userPage
     * @return \Illuminate\Http\Response
     */
    public function edit(UserPage $userPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\UserPage $userPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserPage $userPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserPage $userPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserPage $userPage)
    {
        //
    }
}
