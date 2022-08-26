@php $dir2 = app()->getLocale() == 'ar' ? 'right' : 'left'; @endphp

@extends('front.layouts.master')
@section('title')
    {{ __('lang.blog') }}
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
</style>
@endsection

@section('content')
{{-- start section blog  --}}
<section class="blog pt-5">
    {{-- start div container --}}
    <div class="container pt-5">
        {{-- div row --}}
        <div class="row pt-5">
            {{-- col 1 header  --}}
            <div class="col-12">
                <div class="header">
                  <h2> <b> {{ __('lang.blog') }}</b></h2>

                </div>
            </div>
            {{-- end col 1 --}}
            {{-- col 2 card  --}}
            <div class="col-md-12 pt-5">
                <div class="row">
                    <div class="col-12 col-lg-6 ">
                        {{-- blog one  --}}
                       <a class="text-decoration-none" href="{{ route('blog.show') }}?type=one">
                            <div class="card"  style="height: 97%">
                                <img src="{{ asset('front/assets/images/blog/اعراض المواد المخدرة 2.jpg') }}" class="card-img-top img-blog" alt="...">
                                <div class="card-body">
                                <h5 class="card-title"><b>{{ __('lang.blog_1_title') }}</b></h5>
                                <br>
                                <div class="desc pb-3 ">
                                    <p class="card-text w3-text-gray">{{ __('lang.blog_1_desc') }} </p> {{ __('lang.read_more') }}

                                </div>

                                </div>
                            </div>
                       </a>
                       {{-- end blog one  --}}
                    </div>
                    <div class="col-12 col-lg-6">
                        {{-- blog two  --}}
                        <a class="text-decoration-none" href="{{ route('blog.show') }}?type=two">
                            <div class="card mb-3" >
                                <div class="row g-0">
                                  <div class="col-md-5">
                                    <img src="{{ asset('front/assets/images/blog/مواد مخدرة نمتاز بعلاجها .jpg') }}" class="img-fluid img-blog rounded-start" alt="..." style="width: 100%;height: 268px;" >
                                  </div>
                                  <div class="col-md-7">
                                    <div class="card-body">
                                      <h5 class="card-title"><b>{{ __('lang.blog_2_title') }}</b></h5>
                                      <br><br> 
                                      <p class="card-text w3-text-gray">{{ __('lang.list_3') }} {{ substr( __('lang.blog_2_desc') , 0 ,353) }} .....</p>{{ __('lang.read_more') }}

                                    </div>
                                  </div>
                                </div>
                              </div>
                       </a>
                       {{-- end blog two  --}}
                       <br>
                       {{-- blog 3  --}}
                       <a class="text-decoration-none" href="{{ route('blog.show') }}?type=three">
                        <div class="card mb-3" >
                            <div class="row g-0">
                              <div class="col-md-5">
                                <img src="{{ asset('front/assets/images/blog/63861-الاستروكس.jpg') }}" class="img-fluid img-blog rounded-start" alt="..." style="width: 100%;height: 268px;">
                              </div>
                              <div class="col-md-7">
                                <div class="card-body">
                                  <h5 class="card-title"><b>{{ __('lang.blog_3_title') }}</b></h5>
                                  <br><br>
                                  <p class="card-text w3-text-gray">{{ substr(__('lang.blog_3_desc') , 0 , 344)  }} .....</p>  {{ __('lang.read_more') }}
                                </div>
                              </div>
                            </div>
                          </div>
                   </a>
                   {{-- end blog 3  --}}
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
