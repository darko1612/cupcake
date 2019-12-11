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
                            <span class="section-heading-upper">{{$page->section2_pre_title}}</span>
                            <span class="section-heading-lower">{{$page->section2_title}}</span>
                        </h2>
                        <p class="mb-0">{{$page->section2_text}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

