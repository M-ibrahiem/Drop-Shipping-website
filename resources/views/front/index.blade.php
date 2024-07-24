@extends('custom_layouts.all_front.app')
@section('content')



  <section class="slider">
    <div class="container">
      <div class="side_bar">
        <h2><i class="fa-solid fa-bars"></i>{{ __('SHOP by derparment') }}</h2>

        <a href="#">{{ __('All categories') }}</a>
        <a href="#">{{ __('Best seller products') }}</a>
        <a href="#">{{ __('New Arrivals') }}</a>
        <a href="#">{{ __('Top 10 offers') }}</a>
        <a href="#">{{ __('Phones & Tablet') }}</a>
        <a href="#">{{ __('Elestronics & Digital') }}</a>
        <a href="#">{{ __('Fashion & Clothings') }}</a>
        <a href="#">{{ __('Jawelry & Watches') }}</a>
        <a href="#">{{ __('TV & Audio') }}</a>
      </div>

      <!-- Swiper -->
      <div class="slide-swp mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="#"> <img src="{{ asset('front/img/slider-01.jpg') }}" alt=""> </a>
          </div>
          <div class="swiper-slide">
            <a href="#"> <img src="{{ asset('front/img/slider-02.jpg') }}" alt=""> </a>
          </div>
          <div class="swiper-slide">
            <a href="#"> <img src="{{ asset('front/img/slider-03.jpg') }}" alt=""> </a>
          </div>

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section>


  <section class="featurs">
    <div class="container">
      <div class="feature_item">
        <img src="{{ asset('front/img/features1.png') }}" alt="">
        <div class="text">
          <h4>{{ __('Free Shipping') }}</h4>
          <p>{{ __('Free Shipping on all order') }}</p>
        </div>
      </div>

      <div class="feature_item">
        <img src="{{ asset('front/img/features2.png') }}" alt="">
        <div class="text">
            <h4>{{ __('Free Shipping') }}</h4>
            <p>{{ __('Free Shipping on all order') }}</p>
        </div>
      </div>
      <div class="feature_item">
        <img src="{{ asset('front/img/features3.png') }}" alt="">
        <div class="text">
            <h4>{{ __('Free Shipping') }}</h4>
            <p>{{ __('Free Shipping on all order') }}</p>
        </div>
      </div>
      <div class="feature_item">
        <img src="{{ asset('front/img/features4.png') }}" alt="">
        <div class="text">
            <h4>{{ __('Free Shipping') }}</h4>
            <p>{{ __('Free Shipping on all order') }}</p>
        </div>
      </div>
      <div class="feature_item">
        <img src="{{ asset('front/img/features5.png') }}" alt="">
        <div class="text">
            <h4>{{ __('Free Shipping') }}</h4>
            <p>{{ __('Free Shipping on all order') }}</p>
        </div>
      </div>
    </div>
  </section>


  <section class="banner">
    <div class="container">

      <div class="banner_img">
        <div class="galass_hover"></div>
        <a href="#"> </a>
        <img src="{{ asset('front/img/banner/banner-1.jpg') }}" alt="">

      </div>
      <div class="banner_img">
        <div class="galass_hover"></div>
        <a href="#"></a>
        <img src="{{ asset('front/img/banner/banner-2.jpg') }}" alt="">

      </div>
      <div class="banner_img">
        <div class="galass_hover"></div>
        <a href="#"> </a>
        <img src="{{ asset('front/img/banner/banner-3.jpg') }}" alt="">

      </div>
    </div>
  </section>

  <section class="slide slide_sale">
    <div class="container">

      <div class="sale_sec mySwiper">

        <div class="top_slide">
          <h2>{{ __('on sale') }} <span> {{ __('prodcts') }}</span></h2>
        </div>

        <div id="swiper_items_sale" class="products swiper-wrapper">




        </div>



        <div class="swiper-button-next btn_swip"></div>
        <div class="swiper-button-prev btn_swip"></div>



      </div>
    </div>
  </section>


  <section class="banner banner_big">
    <div class="container">


      <div class="banner_img">
        <div class="galass_hover"></div>
        <a href="#"></a>
        <img src="{{ asset('front/img/banner/banner-4.jpg') }}" alt="">

      </div>
      <div class="banner_img">
        <div class="galass_hover"></div>
        <a href="#"> </a>
        <img src="{{ asset('front/img/banner/banner-5.jpg') }}" alt="">

      </div>
    </div>
  </section>



  <section class="slide slide_product">
    <div class="container">
      <div class="top_slide">
        @if (LaravelLocalization::getCurrentLocale() == 'en')
        <h2>{{ __('Computer & Desktop') }} <span>{{ __('prodcts') }}</span></h2>
        @else
        <h2> <span>{{ __('prodcts') }} </span>{{ __('Computer & Desktop') }} </h2>

        @endif

      </div>
      <div class="slide_with_img">

        <div class="categ_img">
          <a href="#"><img src="{{ asset('front/img/banner/banner-sm-1.jpg') }}" alt=""></a>
        </div>

        <div class="product_swip mySwiper">
          <div class="products othre_product_swiper swiper-wrapper" id="othre_product_swiper">

          </div>

          <div class="swiper-button-next btn_swip"></div>
          <div class="swiper-button-prev btn_swip"></div>

        </div>


      </div>

    </div>
  </section>




  <section class="slide slide_product">
    <div class="container">
      <div class="top_slide">
        @if (LaravelLocalization::getCurrentLocale() == 'en')
        <h2>{{ __('Computer & Desktop') }} <span>{{ __('prodcts') }}</span></h2>
        @else
        <h2> <span>{{ __('prodcts') }} </span>{{ __('Computer & Desktop') }} </h2>

        @endif      </div>
      <div class="slide_with_img">



        <div class="product_swip mySwiper">
          <div class="products othre_product_swiper swiper-wrapper" id="othre_product_swiper2">

          </div>

          <div class="swiper-button-next btn_swip"></div>
          <div class="swiper-button-prev btn_swip"></div>

        </div>

        <div class="categ_img">
          <a href="#"><img src="{{ asset('front/img/banner/banner-sm-2.jpg') }}" alt=""></a>
        </div>
      </div>

    </div>
  </section>

  <section class="banner">
    <div class="container">

      <div class="banner_img">
        <div class="galass_hover"></div>
        <a href="#"> </a>
        <img src="{{ asset('front/img/banner/banner-6.jpg') }}" alt="">

      </div>
      <div class="banner_img">
        <div class="galass_hover"></div>
        <a href="#"></a>
        <img src="{{ asset('front/img/banner/banner-7.jpg') }}" alt="">

      </div>
      <div class="banner_img">
        <div class="galass_hover"></div>
        <a href="#"> </a>
        <img src="{{ asset('front/img/banner/banner-8.jpg') }}" alt="">

      </div>
    </div>
  </section>

  <div class="newslertter">
    <div class="container">
      <div class="text">
        <img src="{{ asset('front/img/icon_email.png') }}" alt="">
        <div class="content">
          <h4>sign up to newsletter</h4>
          <p>Get email updates about our latest shop...and receive</p>
          <h6>$30 Coupon For First Shopping</h6>
        </div>
      </div>

      <form action="" class="newslertter_form">
        <input type="email" placeholder="Enter your email here...">
        <button type="submit">subscribe</button>
      </form>
    </div>
  </div>

  <div class="back_to_top">
    <p>back to top</p>
  </div>

  @endsection
