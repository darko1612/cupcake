@extends('layouts.main')

@section('content')
    <section class="page-section clearfix">
        <div class="container">
            <div class="intro">
                <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{asset($page->image)}}" alt="">
                <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper">{{$page->section1_pre_title}}</span>
                        <span class="section-heading-lower">{{$page->section1_title}}</span>
                    </h2>
                    <p class="mb-3">{{$page->section1_text}}
                    </p>
                   {{-- <div class="intro-button mx-auto">
                        <a class="btn btn-primary btn-xl" href="#">Visit Us Today!</a>
                    </div>--}}
                </div>
            </div>
        </div>
    </section>

    <section class="page-section cta">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="cta-inner text-center rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Our Promise</span>
                            <span class="section-heading-lower">To You</span>
                        </h2>
                        <p class="mb-0">When you walk into our shop to start your day, we are dedicated to providing you
                            with friendly service, a welcoming atmosphere, and above all else, excellent products made with
                            the highest quality ingredients. If you are not satisfied, please let us know and we will do
                            whatever we can to make things right!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection

