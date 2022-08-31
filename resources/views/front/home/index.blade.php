@php $dir = app()->getLocale() == 'ar' ? 'rtl' : 'ltr'; @endphp

@extends('front.layouts.master')
@section('title')
    {{ __('lang.home') }}
@endsection
@section('css')
    <style>
        .img-blog {
            filter: grayscale(1);
            transition: all .5s
        }

        .img-blog:hover {
            filter: none;
        }

        .box-slid {
            position: relative;
            text-align: center;
            color: white;
        }

        .box-center {
            position: absolute !important;
            top: 50% !important;
            left: 50% !important;
            transform: translate(-50%, -50%) !important;

        }

        element.style {}

        .d-block {
            display: block !important;
        }

        .carousel-caption {
            position: absolute;
            right: 15%;
            bottom: 0.25rem;
            left: 15%;
            padding-top: 1.25rem;
            padding-bottom: 1.25rem;
            color: #fff;
            text-align: center;
        }

        .carousel-caption {

            background: #00000047 !important;
            border-radius: 10px !important;
        }

        .img-style {
            max-width: 515px;
            height: 300px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat
        }
    </style>
@endsection

@section('content')
    <section class="home ">
        <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
            {{-- <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div> --}}
            <div class="carousel-inner">
                <div class="carousel-item active box-slid">
                    <img src="{{ asset('front/assets/images/home/slider.jpg') }}" class="d-block w-100"
                        style="height: 900px"alt="...">
                    <div class="carousel-caption d-block d-md-block">
                        <div class="title">
                            {{ __('lang.rediscover_the') }} <br> {{ __('lang.joy_of_life') }}

                        </div>
                        <div class="w3-block centred">
                            <p class="fs-5"> {{ __('lang.we_will_provide_you_with_the_highest_level_of_treatment') }}</p>
                            <br>
                            <a href="https://wa.me/+201227118885" target="blank"
                                class="btn btn-style">{{ __('lang.reserve_your_palce_now') }}</a>
                        </div>


                    </div>
                </div>
                <div class="carousel-item box-slid">
                    <img src="{{ asset('front/assets/images/home/slider2.jpg') }}" class="d-block w-100"
                        style="height: 900px" alt="...">
                    <div class="carousel-caption d-block d-md-block">
                        <div class="title">
                            {{ __('lang.rediscover_the') }} <br> {{ __('lang.joy_of_life') }}

                        </div>
                        <div class="w3-block centred">
                            <p class="fs-5"> {{ __('lang.we_will_provide_you_with_the_highest_level_of_treatment') }}</p>
                            <br>
                            <a href="https://wa.me/+201227118885" target="blank"
                                class="btn btn-style">{{ __('lang.reserve_your_palce_now') }}</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item box-slid">
                    <img src="{{ asset('front/assets/images/home/سلايدر.jpg') }}" class="d-block w-100"
                        style="height: 900px" alt="...">
                    <div class="carousel-caption d-block d-md-block">
                        <div class="title">
                            {{ __('lang.rediscover_the') }} <br> {{ __('lang.joy_of_life') }}

                        </div>
                        <div class="w3-block centred">
                            <p class="fs-5"> {{ __('lang.we_will_provide_you_with_the_highest_level_of_treatment') }}</p>
                            <br>
                            <a href="https://wa.me/+201227118885" target="blank"
                                class="btn btn-style">{{ __('lang.reserve_your_palce_now') }}</a>
                        </div>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>



    </section>

    {{-- start section about us --}}
    <section class="about-us pt-5">
        {{-- start div container --}}
        <div class="container pt-5">
            {{-- div row --}}
            <div class="row ">
                {{-- col 1 header --}}
                <div class="col-12">
                    <div class="header">
                        <h2> <b> {{ __('lang.about') }}</b></h2>
                        <br>
                        <p class="fs-3">{{ __('lang.we_are_not_the_only_ones_but_we_are_the_strongest') }}</p>
                    </div>
                </div>
                {{-- end col 1 --}}
                {{-- col 2 card --}}
                <div class="col-md-12 pt-2">
                    <div class="card mb-3" style="border: 0">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <div class="card-body pt-5">
                                    <p class="card-text about-desc">{{ __('lang.about_desc') }}</p>
                                    <a href="{{ route('about.index') }}"
                                        class="card-text btn main-color">{{ __('lang.read_more') }}</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('front/assets/images/home/about.png') }}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end col 2 --}}
            </div>
            {{-- end div row --}}
        </div>
        {{-- end div container --}}
    </section>
    {{-- end section --}}


    {{-- start section Services --}}
    <section class="services pt-5">
        {{-- start div container --}}
        <div class="container pt-5">
            {{-- div row --}}
            <div class="row pt-5">
                {{-- col 1 header --}}
                <div class="col-12">
                    <div class="header">
                        <h2> <b> {{ __('lang.services') }}</b></h2>
                        {{-- <br><br>
                        <b>{{ __('lang.therapeutic_programs') }}</b> --}}
                    </div>
                </div>
                {{-- end col 1 --}}
                {{-- col 2 card --}}
                <div class="col-md-12 pt-5">
                    <div class="row">
                        <div class="col-12 pt-1  ">
                            <div class="card mb-3" style="border: 0">
                                <div class="row g-0">
                                    <div class="col-md-6 p-5">
                                        <div class="card-body">
                                            <h4 class="card-title fw-bold">{{ __('lang.hotel') }}</h4><br>
                                            <p class="card-text about-desc fs-5">{{ __('lang.hotel_desc') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-4">
                                        <div class="img-style"
                                            style="background-image:url('{{ asset('front/assets/images/services/أقامة فندقية.jpg') }}')">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 pt-3 ">
                            <div class="card mb-3" style="border: 0">
                                <div class="row g-0">
                                    <div class="col-md-6  p-4">
                                        <div class="img-style"
                                            style="background-image:url('{{ asset('front/assets/images/services/رحلات ترفيهية.jpg') }}')">
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-5">
                                        <div class="card-body p-4">
                                            <h4 class="card-title fw-bold">{{ __('lang.leisure_trips') }}</h4><br>
                                            <p class="card-text about-desc fs-5">{{ __('lang.leisure_trips_desc') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-12 pt-1  ">
                            <div class="card mb-3" style="border: 0">
                                <div class="row g-0">
                                    <div class="col-md-6 p-5">
                                        <div class="card-body">
                                            <h4 class="card-title fw-bold">{{ __('lang.entertainment_games') }}</h4><br>
                                            <p class="card-text about-desc fs-5">{{ __('lang.entertainment_games_desc') }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-4">
                                        <div class="img-style"
                                            style="background-image:url('{{ asset('front/assets/images/services/العاب ترفيهية.jpg') }}')">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 pt-3 ">
                            <div class="card mb-3" style="border: 0">
                                <div class="row g-0">
                                    <div class="col-md-6  p-4">
                                        <div class="img-style"
                                            style="background-image:url('{{ asset('front/assets/images/services/أخصائى نفسي.jpg') }}')">
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-5">
                                        <div class="card-body p-4">
                                            <h4 class="card-title fw-bold">{{ __('lang.psychologist') }}</h4><br>
                                            <p class="card-text about-desc fs-5">{{ __('lang.psychologist_desc') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        {{-- <div class="col-12 pt-3 ">
                            <div class="card mb-3" style="border: 0">
                                <div class="row g-0">

                                    <div class="col-md-6 p-5">
                                        <div class="card-body p-4">
                                            <h4 class="card-title fw-bold">{{ __('lang.hotel_food') }}</h4><br>
                                            <p class="card-text about-desc fs-5">{{ __('lang.hotel_food_desc') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6  p-4">
                                        <div class="img-style"
                                            style="background-image:url('{{ asset('front/assets/images/services/طعام فندقي.jpg') }}')">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> --}}

                    </div>
                </div>
                {{-- end col 2 --}}
            </div>
            {{-- end div row --}}
        </div>
        {{-- end div container --}}
    </section>
    {{-- end section --}}


    {{-- start section blog --}}
    <section class="blog pt-5">
        {{-- start div container --}}
        <div class="container pt-5">
            {{-- div row --}}
            <div class="row pt-5">
                {{-- col 1 header --}}
                <div class="col-12">
                    <div class="header">
                        <h2> <b> {{ __('lang.blog') }}</b></h2>

                    </div>
                </div>
                {{-- end col 1 --}}
                {{-- col 2 card --}}
                <div class="col-md-12 pt-5">
                    <div class="row">
                        <div class="col-12 col-lg-6 ">
                            {{-- blog one --}}
                            <a class="text-decoration-none" href="{{ route('blog.show') }}?type=one">
                                <div class="card" style="height: 97%">
                                    <img src="{{ asset('front/assets/images/blog/اعراض المواد المخدرة 2.jpg') }}"
                                        class="card-img-top img-blog" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>{{ __('lang.blog_1_title') }}</b></h5>
                                        <br>
                                        <div class="desc pb-3 ">
                                            <p class="card-text w3-text-gray">{{ __('lang.blog_1_desc') }} </p>
                                            {{ __('lang.read_more') }}

                                        </div>

                                    </div>
                                </div>
                            </a>
                            {{-- end blog one --}}
                        </div>
                        <div class="col-12 col-lg-6">
                            {{-- blog two --}}
                            <a class="text-decoration-none" href="{{ route('blog.show') }}?type=two">
                                <div class="card mb-3">
                                    <div class="row g-0">
                                        <div class="col-md-5">
                                            <img src="{{ asset('front/assets/images/blog/مواد مخدرة نمتاز بعلاجها .jpg') }}"
                                                class="img-fluid img-blog rounded-start" alt="..."
                                                style="width: 100%;height: 268px;">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h5 class="card-title"><b>{{ __('lang.blog_2_title') }}</b></h5>
                                                <br>
                                                <p class="card-text w3-text-gray">{{ __('lang.list_3') }}
                                                    {{ substr(__('lang.blog_2_desc'), 0, 157) }} .....</p>
                                                {{ __('lang.read_more') }}

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            {{-- end blog two --}}
                            <br><br>
                            {{-- blog 3 --}}
                            <a class="text-decoration-none" href="{{ route('blog.show') }}?type=three">
                                <div class="card mb-3">
                                    <div class="row g-0">
                                        <div class="col-md-5">
                                            <img src="{{ asset('front/assets/images/blog/63861-الاستروكس.jpg') }}"
                                                class="img-fluid img-blog rounded-start" alt="..."
                                                style="width: 100%;height: 268px;">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h5 class="card-title"><b>{{ __('lang.blog_3_title') }}</b></h5>
                                                <br>
                                                <p class="card-text w3-text-gray">
                                                    {{ substr(__('lang.blog_3_desc'), 0, 244) }} .....</p>
                                                {{ __('lang.read_more') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            {{-- end blog 3 --}}
                        </div>

                    </div>
                </div>
                {{-- end col 2 --}}
            </div>
            {{-- end div row --}}
        </div>
        {{-- end div container --}}
    </section>
    {{-- end section --}}



    {{-- start section contact --}}
    <section class="contact pt-5">
        {{-- start div container --}}
        <div class="container pt-5">
            {{-- div row --}}
            <div class="row pt-5">
                {{-- col 1 header --}}
                <div class="col-12">
                    <div class="header">
                        <h2> <b> {{ __('lang.contact') }}</b></h2>

                    </div>
                </div>
                {{-- end col 1 --}}
                {{-- col 2 card --}}
                <div class="col-md-12 pt-5 pb-5">
                    <div class="contact-body p-5">
                        <div class="row p-5">
                            <div class="col-12 col-md-5">
                                <div class="box-address pt-5">
                                    <br><br>
                                    <b> {{ __('lang.address') }}
                                        {{ $dir == 'rtl' ? 'فيلا 339 B الحي المتميز – مدينة بدر' : 'Villa 339 B Privileged District – Badr City ' }}</b>
                                    <br>
                                    <a style="text-decoration: none" href="tel:01227118885"><b>{{ __('lang.phone') }} :
                                            01227118885</b></a>
                                    <br><br>
                                    <a style="text-decoration: none" class="me-4" target="blank"
                                        href="https://www.facebook.com/enoughforbetterlife"> <span
                                            data-feather="facebook"></span></a>
                                    <a style="text-decoration: none" class="me-4"target="blank"
                                        href="https://www.instagram.com/enough_for_better_life/"> <span
                                            data-feather="instagram"></span></a>
                                </div>
                            </div>
                            <div class="col-12 col-md-7">
                                <div class="from-group">
                                    <form action="{{ route('lang.index') }}">
                                        <div class="form-group ">
                                            <input type="text" name="name" class="form-control input-style p-3"
                                                placeholder="{{ __('lang.enter_your_name') }}">
                                        </div>
                                        <div class="form-group pt-3">
                                            <input type="text" name="name" class="form-control input-style p-3"
                                                placeholder="{{ __('lang.enter_email') }}">
                                        </div>
                                        <div class="form-group pt-3">
                                            <textarea name="message" class="form-control input-style p-3" id="" cols="30" rows="10"
                                                placeholder="{{ __('lang.enter_your_message') }}"></textarea>
                                        </div>
                                        <div class="form-group pt-3">
                                            <button type="submit" class="btn bg-color"> {{ __('lang.submit') }}</button>
                                        </div>

                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                {{-- end col 2 --}}
            </div>
            {{-- end div row --}}
        </div>
        {{-- end div container --}}
    </section>
    {{-- end section --}}
    <br><br>
@endsection

@section('js')
@endsection
