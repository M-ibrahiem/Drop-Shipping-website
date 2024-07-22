<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fil css -->
    <title>Topoco</title>
    <link rel="stylesheet" href="{{ asset('front/./css/styl.css') }}">
            <link rel="stylesheet" href="{{ asset('front/./css/login_regs.css') }}">

    <!-- font awesom -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- In your head section for CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">


</head>

<body class="ltr" dir="{{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'rtl' : 'ltr' }}">

    <header>
        <div class="container top-nav">
            <a href="index.html" class="logo"><img src="{{ asset('front/img/logo-black.png') }}" alt=""></a>
            <form action="" class="search">
                <input type="search" placeholder="{{ __('Search for products...') }}">
                <button type="submit">{{ __('Search') }}</button>
            </form>
            <div class="cart_header">
                <div onclick=" open_cart()" class="icon_cart ">
                    <i class="fa-solid fa-bag-shopping"></i>
                    <span class="count_item">0</span>
                </div>
                <div class="tottal_price">
                    <p>{{ __('MY Cart') }}</p>
                    <p class="price_cart_head">$0</p>
                </div>


                <!-- Language Icons -->
                <div class="language-switcher-">
                    @if (LaravelLocalization::getCurrentLocale() == 'en')
                        <a href="{{ LaravelLocalization::getLocalizedURL('ar') }}">
                            <i class="fa-solid fa-language"></i> AR
                        </a>
                    @else
                        <a href="{{ LaravelLocalization::getLocalizedURL('en') }}">
                            <i class="fa-solid fa-language"></i> EN
                        </a>
                </div>
                @endif
            </div>
        </div>
        </div>
        <nav>
            <div class="links container">
                <i onclick=" open_menu()" class="fa-solid fa-bars btn_open_menu"></i>
                <ul id="menu">
                    <span onclick=" close_menu()" class="bg_overley"></span>
                    <i onclick=" close_menu()" class="fa-regular fa-circle-xmark btn_close_menu"></i>
                    <img class="logo_menu" src="{{ asset('front/img/logo-black.png') }}" alt="">


                    <li class="active"><a href="index.html">{{ __('HOME') }}</a></li>
                    <li><a href="all_products.html">{{ __('ALL PRODUCTS') }}</a></li>
                    <li><a href="about.html">{{ Lang::get('main.About Us') }}</a></li>
                    <li><a href="contact.html">{{ __('Contact') }}</a></li>
                </ul>
                <div class="ioging_signup">

                    @if (Route::has('login'))
                        @auth
                            <form method="POST" action="{{ route('logout') }}" class="button-form">
                                @csrf
                                <button type="submit" class="button">
                                    {{ __('Log Out') }} <i class="fa-solid fa-user-minus"></i>
                                </button>
                            </form>
                            @if (Auth::user()->role == 'super_admin' || Auth::user()->role == 'admin')
                            {{-- @if (Auth::user()->hasRole(['super_admin', 'admin'])) --}}
                                <a href="{{ route('dashboard.main') }}" class="button">Dashboard</a>
                            @endif
                        @else
                            <a href="{{ route('login') }}">{{ __('Login') }} <i
                                    class="fa-solid fa-right-to-bracket"></i></a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">{{ __('Sign UP') }} <i
                                        class="fa-solid fa-user-plus"></i></a>
                            @endif
                        @endauth
                    @endif

                </div>
            </div>
        </nav>
    </header>

    <div class="cart">
        <div class="top_cart">
            <h3>my cart <span class="count_item_cart">(0 Item in cart)</span></h3>
            <span onclick="close_cart()" class="close_cart"><i class="fa-regular fa-circle-xmark"></i></span>
        </div>
        <div class="items_in_cart"></div>
        <div class="bottom_cart">
            <div class="tottal">
                <p>cart subtotal</p>
                <p class="price_cart_total">$0</p>
            </div>
            <div class="button_cart">
                <a href="/checkout.html" class="btn_cart">proceed to checkout</a>
                <button onclick="close_cart()" class="btn_cart trans_bg">shop more</button>
            </div>
        </div>
    </div>



    {{-- <div class="cart">
        <ul>
            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li>
                    <a rel="alternate" hreflang="{{ $localeCode }}"
                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>
                </li>
            @endforeach
        </ul> --}}
