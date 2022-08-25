@php $dir2 = app()->getLocale() == 'ar' ? 'right' : 'left'; @endphp

@extends('front.layouts.master')
@section('title')
    {{ __('lang.contact') }}
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
            <img src="{{ asset('front/assets/images/blog/اعراض المواد المخدرة 2.jpg') }}" style="width: 100% ;height: 500px;" alt="">
        </div>
        <div class="col-12 col-md-6">
            <div class="card-body">
                <h5 class="card-title"><b>{{ __('lang.blog_1_title') }}</b></h5>
                <br>
                <ul>
                    <li>{{ __('lang.symptoms_1') }}</li>
                    <li>{{ __('lang.symptoms_2') }}</li>
                    <li>{{ __('lang.symptoms_3') }}</li>
                    <li>{{ __('lang.symptoms_4') }}</li>
                    <li>{{ __('lang.symptoms_5') }}</li>
                    <li>{{ __('lang.symptoms_6') }}</li>
                    <li>{{ __('lang.symptoms_7') }}</li>
                    <li>{{ __('lang.symptoms_8') }}</li>
                    <li>{{ __('lang.symptoms_9') }}</li>
                    <li>{{ __('lang.symptoms_10') }}</li>
                    <li>{{ __('lang.symptoms_11') }}</li>
                </ul>
                <br>
                <p>
                    {{ __('lang.symptoms_12') }}
                </p>
                </div>
        </div>



    </div>
</div>
<br><br>
@endsection

@section('js')


@endsection
