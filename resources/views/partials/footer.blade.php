<div class="partner-logo">
    <div class="container">
        <h2 style="color: aqua; padding-bottom: 5px">Thương Hiệu Sản Phẩm</h2>
        <div class="logo-carousel owl-carousel">
            @foreach ($brands as $brand)
            <div class="logo-item">
                <div class="tablecell-inner">
                    <a href="{{ route('brands.show', $brand->STT) }}"><img
                            src="data:image/jpg;base64, {{$brand->image}}"
                            style="width:200px; height:200px; text-align:center" alt="{{$brand->brand_name}}"></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Partner Logo Section End -->

<!-- Footer Section Begin -->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-left">
                    <div class="footer-logo">
                        <a href="#"><img src="/front_end/img/footer-logo.png" alt=""></a>
                    </div>
                    <ul>
                        <li>Address: 99 Hùng Vương - Huế</li>
                        <li>Phone: +65 11.188.888</li>
                        <li>Email: nhatlinh.cosmestic@gmail.com</li>
                    </ul>
                    <div class="footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1">
                <div class="footer-widget">
                    <h5>Thông Tin Liên Hệ</h5>
                    <ul>
                        <li><a href="{{ route('cart.view') }}">Giỏ Hàng</a></li>
                        <li><a href="/">Cửa Hàng</a></li>
                        <li><a href="{{ route('contact') }}">Liên Hệ</a></li>
                        <li><a href="/login">Tài Khoản</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer-widget">
                    {{-- <h5>My Account</h5>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="#">Shopping Cart</a></li>
                    <li><a href="#">Shop</a></li>
                    </ul> --}}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="newslatter-item">
                    <h5>Gửi mail cho chúng tôi</h5>
                    <p>Gửi mail cho chúng tôi nếu bạn cần hỗ trợ.</p>
                    <form action="#" class="subscribe-form">
                        <input type="text" placeholder="Enter Your Mail">
                        <button type="button">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-reserved">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        {{-- Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> --}}
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    <div class="payment-pic">
                        <img src="/front_end/img/payment-method.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="/front_end/js/jquery-3.3.1.min.js"></script>
<script src="/front_end/js/bootstrap.min.js"></script>
<script src="/front_end/js/jquery-ui.min.js"></script>
<script src="/front_end/js/jquery.countdown.min.js"></script>
<script src="/front_end/js/jquery.nice-select.min.js"></script>
<script src="/front_end/js/jquery.zoom.min.js"></script>
<script src="/front_end/js/jquery.dd.min.js"></script>
<script src="/front_end/js/jquery.slicknav.js"></script>
<script src="/front_end/js/owl.carousel.min.js"></script>
<script src="/front_end/js/main.js"></script>

</body>

</html>
