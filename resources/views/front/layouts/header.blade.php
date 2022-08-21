<nav class="navbar navbar-expand-lg navbar-light w3-white">
    <div class="container">
      <a class="navbar-brand" href="#"><img class="logo" src="{{ asset('front/assets/images/logoenuff.png') }}" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 pt-2 {{ App::getLocale() == 'ar' ?'navbar-nav-style' :""}}" style="">
          <li class="nav-item">
            <a class="nav-link {{request()->routeIs('home.index') ?'active' :''}}" aria-current="page" href="{{ route('home.index') }}">{{ __('lang.home') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{request()->routeIs('about.index') ?'active' :''}}"  href="{{ route("about.index") }}">{{ __('lang.about') }}</a>
          </li>

          <li class="nav-item">
            <a  class="nav-link {{request()->routeIs('services.index') ?'active' :''}}"  href="{{ route("services.index") }}">{{ __('lang.services') }}</a>
          </li>
        </ul>
        <form class="d-flex">
          <a style="display: block" href="{{ route('contact.index') }}" class="btn btn-outline-style main-color {{ App::getLocale() == 'en' ?'me-4' :"ms-3"}}" type="submit">{{ __('lang.contact') }}</a>
          @if (App::getLocale() != 'en')
                <a href="{{ route('lang.index')}}?lang=en" class="{{ (App::getLocale()  == 'en') ? '' : ''}} pt-2 nav-link ">
                    <div class="lang {{ (App::getLocale()  == 'en') ? '' : ''}}" data-value="en"><span class="lang-txt w3-text-black ">EN</span><span> </span></div>
                </a>
            @endif
            @if (App::getLocale() != 'ar')
                <a href="{{ route('lang.index')}}?lang=ar" class="{{ (App::getLocale()  == 'ar') ? '' : ''}} pt-1 " style="text-decoration: none">
                    <div class="lang {{ (App::getLocale()  == 'ar') ? '' : ''}}" data-value="ar"><span class="lang-txt w3-text-black">ع</span> <span></span></div>
                </a>
            @endif
        </form>
      </div>
    </div>
  </nav>
