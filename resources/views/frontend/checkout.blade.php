@extends('frontend.layout.main')
@section('content')
    <section class="banner-slider" id="inn-banner-slider">
        <div data-ride="carousel" class="carousel slide" id="carouselExampleIndicators">
            <div role="listbox" class="carousel-inner">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div style="background-image: url('frontend-asset/images/inn-banner.jpg')" class="carousel-item active">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Content -->

    <section id="line-section"> </section>

    <section id="inn-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="mb-4">Checkout</h2>
                    <form id="checkout-form" method="post" action="" role="form" class="border-box p-4">
                        <div class="controls">
                            <div class="row mb-5">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input id="fname" type="text" name="fname" class="form-control"
                                            required="required" data-error="First Name is required.">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input id="lname" type="text" name="lname" class="form-control"
                                            required="required" data-error="Last Name is required.">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input id="Email" type="text" name="Email" class="form-control"
                                            required="required" data-error="Email is required.">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input id="Phone" type="text" name="Phone" class="form-control"
                                            required="required" data-error="Phone is required.">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <select class="form-control">
                                            <option>Country 1</option>
                                            <option>Country 2</option>
                                            <option>Country 3</option>
                                            <option>Country 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Street Address</label>
                                        <input id="Street_address" type="text" name="Street_address" class="form-control"
                                            required="required" data-error="Street Address is required.">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Apartment, suite, unit etc. (optional)</label>
                                        <input id="Apartment" type="text" name="Apartment" class="form-control"
                                            required="required" data-error="Apartment is required.">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Town / City</label>
                                        <input id="City" type="text" name="City" class="form-control"
                                            required="required" data-error="City is required.">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input id="State" type="text" name="State" class="form-control"
                                            required="required" data-error="State is required.">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Postcode</label>
                                        <input id="Postcode" type="text" name="Postcode" class="form-control"
                                            required="required" data-error="Postcode is required.">
                                    </div>
                                </div>
                            </div>



                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    <table class="table cart-tl">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $totalAmount = 0;
                                            @endphp
                                            @forelse ($cartItems as $cartItem)
                                                @php
                                                    $itemTotal =
                                                        $cartItem?->productVariant?->price * $cartItem?->quantity;
                                                    $totalAmount += $itemTotal;
                                                @endphp
                                                <tr>
                                                    <th scope="row"><img
                                                            src="{{ asset('storage/' . $cartItem?->product?->productPrimaryImage?->image_path) }}"
                                                            class="img-fluid"></th>
                                                    <td>{{ $cartItem?->product?->name }}</td>
                                                    <td>₹{{ $itemTotal }}</td>
                                                </tr>
                                            @empty
                                            @endforelse

                                            <tr>
                                                <th scope="row"></th>
                                                <td><b>Cart Total</b></td>
                                                <td><b>₹{{ $totalAmount }}</b></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>



                            <div class="row mb-4">
                                <div class="col-lg-12">
                                    <div class="form-check mb-3 pl-0">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label pay-radio" for="exampleRadios1">
                                            Pay Via Stripe
                                        </label>
                                    </div>
                                    <div class="form-check pl-0">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadios2" value="option2">
                                        <label class="form-check-label pay-radio" for="exampleRadios2">
                                            Pay Via PayPal
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-lg-12">
                                    <a href="" class="banner-btn">Checkout</a>
                                </div>
                            </div>




                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>


    <section id="line2-section"> </section>

    <script src="js/script.js" defer></script>
    <script src="owl-carousel/js/owl.carousel.js"></script>
    <!-- End Owl pranab-->
    <script>
        (function() {
            'use strict';

            function ctrls() {
                var _this = this;

                this.counter = 0;
                this.els = {
                    decrement: document.querySelector('.ctrl__button--decrement'),
                    counter: {
                        container: document.querySelector('.ctrl__counter'),
                        num: document.querySelector('.ctrl__counter-num'),
                        input: document.querySelector('.ctrl__counter-input')
                    },
                    increment: document.querySelector('.ctrl__button--increment')
                };

                this.decrement = function() {
                    var counter = _this.getCounter();
                    var nextCounter = (_this.counter > 0) ? --counter : counter;
                    _this.setCounter(nextCounter);
                };

                this.increment = function() {
                    var counter = _this.getCounter();
                    var nextCounter = (counter < 9999999999) ? ++counter : counter;
                    _this.setCounter(nextCounter);
                };

                this.getCounter = function() {
                    return _this.counter;
                };

                this.setCounter = function(nextCounter) {
                    _this.counter = nextCounter;
                };

                this.debounce = function(callback) {
                    setTimeout(callback, 100);
                };

                this.render = function(hideClassName, visibleClassName) {
                    _this.els.counter.num.classList.add(hideClassName);

                    setTimeout(function() {
                        _this.els.counter.num.innerText = _this.getCounter();
                        _this.els.counter.input.value = _this.getCounter();
                        _this.els.counter.num.classList.add(visibleClassName);
                    }, 100);

                    setTimeout(function() {
                        _this.els.counter.num.classList.remove(hideClassName);
                        _this.els.counter.num.classList.remove(visibleClassName);
                    }, 200);
                };

                this.ready = function() {
                    _this.els.decrement.addEventListener('click', function() {
                        _this.debounce(function() {
                            _this.decrement();
                            _this.render('is-decrement-hide', 'is-decrement-visible');
                        });
                    });

                    _this.els.increment.addEventListener('click', function() {
                        _this.debounce(function() {
                            _this.increment();
                            _this.render('is-increment-hide', 'is-increment-visible');
                        });
                    });

                    _this.els.counter.input.addEventListener('input', function(e) {
                        var parseValue = parseInt(e.target.value);
                        if (!isNaN(parseValue) && parseValue >= 0) {
                            _this.setCounter(parseValue);
                            _this.render();
                        }
                    });

                    _this.els.counter.input.addEventListener('focus', function(e) {
                        _this.els.counter.container.classList.add('is-input');
                    });

                    _this.els.counter.input.addEventListener('blur', function(e) {
                        _this.els.counter.container.classList.remove('is-input');
                        _this.render();
                    });
                };
            };

            // init
            var controls = new ctrls();
            document.addEventListener('DOMContentLoaded', controls.ready);
        })();
    </script>
@endsection
