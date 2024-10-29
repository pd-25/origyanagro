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
        <div class="row mb-5">
            <div class="col-lg-5">
                <div id="demo-pranab">
                    <div id="owl-single-product" class="owl-carousel owl-theme">
                        <div class="item">
                            <img src="{{asset('frontend-asset/images/pro-img.jpg')}}" class="img-fluid">
                        </div>
                        <div class="item">
                            <img src="{{asset('frontend-asset/images/pro-img.jpg')}}" class="img-fluid">
                        </div>
                        <div class="item">
                            <img src="{{asset('frontend-asset/images/pro-img.jpg')}}" class="img-fluid">
                        </div>
                        <div class="item">
                            <img src="{{asset('frontend-asset/images/pro-img.jpg')}}" class="img-fluid">
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-7 single-pro-ctnbox">
                <h2 class="mb-1">Product Name Here</h2>
                <ul class="pb-list">
                    <li class="pro-box-review">
                        <span class="fa fa-star rev-checked"></span>
                        <span class="fa fa-star rev-checked"></span>
                        <span class="fa fa-star rev-checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span><a href="#revBox">(10Reviews)</a></span>
                    <li>
                </ul>
                <p>Mauris congue turpis lacinia lorem efficitur venenatis eget in odio consectetur adipiscing elit.
                    Integer sed malesuada massa pellentesque tellus magna, iaculis ut tempor eget.</p>
                <h4>Size</h4>
                <hr>
                <ul class="size-list">
                    <li>100gm</li>
                    <li class="active">200gm</li>
                    <li>500gm</li>
                </ul>
                <hr>
                <p class="pro-box-price mb-0">₹255.00</p>
                <p class="vt-txt">(Including VAT)</p>

                <ul class="pro-qty-list">

                    <li class="ctrl">
                        <div class="ctrl__button ctrl__button--decrement">–</div>
                        <div class="ctrl__counter">
                            <input class="ctrl__counter-input" maxlength="10" type="text" value="0">
                            <div class="ctrl__counter-num">0</div>
                        </div>
                        <div class="ctrl__button ctrl__button--increment">+</div>
                    </li>
                    <li><a href="cart.html" class="banner-btn">Add To Bag</a></li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-between border-bottom mb-3 rev-box">
            <div class="col-lg-4 col-sm-6 col-7">
                <ul class="pb-list">
                    <li class="pro-box-review">
                    <li class="rev-txt">4.00</li>
                    <span class="fa fa-star rev-checked"></span>
                    <span class="fa fa-star rev-checked"></span>
                    <span class="fa fa-star rev-checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <li>
                </ul>
                <p class="revCap">Based on 10 reviews</p>
            </div>

            <div class="col-lg-3 col-sm-6 col-5 rev-brnBox">
                <a href="" class="sp-btn-snd" data-toggle="modal" data-target="#exampleModal-Rev">Write A Review</a>
            </div>

            <div class="modal fade" id="exampleModal-Rev" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Write A Review</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="review-form" method="post" action="" enctype="multipart/form-data" role="form">
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="rate">
                                                <input type="radio" id="star5" name="rate" value="5" />
                                                <label for="star5" title="text">5 stars</label>
                                                <input type="radio" id="star4" name="rate" value="4" />
                                                <label for="star4" title="text">4 stars</label>
                                                <input type="radio" id="star3" name="rate" value="3" />
                                                <label for="star3" title="text">3 stars</label>
                                                <input type="radio" id="star2" name="rate" value="2" />
                                                <label for="star2" title="text">2 stars</label>
                                                <input type="radio" id="star1" name="rate" value="1" />
                                                <label for="star1" title="text">1 star</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input id="form_name" type="text" name="full_name" class="form-control"
                                                    placeholder="Full Name" required="required"
                                                    data-error="Firstname is required.">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input id="form_email" type="email" name="email" class="form-control"
                                                    placeholder="Email" required="required"
                                                    data-error="Valid email is required.">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea id="form_message" name="message" class="form-control"
                                                    placeholder="Tell us your feedback about the product..." rows="4"
                                                    required="required"
                                                    data-error="Please,leave us a message."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="submit" class="banner-btn" value="Submit Now">
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <div id="revBox" class="row justify-content-between rev-box">
            <div class="col-lg-12 border-bottom">
                <ul class="pb-list">
                    <li class="pro-box-review">
                        <span class="fa fa-star rev-checked"></span>
                        <span class="fa fa-star rev-checked"></span>
                        <span class="fa fa-star rev-checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    <li>
                </ul>
                <p>Pellentesque tristique feugiat massa id efficitur. Aliquam pretium dui sit amet ipsum congue congue.
                    Vivamus auctor dignissim risus quis mattis. Phasellus bibendum est at enim semper, nec aliquet quam
                    pretium. Sed finibus enim ipsum, porttitor scelerisque tellus imperdiet sed. </p>
                <p class="rev-name"><b>John Thomas</b></p>
            </div>

            <div class="col-lg-12 border-bottom mt-3">
                <ul class="pb-list">
                    <li class="pro-box-review">
                        <span class="fa fa-star rev-checked"></span>
                        <span class="fa fa-star rev-checked"></span>
                        <span class="fa fa-star rev-checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    <li>
                </ul>
                <p>Pellentesque tristique feugiat massa id efficitur. Aliquam pretium dui sit amet ipsum congue congue.
                    Vivamus auctor dignissim risus quis mattis. Phasellus bibendum est at enim semper, nec aliquet quam
                    pretium. Sed finibus enim ipsum, porttitor scelerisque tellus imperdiet sed. </p>
                <p><b>John Thomas</b></p>
            </div>

            <div class="col-lg-12 border-bottom mt-3">
                <ul class="pb-list">
                    <li class="pro-box-review">
                        <span class="fa fa-star rev-checked"></span>
                        <span class="fa fa-star rev-checked"></span>
                        <span class="fa fa-star rev-checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    <li>
                </ul>
                <p>Pellentesque tristique feugiat massa id efficitur. Aliquam pretium dui sit amet ipsum congue congue.
                    Vivamus auctor dignissim risus quis mattis. Phasellus bibendum est at enim semper, nec aliquet quam
                    pretium. Sed finibus enim ipsum, porttitor scelerisque tellus imperdiet sed. </p>
                <p><b>John Thomas</b></p>
            </div>

            <div class="col-lg-12 mt-3">
                <ul class="pb-list">
                    <li class="pro-box-review">
                        <span class="fa fa-star rev-checked"></span>
                        <span class="fa fa-star rev-checked"></span>
                        <span class="fa fa-star rev-checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    <li>
                </ul>
                <p>Pellentesque tristique feugiat massa id efficitur. Aliquam pretium dui sit amet ipsum congue congue.
                    Vivamus auctor dignissim risus quis mattis. Phasellus bibendum est at enim semper, nec aliquet quam
                    pretium. Sed finibus enim ipsum, porttitor scelerisque tellus imperdiet sed. </p>
                <p><b>John Thomas</b></p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12 mb-3">
                <h2>Related Products</h2>
            </div>
            <div class="col-lg-12">
                <div id="demo-pranab">
                    <div id="owl-related-product" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="product-box border-box mb-4">
                                <div class="product-box-img">
                                    <img src="{{asset('frontend-asset/images/pro-img.jpg')}}" class="img-fluid">
                                </div>
                                <div class="product-box-ctn">
                                    <h4>Jaggery Powder</h4>
                                    <p class="pro-sort-desc">Our organic food products are certified organic by
                                        recognized certification agencies.</p>
                                    <ul class="pb-list">
                                        <li class="pro-box-review">
                                            <span class="fa fa-star rev-checked"></span>
                                            <span class="fa fa-star rev-checked"></span>
                                            <span class="fa fa-star rev-checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span><a href="">10Reviews</a></span>
                                        <li>
                                    </ul>
                                    <p class="pro-box-price">₹90.00</p>
                                    <a href="single-porduct.html" class="sp-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-box border-box mb-4">
                                <div class="product-box-img">
                                    <img src="{{asset('frontend-asset/images/pro-img.jpg')}}" class="img-fluid">
                                </div>
                                <div class="product-box-ctn">
                                    <h4>Jaggery Powder</h4>
                                    <p class="pro-sort-desc">Our organic food products are certified organic by
                                        recognized certification agencies.</p>
                                    <ul class="pb-list">
                                        <li class="pro-box-review">
                                            <span class="fa fa-star rev-checked"></span>
                                            <span class="fa fa-star rev-checked"></span>
                                            <span class="fa fa-star rev-checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span><a href="">10Reviews</a></span>
                                        <li>
                                    </ul>
                                    <p class="pro-box-price">₹90.00</p>
                                    <a href="single-porduct.html" class="sp-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-box border-box mb-4">
                                <div class="product-box-img">
                                    <img src="{{asset('frontend-asset/images/pro-img.jpg')}}" class="img-fluid">
                                </div>
                                <div class="product-box-ctn">
                                    <h4>Jaggery Powder</h4>
                                    <p class="pro-sort-desc">Our organic food products are certified organic by
                                        recognized certification agencies.</p>
                                    <ul class="pb-list">
                                        <li class="pro-box-review">
                                            <span class="fa fa-star rev-checked"></span>
                                            <span class="fa fa-star rev-checked"></span>
                                            <span class="fa fa-star rev-checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span><a href="">10Reviews</a></span>
                                        <li>
                                    </ul>
                                    <p class="pro-box-price">₹90.00</p>
                                    <a href="single-porduct.html" class="sp-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-box border-box mb-4">
                                <div class="product-box-img">
                                    <img src="{{asset('frontend-asset/images/pro-img.jpg')}}" class="img-fluid">
                                </div>
                                <div class="product-box-ctn">
                                    <h4>Jaggery Powder</h4>
                                    <p class="pro-sort-desc">Our organic food products are certified organic by
                                        recognized certification agencies.</p>
                                    <ul class="pb-list">
                                        <li class="pro-box-review">
                                            <span class="fa fa-star rev-checked"></span>
                                            <span class="fa fa-star rev-checked"></span>
                                            <span class="fa fa-star rev-checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span><a href="">10Reviews</a></span>
                                        <li>
                                    </ul>
                                    <p class="pro-box-price">₹90.00</p>
                                    <a href="single-porduct.html" class="sp-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-box border-box mb-4">
                                <div class="product-box-img">
                                    <img src="{{asset('frontend-asset/images/pro-img.jpg')}}" class="img-fluid">
                                </div>
                                <div class="product-box-ctn">
                                    <h4>Jaggery Powder</h4>
                                    <p class="pro-sort-desc">Our organic food products are certified organic by
                                        recognized certification agencies.</p>
                                    <ul class="pb-list">
                                        <li class="pro-box-review">
                                            <span class="fa fa-star rev-checked"></span>
                                            <span class="fa fa-star rev-checked"></span>
                                            <span class="fa fa-star rev-checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span><a href="">10Reviews</a></span>
                                        <li>
                                    </ul>
                                    <p class="pro-box-price">₹90.00</p>
                                    <a href="single-porduct.html" class="sp-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-box border-box mb-4">
                                <div class="product-box-img">
                                    <img src="{{asset('frontend-asset/images/pro-img.jpg')}}" class="img-fluid">
                                </div>
                                <div class="product-box-ctn">
                                    <h4>Jaggery Powder</h4>
                                    <p class="pro-sort-desc">Our organic food products are certified organic by
                                        recognized certification agencies.</p>
                                    <ul class="pb-list">
                                        <li class="pro-box-review">
                                            <span class="fa fa-star rev-checked"></span>
                                            <span class="fa fa-star rev-checked"></span>
                                            <span class="fa fa-star rev-checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span><a href="">10Reviews</a></span>
                                        <li>
                                    </ul>
                                    <p class="pro-box-price">₹90.00</p>
                                    <a href="single-porduct.html" class="sp-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>


    </div>
</section>


<section id="line2-section"> </section>

<script src="js/script.js" defer></script>
<script src="owl-carousel/js/owl.carousel.js"></script>
<!-- End Owl pranab-->
<script>
    $(document).ready(function () {
        var owl = $('#owl-single-product');
        owl.owlCarousel({
            items: 1,
            loop: true,
            nav: true,
            margin: 0,
            dots: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
        $('.play').on('click', function () {
            owl.trigger('play.owl.autoplay', [2000])
        })
        $('.stop').on('click', function () {
            owl.trigger('stop.owl.autoplay')
        })
    })
</script>
<script>
    $(document).ready(function () {
        var owl = $('#owl-related-product');
        owl.owlCarousel({
            items: 4,
            loop: true,
            nav: true,
            margin: 30,
            dots: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        });
        $('.play').on('click', function () {
            owl.trigger('play.owl.autoplay', [2000])
        })
        $('.stop').on('click', function () {
            owl.trigger('stop.owl.autoplay')
        })
    })
</script>
<script>
        (function () {
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

                this.decrement = function () {
                    var counter = _this.getCounter();
                    var nextCounter = (_this.counter > 0) ? --counter : counter;
                    _this.setCounter(nextCounter);
                };

                this.increment = function () {
                    var counter = _this.getCounter();
                    var nextCounter = (counter < 9999999999) ? ++counter : counter;
                    _this.setCounter(nextCounter);
                };

                this.getCounter = function () {
                    return _this.counter;
                };

                this.setCounter = function (nextCounter) {
                    _this.counter = nextCounter;
                };

                this.debounce = function (callback) {
                    setTimeout(callback, 100);
                };

                this.render = function (hideClassName, visibleClassName) {
                    _this.els.counter.num.classList.add(hideClassName);

                    setTimeout(function () {
                        _this.els.counter.num.innerText = _this.getCounter();
                        _this.els.counter.input.value = _this.getCounter();
                        _this.els.counter.num.classList.add(visibleClassName);
                    }, 100);

                    setTimeout(function () {
                        _this.els.counter.num.classList.remove(hideClassName);
                        _this.els.counter.num.classList.remove(visibleClassName);
                    }, 200);
                };

                this.ready = function () {
                    _this.els.decrement.addEventListener('click', function () {
                        _this.debounce(function () {
                            _this.decrement();
                            _this.render('is-decrement-hide', 'is-decrement-visible');
                        });
                    });

                    _this.els.increment.addEventListener('click', function () {
                        _this.debounce(function () {
                            _this.increment();
                            _this.render('is-increment-hide', 'is-increment-visible');
                        });
                    });

                    _this.els.counter.input.addEventListener('input', function (e) {
                        var parseValue = parseInt(e.target.value);
                        if (!isNaN(parseValue) && parseValue >= 0) {
                            _this.setCounter(parseValue);
                            _this.render();
                        }
                    });

                    _this.els.counter.input.addEventListener('focus', function (e) {
                        _this.els.counter.container.classList.add('is-input');
                    });

                    _this.els.counter.input.addEventListener('blur', function (e) {
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