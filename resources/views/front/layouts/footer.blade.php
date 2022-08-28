
<section class="footer text-center  pb-4">
<footer>
    <div class="row text-center">
        <div class="col-12 text-center pt-5">
            <a style="text-decoration: none" class="me-4" target="blank" href="https://www.facebook.com/enoughforbetterlife"> <span data-feather="facebook"></span></a>
            <a style="text-decoration: none" class="me-4"target="blank"  href="https://www.instagram.com/enough_for_better_life/"> <span data-feather="instagram"></span></a>
        </div>
        <div class="col-12 pt-4">
            <div class="row text-center">
                <div class="col-3 col-md-3"><a class=" text-decoration-none {{request()->routeIs('home.index') ?'footer-active-link' :''}}" aria-current="page" href="{{ route('home.index') }}">{{ __('lang.home') }}</a></div>
                <div class="col-3 col-md-2">            <a class=" text-decoration-none {{request()->routeIs('about.index') ?'footer-active-link' :''}}"  href="{{ route("about.index") }}">{{ __('lang.about') }}</a></div>
                <div class="col-3 col-md-2">            <a class=" text-decoration-none {{request()->routeIs('services.index') ?'footer-active-link' :''}}"  href="{{ route("services.index") }}">{{ __('lang.services') }}</a></div>
                <div class="col-3 col-md-2">            <a class=" text-decoration-none {{request()->routeIs('blog.*') ?'footer-active-link' :''}}"  href="{{ route('blog.index') }}">{{ __('lang.blog') }}</a></div>
                <div class="col-3 col-md-3">            <a class=" text-decoration-none {{request()->routeIs('contact.index') ?'footer-active-link' :''}}"  href="{{ route("contact.index") }}">{{ __('lang.contact') }}</a></div>
            </div>
        </div>
    </div>
    <br>
    <hr>
    <div class="row pt-3  text-center">
        <div class="col-12 col-md-6 col-lg-4">
            <a style="text-decoration: none" href="tel:01227118885"><b>{{ __('lang.tel') }}: 01227118885</b></a>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <a style="text-decoration: none" href="mailto:info@enough.com"><b>{{ __('lang.email') }}: info@enough.com</b></a>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            {{ __('lang.address') }} : {{ $dir == 'rtl' ? '}فيلا 339 B الحي المتميز – مدينة بدر' :'Villa 339 B Privileged District – Badr City '}}
        </div>
    </div>
</footer>
</section>
