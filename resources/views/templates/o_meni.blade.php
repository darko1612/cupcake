@extends('layouts.main')

@section('content')
    <section class="page-section about-heading">
        <div class="container">
            <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{asset('img/intro.jpg')}}" alt="">
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto">
                        <div class="bg-faded rounded p-5">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">{{$page->section1_pre_title}}</span>
                                <span class="section-heading-lower">{{$page->section1_title}}</span>
                            </h2>
                            <p>{{$page->section1_text}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
