@php $dir2 = app()->getLocale() == 'ar' ? 'right' : 'left'; @endphp

@extends('front.layouts.master')
@section('title')
    {{ __('lang.home') }}
@endsection
@section('css')

@endsection

@section('content')

<section class="home ">

    <div class="box" style="height: 100%;">
        <div class="title">
           {{ __('lang.rediscover_the') }} <br> {{ __('lang.joy_of_life') }}

        </div>
        <div class="w3-block centred">
           <p> {{ __('lang.we_will_provide_you_with_the_highest_level_of_treatment') }}</p>
           <br>
           <a href="#" class="btn btn-style">{{ __('lang.reserve_your_palce_now') }}</a>
        </div>

    </div>


</section>

{{-- start section about us  --}}
<section class="about-us pt-5">
    {{-- start div container --}}
    <div class="container pt-5">
        {{-- div row --}}
        <div class="row pt-5">
            {{-- col 1 header  --}}
            <div class="col-12">
                <div class="header">
                  <h2> <b> {{ __('lang.about') }}</b></h2>
                </div>
            </div>
            {{-- end col 1 --}}
            {{-- col 2 card  --}}
            <div class="col-md-12 pt-5">
                <div class="card mb-3" style="border: 0">
                    <div class="row g-0">
                      <div class="col-md-6">
                        <div class="card-body pt-5">
                          <h1 class="card-title text-bolder">{{ __('lang.about_header') }}</h1>
                          <p class="card-text about-desc">{{ __('lang.about_desc') }}</p>
                          <a href="{{ route('about.index') }}" class="card-text btn main-color">{{ __('lang.read_more') }}</a>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <img src="{{ asset('front/assets/images/home/about.png') }}" class="img-fluid rounded-start" alt="...">
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
{{-- end section  --}}


{{-- start section Services  --}}
<section class="services pt-5">
    {{-- start div container --}}
    <div class="container pt-5">
        {{-- div row --}}
        <div class="row pt-5">
            {{-- col 1 header  --}}
            <div class="col-12">
                <div class="header">
                  <h2> <b> {{ __('lang.services') }}</b></h2>
                  <br><br>
                  <b>{{ __('lang.therapeutic_programs') }}</b>
                </div>
            </div>
            {{-- end col 1 --}}
            {{-- col 2 card  --}}
            <div class="col-md-12 pt-5">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card" style="border: 0">
                            <img src="{{ asset('front/assets/images/home/star.svg') }}" class="card-img-top img-80" alt="...">
                            <div class="card-body">
                                <h4 class="card-title fw-bold">{{ __('lang.the_12_steps_program') }}</h4>
                              <p class="card-text about-desc">{{ __('lang.program_1_desc') }}</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card" style="border: 0">
                            <img src="{{ asset('front/assets/images/home/star.svg') }}" class="card-img-top img-80" alt="...">
                            <div class="card-body">
                                <h4 class="card-title fw-bold">{{ __('lang.cognitive_behavioral_therapy') }}</h4>
                              <p class="card-text about-desc">{{ __('lang.program_2_desc') }}</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card" style="border: 0">
                            <img src="{{ asset('front/assets/images/home/star.svg') }}" class="card-img-top img-80" alt="...">
                            <div class="card-body">
                                <h4 class="card-title fw-bold">{{ __('lang.combined_therapy') }}</h4>
                              <p class="card-text about-desc">{{ __('lang.program_3_desc') }}</p>
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
{{-- end section  --}}


{{-- start section contact  --}}
<section class="contact pt-5">
    {{-- start div container --}}
    <div class="container pt-5">
        {{-- div row --}}
        <div class="row pt-5">
            {{-- col 1 header  --}}
            <div class="col-12">
                <div class="header">
                  <h2> <b> {{ __('lang.contact') }}</b></h2>

                </div>
            </div>
            {{-- end col 1 --}}
            {{-- col 2 card  --}}
            <div class="col-md-12 pt-5 pb-5">
                <div class="contact-body p-5">
                    <div class="row p-5">
                        <div class="col-12 col-md-5">
                            <div class="box-address pt-5">
                                <br><br>
                                <b> {{ __('lang.address') }} :125A Al Haram Street, Giza Government</b>
                                <br>
                                <a style="text-decoration: none" href="tel:012454564"><b>{{ __('lang.phone') }} : 0124564564</b></a>
                                <br><br>
                                <a style="text-decoration: none" class="me-4" href="#"> <span data-feather="facebook"></span></a>
                                <a style="text-decoration: none" class="me-4" href="#"> <span data-feather="twitter"></span></a>
                                <a style="text-decoration: none" class="me-4" href="#"> <span data-feather="instagram"></span></a>
                            </div>
                        </div>
                        <div class="col-12 col-md-7">
                            <div class="from-group">
                                <form action="{{ route('lang.index') }}" >
                                    <div class="form-group ">
                                        <input type="text" name="name" class="form-control input-style p-3" placeholder="{{ __('lang.enter_your_name') }}">
                                    </div>
                                    <div class="form-group pt-3">
                                        <input type="text" name="name" class="form-control input-style p-3" placeholder="{{ __('lang.enter_email') }}">
                                    </div>
                                    <div class="form-group pt-3">
                                        <textarea name="message" class="form-control input-style p-3" id="" cols="30" rows="10" placeholder="{{ __('lang.enter_your_message') }}"></textarea>
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
{{-- end section  --}}
<br><br>
@endsection

@section('js')


@endsection
