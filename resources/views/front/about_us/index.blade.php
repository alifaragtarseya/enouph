@extends('front.layouts.master')
@section('title')
    {{ __('lang.about') }}
@endsection
@section('css')

@endsection
@section('content')
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
            <div class="col-md-12 pt-5 pb-5">
                <div class="card mb-3" style="border: 0">
                    <div class="row g-0">
                      <div class="col-md-6">
                        <div class="card-body pt-5">
                          <p class="card-text about-desc">{{ __('lang.about_desc_more_1') }}</p>
                          <p class="card-text about-desc">{{ __('lang.about_desc_more_2') }}</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="row">
                            <div class="col-12 col-md-7">
                                <img src="{{ asset('front/assets/images/about/1.png') }}" class="img-fluid rounded-start rounded-end" style="height: 100%" alt="...">

                            </div>
                            <div class="col-12 col-md-5">
                                <div class="pt-1">
                                    <img src="{{ asset('front/assets/images/about/2.png') }}" class="img-fluid rounded-start rounded-end" style="height: 100%" alt="...">

                                </div>
                                <div class="pt-2">
                                    <img src="{{ asset('front/assets/images/about/3.png') }}" class="img-fluid rounded-start rounded-end" style="height: 100%" alt="...">

                                </div>
                            </div>


                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <br><br>
            {{-- end col 2 --}}
            <div class="col-md-12 pt-2">
                <div class="header">
                    <h4><b>{{ __('lang.the_most_popular_drug') }}</b></h4>
                </div>
                <div>
                    <ul class="list-group">
                        <li class="list-group-item">
                          <img src="{{ asset('front/assets/images/about/check.svg') }}" alt="">
                          {{ __('lang.list_1') }}
                        </li>
                        <li class="list-group-item">
                          <img src="{{ asset('front/assets/images/about/check.svg') }}" alt="">
                          {{ __('lang.list_2') }}
                        </li>
                        <li class="list-group-item">
                          <img src="{{ asset('front/assets/images/about/check.svg') }}" alt="">
                          {{ __('lang.list_3') }}
                        </li>
                        <li class="list-group-item">
                          <img src="{{ asset('front/assets/images/about/check.svg') }}" alt="">
                          {{ __('lang.list_4') }}
                        </li>
                        <li class="list-group-item">
                          <img src="{{ asset('front/assets/images/about/check.svg') }}" alt="">
                          {{ __('lang.list_5') }}
                        </li>
                      </ul>
                </div>
                <br><br>
            </div>
        </div>
        {{-- end div row --}}
    </div>
    {{-- end div container --}}
</section>
{{-- end section  --}}
@endsection
@section('js')
@endsection

