@php $dir2 = app()->getLocale() == 'ar' ? 'right' : 'left'; @endphp

@extends('front.layouts.master')
@section('title')
    {{ __('lang.services') }}
@endsection
@section('css')
<style>
  .img-style{
    max-width: 515px;
    height: 300px;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat
  }
</style>
@endsection

@section('content')

{{-- start section Services  --}}
<section class="services pt-5">
    {{-- start div container --}}
    <div class="container ">
         {{-- div row 1 --}}
         <div class="row pt-3">
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
                    <div class="col-12 pt-1  ">
                        <div class="card mb-3" style="border: 0">
                            <div class="row g-0">
                              <div class="col-md-6 p-5">
                                <div class="card-body">
                                    <h4 class="card-title fw-bold">{{ __('lang.treatment_methods_1_title') }}</h4><br>
                                  <p class="card-text about-desc fs-5">{{ __('lang.treatment_methods_1_desc') }}</p>
                                </div>
                              </div>
                              <div class="col-md-6 p-4">
                                <img src="{{ asset('front/assets/images/services/1.png') }}" class="card-img-top " style="    width: 90%; min-width: 100%;margin: auto;" alt="...">
                            </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-12 pt-3 ">
                        <div class="card mb-3" style="border: 0">
                            <div class="row g-0">
                              <div class="col-md-6  p-4">
                                <img src="{{ asset('front/assets/images/services/2.png') }}" class="card-img-top " style=" width: 90%; min-width: 100%; margin: auto;" alt="...">
                            </div>
                              <div class="col-md-6 p-5">
                                <div class="card-body p-4">
                                    <h4 class="card-title fw-bold">{{ __('lang.treatment_methods_2_title') }}</h4><br>
                                  <p class="card-text about-desc fs-5">{{ __('lang.treatment_methods_2_desc') }}</p>
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
                  
                 <h4> <b>{{ __('lang.therapeutic_programs') }} :</b></h4>
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
                                <h4 class="card-title fw-bold">{{ __('lang.the_12_steps_program') }}</h4><br>
                              <p class="card-text about-desc fs-5">{{ __('lang.program_1_desc') }}</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card" style="border: 0">
                            <img src="{{ asset('front/assets/images/home/star.svg') }}" class="card-img-top img-80" alt="...">
                            <div class="card-body">
                                <h4 class="card-title fw-bold">{{ __('lang.cognitive_behavioral_therapy') }}</h4><br>
                              <p class="card-text about-desc fs-5">{{ __('lang.program_2_desc') }}</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card" style="border: 0">
                            <img src="{{ asset('front/assets/images/home/star.svg') }}" class="card-img-top img-80" alt="...">
                            <div class="card-body">
                                <h4 class="card-title fw-bold">{{ __('lang.combined_therapy') }}</h4><br>
                              <p class="card-text about-desc fs-5">{{ __('lang.program_3_desc') }}</p>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
            {{-- end col 2 --}}
        </div>
        {{-- end div row 2 --}}

        <br>
        {{-- div row 3 --}}
        <div class="row pt-5">
          {{-- col 1 header  --}}
          <div class="col-12">
              <div class="header">
                {{-- <h2> <b> {{ __('lang.services') }}</b></h2>
                <br><br> --}}
                <h4> <b>{{ __('lang.other_services') }} :</b></h4>
              </div>
          </div>
          {{-- end col 1 --}}
          {{-- col 2 card  --}}
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
                              <div class="img-style" style="background-image:url('{{ asset('front/assets/images/services/أقامة فندقية.jpg') }}')"></div>
                          </div>
                          </div>
                        </div>
                  </div>
                  <div class="col-12 pt-3 ">
                      <div class="card mb-3" style="border: 0">
                          <div class="row g-0">
                            <div class="col-md-6  p-4">
                              <div class="img-style" style="background-image:url('{{ asset('front/assets/images/services/رحلات ترفيهية.jpg') }}')"></div>                          </div>
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
                              <p class="card-text about-desc fs-5">{{ __('lang.entertainment_games_desc') }}</p>
                            </div>
                          </div>
                          <div class="col-md-6 p-4">
                            <div class="img-style" style="background-image:url('{{ asset('front/assets/images/services/العاب ترفيهية.jpg') }}')"></div>
                        </div>
                        </div>
                      </div>
                </div>
                <div class="col-12 pt-3 ">
                    <div class="card mb-3" style="border: 0">
                        <div class="row g-0">
                          <div class="col-md-6  p-4">
                            <div class="img-style" style="background-image:url('{{ asset('front/assets/images/services/أخصائى نفسي.jpg') }}')"></div>                          </div>
                          <div class="col-md-6 p-5">
                            <div class="card-body p-4">
                                <h4 class="card-title fw-bold">{{ __('lang.psychologist') }}</h4><br>
                              <p class="card-text about-desc fs-5">{{ __('lang.psychologist_desc') }}</p>
                            </div>
                          </div>
                        </div>
                      </div>

                </div>

                <div class="col-12 pt-3 ">
                  <div class="card mb-3" style="border: 0">
                      <div class="row g-0">
                       
                        <div class="col-md-6 p-5">
                          <div class="card-body p-4">
                              <h4 class="card-title fw-bold">{{ __('lang.hotel_food') }}</h4><br>
                            <p class="card-text about-desc fs-5">{{ __('lang.hotel_food_desc') }}</p>
                          </div>
                        </div>
                        <div class="col-md-6  p-4">
                          <div class="img-style" style="background-image:url('{{ asset('front/assets/images/services/طعام فندقي.jpg') }}')"></div>   
                        </div>
                      </div>
                    </div>

              </div>

              </div>
          </div>
          {{-- end col 2 --}}
      </div>
      {{-- end div row 3 --}}
    </div>
    {{-- end div container --}}


</section>
{{-- end section  --}}
<br><br>
@endsection

@section('js')


@endsection
