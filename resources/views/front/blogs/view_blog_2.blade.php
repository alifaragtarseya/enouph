@php $dir2 = app()->getLocale() == 'ar' ? 'right' : 'left'; @endphp

@extends('front.layouts.master')
@section('title')
    {{ __('lang.contact') }}
@endsection
@section('css')
<style>
    .img-blog{
        filter: grayscale(1);
        transition: all .5s
    }
    .img-blog:hover{
        filter: none;
    }
    div.container.blog li{
        font-size: 17px
    }
</style>
@endsection

@section('content')
<br><br><br>
<div class="container blog">
    <div class="row">
        <div class="col-12 col-md-6">
            <img src="{{ asset('front/assets/images/blog/مواد مخدرة نمتاز بعلاجها .jpg') }}" style="width: 100% ;height: 350px;" alt="">
        </div>
        <div class="col-12 col-md-6">
            <div class="card-body">
                <ul>
                    <li><h5 class="card-title"><b>{{ __('lang.blog_2_title') }}</b></h5></li>
                </ul>
                <br>
                <div class="desc">
                    <h3 class="main-color"><b>{{ __('lang.list_3') }}</b></h3><br>
                    <p class="w3-text-gray">{{ __('lang.blog_2_desc') }}</p>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-12">
            <div class="blog-title">
                <ul>
                    <li>
                        <h4>
                            <b>{{ __('lang.side_effect') }}</b>
                        </h4>
                    </li>
                    <li class="list-unstyled">
                        <br>
                        <div class="desc">
                            <p class="fs-5">
                                {{ __('lang.desc_side_effect_1') }}
                            </p>
                            <p class="fs-5">
                                {{ __('lang.desc_side_effect_2') }}
                            </p>
                            <p class="fs-5">
                                {{ __('lang.desc_side_effect_3') }}
                            </p>
                            <p class="fs-5">
                                {{ __('lang.desc_side_effect_4') }}
                            </p>
                            <p class="fs-5">
                                {{ __('lang.desc_side_effect_5') }}
                            </p>
                            <p class="fs-5">
                                {{ __('lang.desc_side_effect_6') }}
                            </p>
                            <p class="fs-5">
                                {{ __('lang.desc_side_effect_7') }}
                            </p>
                            <p class="fs-5">
                                {{ __('lang.desc_side_effect_8') }}
                            </p>
                            <p class="fs-5">
                                {{ __('lang.desc_side_effect_9') }}
                            </p>

                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>

    <br><br>
    <div class="row">
        <div class="col-12">
            <div class="blog-title">
                <ul>
                    <li>
                        <h4>
                            <b>{{ __('lang.tramadol_effect') }}</b>
                        </h4>
                    </li>

                </ul>
                <br>
                <div>
                    <h4>
                        <b>{{ __('lang.different_from_one_to_other') }}</b>
                    </h4>
                    <ul>
                        <li>
                            {{ __('lang.reason_1') }}
                        </li>
                        <li>
                            {{ __('lang.reason_2') }}
                        </li>
                        <li>
                            {{ __('lang.reason_3') }}
                        </li>
                        <li>
                            {{ __('lang.reason_4') }}
                        </li>

                    </ul>
                </div>
                <br>
                <div>
                    <h4>
                        <b>{{ __('lang.symptoms_are') }}</b>
                    </h4>
                    <ul>
                        <li>
                            {{ __('lang.symptoms_reason_1') }}
                        </li>
                        <li>
                            {{ __('lang.symptoms_reason_2') }}
                        </li>
                        <li>
                            {{ __('lang.symptoms_reason_3') }}
                        </li>
                        <li>
                            {{ __('lang.symptoms_reason_4') }}
                        </li><li>
                            {{ __('lang.symptoms_reason_5') }}
                        </li>
                        <li>
                            {{ __('lang.symptoms_reason_6') }}
                        </li>
                        <li>
                            {{ __('lang.symptoms_reason_7') }}
                        </li>
                        <li>
                            {{ __('lang.symptoms_reason_8') }}
                        </li>
                        <li>
                            {{ __('lang.symptoms_reason_9') }}
                        </li>
                        <li>
                            {{ __('lang.symptoms_reason_10') }}
                        </li>
                        <li>
                            {{ __('lang.symptoms_reason_11') }}
                        </li>
                        <li>
                            {{ __('lang.symptoms_reason_12') }}
                        </li>
                        <li>
                            {{ __('lang.symptoms_reason_13') }}
                        </li>
                        <li>
                            {{ __('lang.symptoms_reason_14') }}
                        </li>
                        <li>
                            {{ __('lang.symptoms_reason_15') }}
                        </li>
                        <li>
                            {{ __('lang.symptoms_reason_16') }}
                        </li>


                    </ul>
                </div>

            </div>
        </div>
    </div>

    {{-- heroin desc  --}}
     <br><br>
    <div class="row">
        <div class="col-12">
            <div class="blog-title">
                <div class="desc">
                    <h3 class="main-color"><b>{{ __('lang.list_4') }}</b></h3><br>
                    <p class="w3-text fs-5">{{ __('lang.heroin_desc') }}</p>
                </div>

                {{-- dealing_type --}}
                <br>
                <div>
                    <h4>
                        <b>{{ __('lang.dealing_type') }}</b>
                    </h4>
                    <ul>
                        <li>
                           <b> {{ __('lang.dealing_type_1') }} </b><br>
                            <ul>

                                <li class="list-unstyled">
                                    {{ __('lang.dealing_type_1_desc') }}
                                </li>
                            </ul>
                        </li>
                        <br>
                        <li>

                            {{ __('lang.dealing_type_2') }}<br>
                            <ul>

                                <li class="list-unstyled">
                                    {{ __('lang.dealing_type_2_desc') }}
                                </li>
                            </ul>
                        </li>
                        <br>
                        <li>
                           <b> {{ __('lang.dealing_type_3') }} </b><br>
                            <ul>

                                <li class="list-unstyled">
                                    {{ __('lang.dealing_type_3_desc') }}
                                </li>
                            </ul>
                        </li>
                        <br>
                        <li>
                            <b>{{ __('lang.dealing_type_4') }}</b> <br>
                            <ul>

                                <li class="list-unstyled">
                                    {{ __('lang.dealing_type_4_desc') }}
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>

                {{-- heroin_withdrawal_symptoms --}}
                <br>
                <div>
                    <h4>
                        <b>{{ __('lang.heroin_withdrawal_symptoms') }}</b>
                    </h4>
                    <ul>
                        <li>
                            {{ __('lang.heroin_withdrawal_symptoms_1') }}
                        </li>
                        <li>
                            {{ __('lang.heroin_withdrawal_symptoms_2') }}
                        </li>
                        <li>
                            {{ __('lang.heroin_withdrawal_symptoms_3') }}
                        </li>
                        <li>
                            {{ __('lang.heroin_withdrawal_symptoms_4') }}
                        </li><li>
                            {{ __('lang.heroin_withdrawal_symptoms_5') }}
                        </li>
                        <li>
                            {{ __('lang.heroin_withdrawal_symptoms_6') }}
                        </li>
                        <li>
                            {{ __('lang.heroin_withdrawal_symptoms_7') }}
                        </li>
                        <li>
                            {{ __('lang.heroin_withdrawal_symptoms_8') }}
                        </li>
                        <li>
                            {{ __('lang.heroin_withdrawal_symptoms_9') }}
                        </li>
                        <li>
                            {{ __('lang.heroin_withdrawal_symptoms_10') }}
                        </li>

                    </ul>
                </div>

                {{-- other_dangers_of_heroin --}}
                <br>
                <div>
                    <h4>
                        <b>{{ __('lang.other_dangers_of_heroin') }}</b>
                    </h4>
                    <ul>
                        <li>
                            {{ __('lang.other_dangers_of_heroin_1') }}
                        </li>
                        <li>
                            {{ __('lang.other_dangers_of_heroin_2') }}
                        </li>
                        <li>
                            {{ __('lang.other_dangers_of_heroin_3') }}
                        </li>
                        <li>
                            {{ __('lang.other_dangers_of_heroin_4') }}
                        </li>

                    </ul>
                </div>

                {{-- acute_poisoning --}}
                <br>
                <div>
                    <h4>
                        <b>{{ __('lang.acute_poisoning') }}</b>
                    </h4>
                    <ul>
                        <li>
                            {{ __('lang.acute_poisoning_1') }}
                        </li>
                        <li>
                            {{ __('lang.acute_poisoning_2') }}
                        </li>
                        <li>
                            {{ __('lang.acute_poisoning_3') }}
                        </li>


                    </ul>
                </div>

            </div>
        </div>
    </div>

    {{-- heroin desc  --}}
    <br><br>
    <div class="row">
        <div class="col-12">
            <div class="blog-title">
                <div class="desc">
                    <h3 class="main-color"><b>{{ __('lang.list_2') }}</b></h3><br>
                    <p class="w3-text fs-5">{{ __('lang.hashish_marijuana_desc') }}</p>
                </div>



            </div>
        </div>
    </div>
</div>
<br><br>

@endsection

@section('js')


@endsection
