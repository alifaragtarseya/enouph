@php $dir = app()->getLocale() == 'ar' ? 'rtl' : 'ltr'; @endphp
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" direction="{{ $dir }}" dir="{{ $dir }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>{{ config('app.name') }} - @yield('title')</title>
    @include('front.layouts.css')
    <style>
/* */
    </style>
    @yield('css')


</head>
<body>
    @include('front.layouts.header')
    @yield('content')
    <div class="media" style=" {{ app()->getLocale() == 'en' ? 'left:50px'  :'right: 50px'}}">
        <a href="#"> <img src="{{ asset('front/assets/images/home/messenger.png') }}" alt=""><br></a>
        <a href="#"> <img src="{{ asset('front/assets/images/home/whatsapp.png') }}" alt=""></a>
      </div>
    @include('front.layouts.footer')

   @include('front.layouts.script')
   @yield('js')
</body>
</html>
