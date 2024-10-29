@extends('frontend.layout.main')
@section('content')

<section class="banner-slider" id="inn-banner-slider">
  <div data-ride="carousel" class="carousel slide" id="carouselExampleIndicators">
    <div role="listbox" class="carousel-inner">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div style="background-image: url('/frontend-asset/images/inn-banner.jpg')" class="carousel-item active">
      </div>
    </div>
  </div>
</section>
<!-- Page Content -->

<section id="line-section"> </section>

<section id="inn-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="mb-4">My Account</h2>
      </div>
      <div class="col-lg-12">
        <div class="account-content">
          <div class="row">
            <div class="col-lg-3">
              <div class="pro-img-box">
                <img src="{{asset('frontend-asset/images/default_avatar.png')}}" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-7">
              <div class="pro-box-ctn">
                <ul>
                  <li><i class="fa fa-user-o" aria-hidden="true"></i> Full Name</li>
                  <li><i class="fa fa-envelope-o" aria-hidden="true"></i> info@gmail.com</li>
                  <li><i class="fa fa-phone" aria-hidden="true"></i> +91 9876543210</li>
                  <li><i class="fa fa-map-marker" aria-hidden="true"></i> Street address, City, State, Zip Code</li>
                  <li><i class="fa fa-key" aria-hidden="true"></i> <b>Current Password:</b> ******</li>

                  <li><a href="" class="banner-btn">Log Out</a></li>
                </ul>

              </div>
            </div>
            <div class="col-lg-2">
              <a href="" class="sp-btn-snd">Edit</a>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-lg-12 text-center">
        <h3 class="mb-4">My Order Details</h3>
      </div>
      <div class="col-lg-12">
        <table class="table cart-tl">
          <thead class="thead-light">
            <tr>
              <th scope="col"></th>
              <th scope="col">Product Name</th>
              <th scope="col">Price</th>
              <th scope="col">Order Date</th>
              <th scope="col">Quantity</th>
              <th scope="col">Address</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><img src="{{asset('frontend-asset/images/pro-img.jpg')}}" class="img-fluid"></th>
              <td>Product Name Here</td>
              <td>₹250.00</td>
              <td>16.04.2322</td>
              <td>2</td>
              <td>Street Address, City, State, Zipcode</td>
            </tr>
            <tr>
              <th scope="row"><img src="{{asset('frontend-asset/images/pro-img.jpg')}}" class="img-fluid"></th>
              <td>Product Name Here</td>
              <td>₹250.00</td>
              <td>16.04.2322</td>
              <td>2</td>
              <td>Street Address, City, State, Zipcode</td>
            </tr>
            <tr>
              <th scope="row"><img src="{{asset('frontend-asset/images/pro-img.jpg')}}" class="img-fluid"></th>
              <td>Product Name Here</td>
              <td>₹250.00</td>
              <td>16.04.2322</td>
              <td>2</td>
              <td>Street Address, City, State, Zipcode</td>
            </tr>
            <tr>
              <th scope="row"><img src="{{asset('frontend-asset/images/pro-img.jpg')}}" class="img-fluid"></th>
              <td>Product Name Here</td>
              <td>₹250.00</td>
              <td>16.04.2322</td>
              <td>2</td>
              <td>Street Address, City, State, Zipcode</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</section>


<section id="line2-section"> </section>

<script src="js/script.js" defer></script>
<script src="owl-carousel/js/owl.carousel.js"></script>

@endsection