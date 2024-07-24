@extends('custom_layouts.all_front.app')
@section('content')



<div class="top_page">
    <div class="container">
        <h1>Experience the Future of Technogy with Our Topico</h1>
        <p>Find everything you need to
           transform your home into
           a smart, connected space. Our
           Topico store offers a wide range of devices to fit your needs</p>
    </div>
</div>

<section class="all_products">
    <div class="container">

      <span class="btn_filter" onclick=" open_close_filter()">
      filter <i class="fa-solid fa-filter"></i>
      </span>


        <div class="filter">
           <h2>filter</h2>
           <div class="filter_item">
            <h4>categorie</h4>
            <div class="contanier">


              <div class="item">
                <span>Phones</span>
                <input type="checkbox">
              </div>


              <div class="item">
                <span>Tablts</span>
                <input type="checkbox">
              </div>

              <div class="item">
                <span>Elestronics</span>
                <input type="checkbox">
              </div>
              <div class="item">
                <span>TV</span>
                <input type="checkbox">
              </div>
              <div class="item">
                <span>Fashion</span>
                <input type="checkbox">
              </div>

              <div class="item">
                <span>Watches</span>
                <input type="checkbox">
              </div>

            </div>
           </div>


             <div class="filter_item">
            <h4>Brand</h4>
            <div class="contanier">


              <div class="item">
                <span>Apple</span>
                <input type="checkbox">
              </div>


              <div class="item">
                <span>samsung</span>
                <input type="checkbox">
              </div>

              <div class="item">
                <span>intel</span>
                <input type="checkbox">
              </div>
              <div class="item">
                <span>oppo</span>
                <input type="checkbox">
              </div>
              <div class="item">
                <span>Xiamoi</span>
                <input type="checkbox">
              </div>

              <div class="item">
                <span>Huewei</span>
                <input type="checkbox">
              </div>

            </div>
           </div>





           <div class="filter_item">
            <h4>color</h4>
            <div class="contanier">


              <div class="item">
                <span class="color" style="background: red;"></span>
                <input type="checkbox">
              </div>




              <div class="item">
                <span class="color" style="background: blue;"></span>
                <input type="checkbox">
              </div>



              <div class="item">
                <span class="color" style="background: black;"></span>
                <input type="checkbox">
              </div>



              <div class="item">
                <span class="color" style="background: orangered;"></span>
                <input type="checkbox">
              </div>


              <div class="item">
                <span class="color" style="background: green;"></span>
                <input type="checkbox">
              </div>



              <div class="item">
                <span class="color" style="background: yellow;"></span>
                <input type="checkbox">
              </div>



            </div>
           </div>
        </div>







        <div id="products_dev" class="products_dev">

        </div>
    </div>


    <div class="pagination">
      <span class="btn_page prev"><i class="fa-solid fa-backward-step" ></i></span>
     <a href=""> <span class="mun_page active">1</span></a>
     <a href=""> <span class="mun_page">2</span></a>
     <a href=""> <span class="mun_page ">3</span></a>
      <span class="btn_page next"><i class="fa-solid fa-forward-step" ></i></span>
    </div>
</section>






  <div class="back_to_top">
    <p>back to top</p>
  </div>

  @endsection
