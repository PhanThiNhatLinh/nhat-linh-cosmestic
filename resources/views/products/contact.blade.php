@extends('layouts.web')

@section('title', 'Show Products')

@section('content')

<!-- Begin Page Content -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                    <span>Liên Hệ</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Map Section Begin -->
<div class="map spad">
    <div class="container">
        <div class="map-inner">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.961569181285!2d108.21638681433663!3d16.0674839437537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142183442733975%3A0xfad3b5469bc151a4!2zOTkgSMO5bmcgVsawxqFuZywgSOG6o2kgQ2jDonUgMSwgSOG6o2kgQ2jDonUsIMSQw6AgTuG6tW5nIDU1MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1587794973450!5m2!1svi!2s"
                width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0">

            </iframe>
            <div class="icon">
                <i class="fa fa-map-marker"></i>
            </div>
        </div>
    </div>
</div>
<!-- Map Section Begin -->

<!-- Contact Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-title">
                    <h4>Liên Hệ Với Chúng Tôi</h4>
                    <p>Cửa hàng Mỹ Phẩm Cao Cấp Nhật Linh - Cosmetic</p>
                </div>
                <div class="contact-widget">
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-location-pin"></i>
                        </div>
                        <div class="ci-text">
                            <span>Địa chỉ:</span>
                            <p>99 Hùng Vương - Đà Nẵng</p>
                            <p>99 Hùng Vương - Huế</p>
                            <p>99 Hùng Vương - Đông Hà - Quảng Trị</p>
                        </div>
                    </div>
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-mobile"></i>
                        </div>
                        <div class="ci-text">
                            <span>Điện Thoại:</span>
                            <p>+65 11.188.888</p>
                        </div>
                    </div>
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-email"></i>
                        </div>
                        <div class="ci-text">
                            <span>Email:</span>
                            <p>nhatlinh.cosmetic@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="contact-form">
                    <div class="leave-comment">
                        <h4>Để lại bình luận </h4>
                        <p>Chúng tôi sẽ trả lời bạn ngay khi có thể.</p>
                        <form action="#" class="comment-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Your name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Your email">
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Your message"></textarea>
                                    <button type="submit" class="site-btn">Send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
