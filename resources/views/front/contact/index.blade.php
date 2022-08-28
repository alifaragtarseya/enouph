@php $dir = app()->getLocale() == 'ar' ? 'rtl' : 'ltr'; @endphp

@extends('front.layouts.master')
@section('title')
    {{ __('lang.contact') }}
@endsection
@section('css')

@endsection

@section('content')
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
                                <b> {{ __('lang.address') }} {{ $dir == 'rtl' ? 'فيلا 339 B الحي المتميز – مدينة بدر' :'Villa 339 B Privileged District – Badr City '}}</b>
                                <br>
                                <a style="text-decoration: none" href="tel:01227118885"><b>{{ __('lang.phone') }} : 01227118885</b></a>
                                <br><br>
                                <a style="text-decoration: none" class="me-4" target="blank" href="https://www.facebook.com/enoughforbetterlife"> <span data-feather="facebook"></span></a>
                                <a style="text-decoration: none" class="me-4"target="blank"  href="https://www.instagram.com/enough_for_better_life/"> <span data-feather="instagram"></span></a>
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
