@extends('layouts.main')

@section('content')


 <!-- item section -->

 <div class="item_section layout_padding2" style="background-color:beige;">
    <div class="container">
      <div class="item_container">
        <div class="box">
          <div class="price">
            <h6>
              Best PRICE
            </h6>
          </div>
          <div class="img-box">
            <img src="{{ asset('images/i-1.png') }}" alt="">
          </div>
          <div class="name">
            <h5>
              Papaya
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="price">
            <h6>
              Best PRICE
            </h6>
          </div>
          <div class="img-box">
            <img src="{{ asset('images/i-2.png') }}" alt="">
          </div>
          <div class="name">
            <h5>
              Chocolate MilkShake
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="price">
            <h6>
              Best PRICE
            </h6>
          </div>
          <div class="img-box">
            <img src="{{ asset('images/i-3.png') }}" alt="">
          </div>
          <div class="name">
            <h5>
              Watermelon
            </h5>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- end item section -->

  <!-- price section -->

  <section class="price_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Prices
        </h2>
      </div>
      <div class="price_container">
        <div class="box">
          <div class="name">
            <h6>
              Mango Mousse
            </h6>
          </div>
          <div class="img-box">
            <img src="{{ asset('images/p-1.png') }}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              LKR<span>130.00</span>
            </h5>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <div class="name">
            <h6>
              Chocolate MilkShake
            </h6>
          </div>
          <div class="img-box">
            <img src="{{ asset('images/i-2.png') }}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              LKR<span>150.00</span>
            </h5>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <div class="name">
            <h6>
              Watermelon
            </h6>
          </div>
          <div class="img-box">
            <img src="{{ asset('images/i-3.png') }}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              LKR<span>130.00</span>
            </h5>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <a href="" class="price_btn">
          See More
        </a>
      </div>
    </div>
  </section>

  <!-- end price section -->





@endsection

