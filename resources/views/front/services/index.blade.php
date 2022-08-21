@php $dir2 = app()->getLocale() == 'ar' ? 'right' : 'left'; @endphp

@extends('front.layouts.master')
@section('title')
    {{ __('lang.home') }}
@endsection
@section('css')

@endsection

@section('content')

{{-- start section Services  --}}
<section class="services pt-5">
    {{-- start div container --}}
    <div class="container pt-5">
         {{-- div row 1 --}}
         <div class="row pt-5">
            {{-- col 1 header  --}}
            <div class="col-12">
                <div class="header">
                  <h2> <b> {{ __('lang.services') }}</b></h2>
                  <br><br>
                  <h5 class="fw-bold">{{ __('lang.treatment_methods') }}</h5>
                </div>
            </div>
            {{-- end col 1 --}}
            {{-- col 2 card  --}}
            <div class="col-md-12 pt-5">
                <div class="row">
                    <div class="col-12 pt-4  ">
                        <div class="card mb-3" style="border: 0">
                            <div class="row g-0">
                              <div class="col-md-6 p-5">
                                <div class="card-body">
                                    <h4 class="card-title fw-bold">{{ __('lang.treatment_methods_1_title') }}</h4>
                                  <p class="card-text about-desc">{{ __('lang.treatment_methods_1_desc') }}</p>
                                </div>
                              </div>
                              <div class="col-md-6 p-4">
                                <img src="{{ asset('front/assets/images/services/1.png') }}" class="card-img-top " style="    width: 90%; min-width: 100%;margin: auto;" alt="...">
                            </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-12 pt-5 ">
                        <div class="card mb-3" style="border: 0">
                            <div class="row g-0">
                              <div class="col-md-6  p-4">
                                <img src="{{ asset('front/assets/images/services/2.png') }}" class="card-img-top " style=" width: 90%; min-width: 100%; margin: auto;" alt="...">
                            </div>
                              <div class="col-md-6 p-5">
                                <div class="card-body p-4">
                                    <h4 class="card-title fw-bold">{{ __('lang.treatment_methods_2_title') }}</h4>
                                  <p class="card-text about-desc">{{ __('lang.treatment_methods_2_desc') }}</p>
                                </div>
                              </div>
                            </div>
                          </div>

                    </div>

                </div>
            </div>
            {{-- end col 2 --}}
        </div>
        {{-- end div row 1 --}}
        {{-- div row 2 --}}
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
        {{-- end div row 2 --}}
    </div>
    {{-- end div container --}}
</section>
{{-- end section  --}}
<br><br>
@endsection

@section('js')


@endsection
