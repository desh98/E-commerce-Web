@extends('layouts.main')

@section('content')

    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="design-box">
        <img src="{{ asset('images/design-1.png') }}" alt="" style="width: 150px;"class="siderimg">
      </div>
      <div class="slider_number-container d-none d-md-block">
        <div class="number-box">
          <span>
            01
          </span>
          <hr>
          <span class="jwel" style="color:black">
            S <br>
            w <br>
            e <br>
            e <br>
            t <br>
            & <br>
            C <br>
            r <br>
            u <br>
            s <br>
            h
          </span>
          <hr>
          <span>
            02
          </span>
        </div>
      </div>
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail_box">
                    <h2>
                      <span> New Collection</span>
                      <hr>
                    </h2>
                    <h1>
                      Fruit Juice
                    </h1>
                    
                    <div>
                      <a href="">Shop Now</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="{{ asset('images/slider1-img.png') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail_box">
                    <h2>
                      <span> New Collection</span>
                      <hr>
                    </h2>
                    <h1>
                      MilkShake
                    </h1>
                  
                    <div>
                      <a href="">Shop Now</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="{{ asset('images/slider2-img.png') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail_box">
                    <h2>
                      <span> New Collection</span>
                      <hr>
                    </h2>
                    <h1>
                      Fruit Salad
                    </h1>
                    
                    <div>
                      <a href="">Shop Now</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="{{ asset('images/slider3-img.png') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- item section -->

  <div class="item_section layout_padding2">
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

  <!-- about section -->

  <section class="about_section layout_padding2-top layout_padding-bottom">
    <div class="design-box">
      <img src="{{ asset('images/design-2.png') }}" alt="" style="width: 150px;" class="siderimg">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Sweet&Crush
              </h2>
            </div>
            <p>
            At Sweet & Crush, we're all about bringing you the freshest, most delicious fruit and vegetable juices. Our passion is to craft vibrant, nutritious concoctions that will delight your taste buds and boost your well-being. We believe that healthy living should be a treat, not a chore. Discover our menu, meet our team, and learn more about our commitment to quality and sustainability. Join us on a journey to sip, savor, and crush your way to a healthier you!
            </p>
            <div>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{ asset('images/about-img.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

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

  <!-- ring section -->

  <section class="ring_section layout_padding">
    <!-- <div class="design-box">
      <img src="{{ asset('images/design-1.png') }}" alt="">
    </div> -->
    <div class="container">
      <div class="ring_container layout_padding2">
        <div class="row">
          <div class="col-md-5">
            <div class="detail-box">
              <h4>
                special
              </h4>
              <h2>
                Cucumber Smoothie
              </h2>
              <a href="">
                Buy Now
              </a>
            </div>
          </div>
          <div class="col-md-7">
            <div class="img-box">
              <img src="{{ asset('images/p-2.png') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end ring section -->

  <!-- client section -->

  <section class="client_section">
    <div class="container">
      <div class="heading_container">
        <h2>
          Testimonial
        </h2>
      </div>
      <h4 class="secondary_heading">
        Customer Feedback
      </h4>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="client_container">
              <div class="client-id">
                <div class="img-box">
                  <img src="{{ asset('images/client.png') }}" alt="">
                </div>
                <div class="name">
                  <h5>
                    Alia
                  </h5>
                  <h6>
                    Consectetur adipiscing
                  </h6>
                </div>
              </div>
              <div class="detail-box">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container">
              <div class="client-id">
                <div class="img-box">
                  <img src="{{ asset('images/client.png') }}" alt="">
                </div>
                <div class="name">
                  <h5>
                    Aliqua
                  </h5>
                  <h6>
                    Consectetur adipiscing
                  </h6>
                </div>
              </div>
              <div class="detail-box">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container">
              <div class="client-id">
                <div class="img-box">
                  <img src="{{ asset('images/client.png') }}" alt="">
                </div>
                <div class="name">
                  <h5>
                    Aliqua
                  </h5>
                  <h6>
                    Consectetur adipiscing
                  </h6>
                </div>
              </div>
              <div class="detail-box">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum
                </p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
  </section>

  <!-- end client section -->

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="design-box">
      <img src="{{ asset('images/design-2.png') }}" alt="">
    </div>
    <div class="container ">
      <div class="">
        <h2 class="">
          Contact Us
        </h2>
      </div>

    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form action="">
            <div>
              <input type="text" placeholder="Name" />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" placeholder="Phone" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="d-flex ">
              <button>
                SEND
              </button>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div class="map_container">
            <div class="map-responsive">
              <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

@endsection