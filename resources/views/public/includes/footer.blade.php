<!--================Footer Area =================-->
<footer class="footer_area">
    <div class="footer_widgets_area">
        <div class="container">
            <div class="f_widgets_inner row">
                <div class="col-lg-3 col-md-6">
                    <aside class="f_widget subscribe_widget">
                        <div class="f_w_title">
                            <h3>Our Newsletter</h3>
                        </div>
                        <p>Subscribe to our mailing list to get the updates to your email inbox.</p>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="E-mail" aria-label="E-mail">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary submit_btn" type="button">Subscribe</button>
                            </span>
                        </div>
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-3 col-md-6">
                    <aside class="f_widget twitter_widget">
                        <div class="f_w_title">
                            <h3>Latest Posts</h3>
                        </div>
                        <div class="tweets_feed">
                            
                        </div>
                    </aside>
                </div>
                <div class="col-lg-3 col-md-6">
                    <aside class="f_widget categories_widget">
                        <div class="f_w_title">
                            <h3>Link Categories</h3>
                        </div>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Agency</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Studio</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Studio</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Blogs</a></li>
                        </ul>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Home</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>About</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Services</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Privacy</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-3 col-md-6">
                    <aside class="f_widget contact_widget">
                        <div class="f_w_title">
                            <h3>Contact Us</h3>
                        </div>
                        <a href="#">27 (71) 234-5678</a>
                        <a href="#">info@proofdigitalmediagroup.co.za</a>
                        <p>123 Maunde Street <br />Secunda, SA</p>
                        <h6>Open hours: 8.00-18.00 Mon-Fri</h6>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <div class="copy_right_area">
        <div class="container">
            <div class="float-md-left">
                <h5>
                    Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script>
                    All rights reserved | Developed with
                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                    by <a href="https://facebook.com/octsSA" target="_blank">OCTS</a>
                </h5>
            </div>
            <div class="float-md-right">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Disclaimer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Advertisement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--================End Footer Area =================-->





<!-- FOOTER -->
{{-- <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h4 class="h6">About Us</h4>
                <p>
                    Pellentesque habitant morbi tristique senectus et netus et
                    malesuada fames ac turpis egestas.
                </p>
                <hr>

                <h4 class="h6">Join Our Monthly Newsletter</h4>
                <form action="{{ route('subscriber.store') }}" method="post">
                    @csrf
                    <div class="input-group">
                        <input type="email" name="email" class="form-control" placeholder="Subscribe.." />
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary"><i class="fa fa-paper-plane"></i></button>
                        </div>
                    </div>
                </form>
                <hr class="d-block d-lg-none">
            </div>

            <div class="col-lg-3">
                <h4 class="h6">Blog</h4>
                {{--@if (count(mainPosts()) > 0)--}}{{--
                    <ul class="list-unstyled footer-blog-list">
                        {{--@foreach (mainPosts() as $key => $value)--}}{{--
                            <li class="d-flex align-items-center">
                                <div class="image">
                                    <img src="{{ asset('images/blog/small/'{{--.$value->image--}}{{--) }}" alt="{{-- $value->title --}}{{--" class="img-fluid">
                                </div>
                                <div class="text">
                                    <h5 class="mb-0">
                                        {{--<a href="{{ route('blog.post', $value->slug) }}">{{ $value->title }}</a>--}}{{--
                                    </h5>
                                </div>
                            </li>
                        {{--@endforeach--}}{{--
                    </ul>
                {{--@endif--}}{{--
                <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-3">
                <h4 class="h6">Contact</h4>
                <p class="text-uppercase">
                    <strong>{{config('app.name')}} (Pty) Ltd.</strong><br>
                    13/25 New Avenue <br>
                    Suburb <br>
                    45Y 73J <br>
                    Mpumalanga <br>
                    <strong>South Africa</strong>
                </p>
                <a href="{{route('contact')}}" class="btn btn-template-main">Go to contact page</a>
                <hr class="d-block d-lg-none">
            </div>

            <div class="col-lg-3">
                <h4 class="h4">Social</h4>
                <ul class="social d-flex flex-row align-item-left">
                    <li>
                        <a href="#" style="background-color: #3a61c9">
                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" style="background-color: #41a1f6">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" style="background-color: #fb4343">
                            <i class="fab fa-google-plus" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" style="background-color: #8f6247">
                            <i class="fab fa-instagram" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyrights">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-center-md">
                    <p>&copy; {{date('Y')}}. {{ config('app.name') }}</p>
                </div>
                <div class="col-lg-8 text-right text-center-md">
                    <p>Developed by <a href="#">OCTS </a></p>
                </div>
            </div>
        </div>
    </div>
</footer> --}}
