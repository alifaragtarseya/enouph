@php $dir2 = app()->getLocale() == 'ar' ? 'right' : 'left'; @endphp

@extends('front.layouts.master')
@section('title')
    {{ __('lang.blog') }}
@endsection
@section('css')
    <style>

    </style>
@endsection

@section('content')
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <img src="{{ asset('front/assets/images/blog/63861-الاستروكس.jpg') }}" style="width: 100% ;" alt="">
            </div>
            <div class="col-12 col-md-6">
                <div class="card-body">
                    <h5 class="card-title main-color"><b>{{ __('lang.blog_3_title') }}</b></h5>
                    <br>
                    <p class="fs-5">
                        {{ __('lang.blog_3_desc') }}
                    </p>
                </div>
            </div>



        </div>

        <br>
        <div class="row">

            <div class="col-12 ">
                <div class="card-body">
                    <h5 class="card-title"><b>{{ __('lang.formation_estrux') }}</b></h5>
                    <br>
                    <p class="fs-5">
                        {{ __('lang.formation_estrux_desc_1') }}
                    </p>
                    <p class="fs-5">
                        {{ __('lang.formation_estrux_desc_2') }}
                    </p>
                    <p class="fs-5">
                        {{ __('lang.formation_estrux_desc_3') }}
                    </p>
                    <p class="fs-5">
                        {{ __('lang.formation_estrux_desc_4') }}
                    </p>
                    <p class="fs-5">
                        {{ __('lang.formation_estrux_desc_5') }} <a href="{{ route('blog.show') }}?type=two" target="_blank" rel="noopener noreferrer"><b>{{ __('lang.formation_estrux_desc_5_hashish') }}</b></a> {{ __('lang.formation_estrux_desc_5_sub') }}
                    </p>
                    <p class="fs-5">
                        {{ __('lang.formation_estrux_desc_6') }}
                    </p>
                    <p class="fs-5">
                        {{ __('lang.formation_estrux_desc_7') }}
                    </p>
                    <p class="fs-5">
                        {{ __('lang.formation_estrux_desc_8') }}
                    </p>
                    <p class="fs-5">
                        {{ __('lang.formation_estrux_desc_9') }}
                    </p>


                </div>
            </div>



        </div>
    </div>
    <br><br>
@endsection

@section('js')
@endsection
