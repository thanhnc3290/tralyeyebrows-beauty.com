<?php 
    $site_url   = '';
    $site_title = 'Thẩm Mỹ Trà Ly';
    $site_desc  = 'Thẩm Mỹ Trà Ly';
    $hotline    = '0.222.888.3579';
    $address    = 'Số 1A ngõ 9 Nguyễn Tri Phương - Điện Biên Phủ - Ba Đình - Hà nội';

    $logo_image = './assets/images/logo.svg';
    $favicon_image = './assets/images/kn_favicon.ico';

    $banner_slider_pc_1 = './assets/images/banner_slider_pc_1.jpg';
    $banner_slider_pc_2 = './assets/images/banner_slider_pc_1.jpg';
    $banner_slider_pc_3 = './assets/images/banner_slider_pc_1.jpg';

    $banner_slider_mobile_1 = './assets/images/banner_slider_mobile_1.jpg';
    $banner_slider_mobile_2 = './assets/images/banner_slider_mobile_1.jpg';
    $banner_slider_mobile_3 = './assets/images/banner_slider_mobile_1.jpg';

    $social_image_link  = $banner_slider_pc_1;

    $banner_slider_page_6_pc_1 = './assets/images/page_6_slider_pc_1.jpg';
    $banner_slider_page_6_pc_2 = './assets/images/page_6_slider_pc_2.jpg';
    $banner_slider_page_6_pc_3 = './assets/images/page_6_slider_pc_3.jpg';
    $banner_slider_page_6_pc_4 = './assets/images/page_6_slider_pc_4.jpg';
    $banner_slider_page_6_pc_5 = './assets/images/page_6_slider_pc_5.jpg';

    $banner_slider_page_6_mobile_1 = './assets/images/page_6_slider_mobile_1.jpg';
    $banner_slider_page_6_mobile_2 = './assets/images/page_6_slider_mobile_2.jpg';
    $banner_slider_page_6_mobile_3 = './assets/images/page_6_slider_mobile_3.jpg';
    $banner_slider_page_6_mobile_4 = './assets/images/page_6_slider_mobile_4.jpg';
    $banner_slider_page_6_mobile_5 = './assets/images/page_6_slider_mobile_5.jpg';


?>
<!DOCTYPE html>
<html xmlns="http://www.w3c.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo $site_title ?></title>
    <meta name="Resource-type" content="Document">
    <meta property="og:description" content="<?php echo $site_desc ?>">
    <meta name="description" content="<?php echo $site_desc ?>">
    <meta property="og:image" content="<?php echo $banner_slider_pc_1 ?>">
    <meta name="viewport"
        content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <link type="image/x-icon" rel="shortcut icon" href="<?php echo $favicon_image ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./assets/css/style_pc.css"> -->
    <!-- <link rel="stylesheet" href="./assets/css/style_mobile.css"> -->
    <link id="thanh_nc_css" rel="stylesheet" href="./assets/css/style_pc.css">
    
    <meta name="robots" content="index,follow">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    </style>
</head>

<body data-rsssl="1" class="my_body">
    <header class="header_1_1_0">
        <div class="container">
            <div class="header_1_1_0__box">
                <div class="header_1_1_0__section">
                    <div class="header_1_1_0__logo">
                        <a href="#page1">
                            <img width="192" height="55" src="<?php echo $logo_image ?>"
                                alt="<?php echo $site_title ?>">
                        </a>
                    </div>
                    <div class="header_1_1_0__menu">
                        <img width="30" height="30" src="./assets/images/menu-m.svg" alt="">
                    </div>
                    <a class="header_1_1_0__call modal-btn" data-modal="modal-top">
                        <img width="36" height="36" src="./assets/images/call-m.svg" alt="">
                    </a>
                </div>
                <div class="header_1_1_0__section header_1_1_0__main">
                    <a href="#page1" class="header_1_1_0__logo2">
                        <img width="161" height="46" src="<?php echo $logo_image ?>" alt="<?php echo $site_title ?>">
                    </a>
                    <ul class="header_1_1_0__list">
                        <li>
                            <a href="#page1" class="header_1_1_0__item">Trang chủ</a>
                        </li>
                        <li>
                            <a href="#page3" class="header_1_1_0__item">Ưu Đãi</a>
                        </li>
                        <li>
                            <a href="#page5" class="header_1_1_0__item">Hình ảnh</a>
                        </li>

                        <li>
                            <a href="#page7" class="header_1_1_0__item active">Bác sĩ</a>
                        </li>
                    </ul>
                    <div class="header_1_1_0__phone call-btn">
                        <img width="30" height="22" src="./assets/images/call.svg" alt="">
                        <a href="tel:<?php echo $hotline ?>"> <?php echo $hotline ?></a>
                    </div>
                    <div class="header_1_1_0__regist reg-btn">
                        <img width="29" height="18" src="./assets/images/uudai.svg" alt="">
                        <a>Nhận ưu đãi</a>
                    </div>
                </div>
                <div class="header_1_1_0__bg"></div>
            </div>
        </div>
    </header>


    <section id="section_1"></section>

    

    <section id="page3" class="screen3 loaded">
        <div class="container">
            <div class="screen3__des fadeInDown loaded">
                <img width="1140" height="215" class="" data-src="./assets/images/page3-tt.png" alt="" src="./assets/images/page3-tt.png">
            </div>
            <div class="screen3_box">
                <a class="screen3__item modal-btn loaded" data-modal="more1">
                    <img width="262" height="223" class=""
                        data-src="./assets/images/page4-pic1.jpg"
                        alt="CẮT MÍ"
                        src="./assets/images/page4-pic1.jpg">
                    <p><span>Chi Tiết</span></p>
                </a>
                <a class="screen3__item modal-btn loaded" data-modal="more1">
                    <img width="262" height="223" class=""
                        data-src="./assets/images/page4-pic2.jpg"
                        alt="NÂNG MŨI"
                        src="./assets/images/page4-pic2.jpg">
                    <p><span>Chi Tiết</span></p>
                </a>
                <a class="screen3__item modal-btn loaded" data-modal="more1">
                    <img width="262" height="223" class=""
                        data-src="./assets/images/page4-pic3.jpg"
                        alt=" CẰM, HẰM MẶT"
                        src="./assets/images/page4-pic3.jpg">
                    <p><span>Chi Tiết</span></p>
                </a>
                <a class="screen3__item modal-btn loaded" data-modal="more1">
                    <img width="262" height="223" class=""
                        data-src="./assets/images/page4-pic4.jpg"
                        alt="TẠO HÌNH MÔI"
                        src="./assets/images/page4-pic4.jpg">
                    <p><span>Chi Tiết</span></p>
                </a>
                <a class="screen3__item modal-btn loaded" data-modal="more1">
                    <img width="262" height="223" class=""
                        data-src="./assets/images/page4-pic5.jpg"
                        alt="GIẢM MỠ"
                        src="./assets/images/page4-pic5.jpg">
                    <p><span>Chi Tiết</span></p>
                </a>
                <a class="screen3__item modal-btn loaded" data-modal="more1">
                    <img width="262" height="223" class=""
                        data-src="./assets/images/page4-pic6.jpg"
                        alt="THẨM MỸ VÒNG 1"
                        src="./assets/images/page4-pic6.jpg">
                    <p><span>Chi Tiết</span></p>
                </a>
            </div>
            <div class="screen3__discount">
                <button class="button-71 reg-btn">Nhận ưu đãi</button>
            </div>
        </div>
        <div class="infoModal">
            <div class="modal" id="more1">
                <div class="modal-bg"></div>
                <div class="modal-box animate-pop">
                    <div class="modal-header">
                        <div class="modal-close">×</div>
                    </div>
                    <div class="modal-body">
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="page11" class="screen11">
        <div class="container">
            <div class="screen11__box">
                <div class="screen11__detail fadeInRight loaded">
                    <div class="screen11__item modal-btn" data-modal="more3">
                        <div class="screen11__text">
                            <p>cấy mỡ nanofat</p>
                            -30%
                        </div>
                        <div class="screen11__des">
                            <span>Chi <br> tiết</span>
                        </div>
                    </div>
                    <div class="screen11__item screen11__item2 modal-btn" data-modal="more3">
                        <div class="screen11__hot">
                            <img width="67" height="54" class="" data-src="./assets/images/hot.png" alt="" src="./assets/images/hot.png">
                        </div>
                        <div class="screen11__text">
                            <p>trẻ hóa mi young</p>
                            -30%
                        </div>
                        <div class="screen11__des">
                            <span>Chi <br> tiết</span>
                        </div>
                    </div>
                    <div class="screen11__item modal-btn" data-modal="more3">
                        <div class="screen11__text">
                            <p>căng chỉ mi young</p>
                            -25%
                        </div>
                        <div class="screen11__des">
                            <span>Chi <br> tiết</span>
                        </div>
                    </div>
                    <div class="screen11__item modal-btn" data-modal="more3">
                        <div class="screen11__text">
                            <p>căng da 3d</p>
                            -20%
                        </div>
                        <div class="screen11__des">
                            <span>Chi <br> tiết</span>
                        </div>
                    </div>
                    <div class="screen11__item modal-btn" data-modal="more3">
                        <div class="screen11__text">
                            <p>Thermage FLX</p>
                            -50%
                        </div>
                        <div class="screen11__des">
                            <span>Chi <br> tiết</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="infoModal">
                <div class="modal" id="more3">
                    <div class="modal-bg"></div>
                    <div class="modal-box animate-pop">
                        <div class="modal-header">
                            <div class="modal-close">×</div>
                        </div>
                        <div class="modal-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="page_11_css"></div>

    <div id="page4"></div>
    <div id="page_4_css"></div>

    <section id="page_4_content" class="screen10 loaded">
        
    </section>
    <div id="page_4_content_css"></div>


    <section id="page6" class="screen6">
        <div class="container">
            <div class="screen6__box">
                <div class="tns-outer" id="tns1-ow">
                    <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">5</span> of 5</div>
                    <div id="tns1-mw" class="tns-ovh tns-ah">
                        <div class="tns-inner" id="tns1-iw">
                            <div class="screen6__slider  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" id="tns1" style="transform: translate3d(-80%, 0px, 0px);">
                                <div class="screen6__item tns-item" id="tns1-item0" aria-hidden="true" tabindex="-1">
                                    <div class="screen6__pic loaded">
                                        <img id="page_6_slider_1" width="513" height="467" src="<?php echo $banner_slider_page_6_pc_1 ?>" alt="">
                                    </div>
                                </div>
                                
                                <div class="screen6__item tns-item" id="tns1-item1" aria-hidden="true" tabindex="-1">
                                    <div class="screen6__pic loaded">
                                        <img id="page_6_slider_2" width="513" height="467" src="<?php echo $banner_slider_page_6_pc_2 ?>" alt="">
                                    </div>
                                </div>
                                
                                <div class="screen6__item tns-item" id="tns1-item2" aria-hidden="true" tabindex="-1">
                                    <div class="screen6__pic loaded">
                                        <img id="page_6_slider_3" width="513" height="467" src="<?php echo $banner_slider_page_6_pc_3 ?>" alt="">
                                    </div>
                                </div>
                                
                                <div class="screen6__item tns-item" id="tns1-item3" aria-hidden="true" tabindex="-1">
                                    <div class="screen6__pic loaded">
                                        <img id="page_6_slider_4" width="513" height="467" src="<?php echo $banner_slider_page_6_pc_4 ?>" alt="">
                                    </div>
                                </div>
                                
                                <div class="screen6__item tns-item tns-slide-active" id="tns1-item4">
                                    <div class="screen6__pic loaded">
                                        <img id="page_6_slider_5" width="513" height="467" src="<?php echo $banner_slider_page_6_pc_5 ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tns-controls" aria-label="Carousel Navigation" tabindex="0">
                        <button type="button" data-controls="prev" tabindex="-1" aria-controls="tns1">❮</button>
                        <button type="button" data-controls="next" tabindex="-1" aria-controls="tns1" disabled="">❯</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="page7" class="screen7 loaded">
        <div class="container">
        </div>
    </section>
    <div id="page_7_css"></div>

    <section id="page5"></section>
    <div id="page_5_css"></div>

    <section id="page8">
        <div class="container">
            <div class="screen8__box load">
                <div class="screen8__detail">
                    <div class="screen8__form">
                        <p>Để lại thông tin nhận tư vấn ngay</p>
                        <form method="post" action="form.php" class="screen8__bot">
                            <div class="screen8__input">
                                <input name="input_name" type="text" id="formName" placeholder="Họ tên: ">
                                <input name="input_phone" type="text" id="formPhone" required="" placeholder="Số điện thoại: ">
                                <!-- <div class="input time" style="display:block"> Dịch vụ bạn quan tâm :
                                            <select id="formService" name="formService" required="">
                                                <option value="">Bấm chọn</option>
                                                <option value="nâng mũi">Nâng mũi</option>
                                                <option value="cắt mí">Cắt mí</option>
                                                <option value="nâng vòng 1">Nâng vòng 1</option>
                                                <option value="Hàm mặt">Hàm mặt</option>
                                                <option value="Trẻ hóa">Trẻ hóa</option>
                                                <option value="Điều trị da">Điều trị da</option>
                                                <option value="hút mỡ">Hút mỡ</option>
                                                <option value="Khác">Khác</option>
                                            </select>
                                    </div> -->
                            </div>
                            <i>(Thông tin sẽ được bảo mật tuyệt đối)</i>
                            <div class="screen8__submit">
                                <input class=" target fbt bmk submit_s button-71" type="submit" value="TƯ VẤN NGAY">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="screen8__contact">
                    <div class="screen8__item">
                        <div class="screen8__content">
                            <div class="screen8__icon">
                                <img width="64" height="55" class="lazy" data-src="./assets/images/ic.png" alt="">
                            </div>
                            <div class="screen8__text"> Liên hệ Hotline <br> <b><?php echo $hotline; ?></b></div>
                        </div>
                        <hr>
                        <div class="screen8__des">
                            Giải đáp miễn phí mọi thắc mắc của <br> khách hàng 24/7
                        </div>
                    </div>
                    
                    <div class="screen8__item">
                        <div class="screen8__content">
                            <div class="screen8__icon">
                                <img width="64" height="55" class="lazy" data-src="./assets/images/icon.png" alt="">
                            </div>
                            <div class="screen8__text">Đặt lịch tư vấn trực tiếp <br> <b>MIỄN PHÍ 100%</b> </div>
                        </div>
                        <hr>
                        <div class="screen8__des">
                            Cùng các chuyên gia thẩm mỹ <br> hàng đầu
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="page_8_css"></div>



    <div class="popup_person_1_0_0" id="popup_person_1_0_0" style="opacity: 0;">
        <div class="popup_person_1_0_0__pic ">
            <img id="pop_img" src="./assets/images/clone-images/mai-nguyen.jpg" alt="Mai Nguyễn">
        </div>
        <div class="popup_person_1_0_0__box ">
            <div class="popup_person_1_0_0__name" id="pop_name">Mai Nguyễn</div>
            <div class="popup_person_1_0_0__ct" id="pop_ct">Đã đăng ký tư vấn</div>
            <div class="popup_person_1_0_0__time" id="pop_time">19 phút trước</div>
        </div>
    </div>

    <div class="regft">
        <a href="tel:<?php echo $hotline ?>"><img src="./assets/images/calsdl.png" alt=""> Gọi tư vấn</a>
        <a class="reg-btn"><img src="./assets/images/flash.svg" alt=""> Nhận ưu đãi </a>
    </div>
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="./assets/js/lib.min.js"></script>
    <script src="./assets/js/tiny-slider.min.js"></script>
    
    <div class="footer_kn_1_0_0__note">
        <div class="container">
            <span>Kết quả phụ thuộc vào cơ địa mỗi người(*)</span>
        </div>
    </div>
    <footer class="footer_kn_1_0_0">
        <div class="container">
            <div class="footer_kn_1_0_0__wrapper">
                <div class="footer_kn_1_0_0__left">
                    <a href="<?php echo $site_url ?>">
                        <img width="288px" height="90px" src="./assets/images/logoft2.svg" alt="logo">
                    </a>
                </div>
                <div class="footer_kn_1_0_0__right">
                    <div class="footer_kn_1_0_0__info">
                        <span class="footer_kn_1_0_0__title">Hà Nội</span>
                        <div class="footer_kn_1_0_0__box">
                            <span class="footer_kn_1_0_0__text address">
                                <img width="15px" height="15px" src="./assets/images/location.svg" alt="">
                                <a href="#" rel="nofollow" target="_blank">
                                    <?php echo $address; ?>
                                </a>
                            </span>
                            <span class="footer_kn_1_0_0__text">
                                <img width="15px" height="15px" src="./assets/images/phone.svg" alt="">
                                <a rel="nofollow" href="tel:<?php echo $hotline ?>"><?php echo $hotline ?></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <style>
        .footer_5_0_0,
        .refuse,
        .foot {
            display: none
        }

        .footer_kn_1_0_0 {
            background: url(https://benhvienthammykangnam.com.vn/css/footer_kn_1_0_0/images/ft-bg.jpg) 0 center;
            padding: 40px 0
        }

        .footer_kn_1_0_0__note {
            width: 100%;
            position: fixed;
            bottom: 0;
            background: rgba(0, 87, 134, 0.6);
            padding: 5px 0;
            color: #fff;
            z-index: 3
        }

        .footer_kn_1_0_0 span,
        .footer_kn_1_0_0 a {
            color: #fff;
            font-size: 14px
        }

        .footer_kn_1_0_0__wrapper {
            display: flex;
            width: 100%;
            margin-bottom: 30px;
            gap: 10%
        }

        .footer_kn_1_0_0__left {
            display: flex;
            flex-direction: column;
            width: 20%;
            gap: 20px
        }

        .footer_kn_1_0_0__left a {
            display: block
        }

        .footer_kn_1_0_0__left a img {
            width: 100%;
            display: block;
            height: auto
        }

        .footer_kn_1_0_0__bct {
            width: 80%
        }

        .footer_kn_1_0_0__right {
            display: flex;
            gap: 40px;
            width: 80%
        }

        .footer_kn_1_0_0__info {
            width: 40%
        }

        .footer_kn_1_0_0__title {
            border-bottom: 1px solid #0072e6;
            padding: 0 0 10px;
            text-transform: uppercase;
            font-weight: 600;
            font-size: 16px;
            display: block
        }

        .footer_kn_1_0_0__box {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            gap: 15px
        }

        .footer_kn_1_0_0__text {
            display: flex
        }

        .footer_kn_1_0_0__text img {
            margin-right: 8px;
            margin-top: 3px
        }

        .footer_kn_1_0_0__text.address a {
            color: #F26649
        }

        .footer_kn_1_0_0__bottom {
            margin-top: 10px;
            text-align: center
        }

        .footer_kn_1_0_0__bottom a {
            text-transform: uppercase;
            margin-bottom: 10px;
            display: block;
            font-size: 13px
        }

        .footer_kn_1_0_0__bottom p {
            display: inline;
            color: #f69679;
            font-size: 14px
        }

        .footer_kn_1_0_0__bottom span {
            display: block;
            font-size: 13px
        }

        .footer_kn_1_0_0__policy {
            margin-top: 10px;
            text-decoration: underline
        }

        .footer_kn_1_0_0__policy a {
            display: inline;
            text-transform: none
        }

        @media (max-width: 912px) {
            .footer_kn_1_0_0__left {
                width: 40%
            }
        }

        @media (max-width: 767px) {
            .footer_kn_1_0_0__text.address a {
                font-size: 13px
            }

            .footer_kn_1_0_0__note {
                position: unset;
                background: #033c9a;
                font-size: 13px
            }

            .footer_kn_1_0_0 {
                padding-bottom: 60px
            }

            .footer_kn_1_0_0__wrapper {
                flex-wrap: wrap
            }

            .footer_kn_1_0_0__left {
                width: 50%;
                margin: 0 auto;
                gap: 10
            }

            .footer_kn_1_0_0__bct {
                margin: 0 auto;
                width: 110px
            }

            .footer_kn_1_0_0__right {
                margin-top: 20px;
                flex-wrap: wrap;
                gap: 20px;
                width: 100%
            }

            .footer_kn_1_0_0__info {
                width: 100%
            }

            .footer_kn_1_0_0__box {
                margin-top: 10px;
                gap: 3px
            }

            .footer_kn_1_0_0__bottom a,
            .footer_kn_1_0_0__bottom p,
            .footer_kn_1_0_0__bottom span {
                font-size: 12px
            }

            .footer_kn_1_0_0__text {
                font-size: 12px
            }
        }

        @media (max-width: 320px) {
            .footer_kn_1_0_0__left {
                width: 80%
            }
        }
    </style>

    
</body>

</html>

    <script>
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            
            //xử lý slider
            document.getElementById("section_1").innerHTML =`
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">

                        <div class="item active">
                            <img src="<?php echo $banner_slider_mobile_1 ?>" alt="Los Angeles" style="width:100%;">
                        </div>

                        <div class="item">
                            <img src="<?php echo $banner_slider_mobile_2 ?>" alt="Chicago" style="width:100%;">
                        </div>

                        <div class="item">
                            <img src="<?php echo $banner_slider_mobile_3 ?>" alt="New York" style="width:100%;">
                        </div>

                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            `;
            document.getElementById("page_6_slider_1").setAttribute('src','<?php echo $banner_slider_page_6_mobile_1 ?>');
            document.getElementById("page_6_slider_2").setAttribute('src','<?php echo $banner_slider_page_6_mobile_2 ?>');
            document.getElementById("page_6_slider_3").setAttribute('src','<?php echo $banner_slider_page_6_mobile_3 ?>');
            document.getElementById("page_6_slider_4").setAttribute('src','<?php echo $banner_slider_page_6_mobile_4 ?>');
            document.getElementById("page_6_slider_5").setAttribute('src','<?php echo $banner_slider_page_6_mobile_5 ?>');

            

            
            document.getElementById("page_11_css").innerHTML = `
                <style>
                    .my_body, .header_1_1_0, .footer_kn_1_0_0__note{max-width: 640px!important;margin: 0 auto;}
                    .screen11 {
                        background: url(./assets/images/page11-mobile-bg.jpg) center 0 no-repeat;
                        min-height: 786px;
                        display: flex;
                        flex-direction: column-reverse;
                        background-color: #d3dce3;
                    }
                    .screen11__detail {
                        padding: 10px 15px;
                    }
                    .screen11__item {
                        margin-bottom: 13px;
                        background: linear-gradient(to right, #d94500 0%, #fe4f16 25%, #ff681c 51%, #ff681e 100%);
                        border-radius: 50px;
                        border: 1px solid #8cc2ff;
                        color: #fff;
                        display: flex;
                        justify-content: space-between;
                        padding: 5px;
                        width: 23rem;
                        margin-left: -13rem;
                    }
                    .screen11__text {
                        font-size: 24px;
                        text-transform: uppercase;
                        text-align: center;
                        font-weight: bold;
                        width: 70%;
                        line-height: 28px;
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        margin-left: 10px;
                        transition: all .2s linear;
                    }
                    .screen11__des {
                        width: 16%;
                        font-size: 14px;
                        height: 55px;
                        background: linear-gradient(to bottom, #04327f 0%, #033895 25%, #033a9d 51%, #033ea8 100%);
                        border-radius: 50px;
                        text-align: center;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        font-weight: 600;
                        border: 1px solid rgba(0,0,0,0);
                        transition: all .2s linear;
                        line-height: 20px;
                    }
                    .screen11__item2 {
                        position: relative;
                        margin-top: 20px;
                    }
                </style>
            `;

            document.getElementById("page4").setAttribute('class','screen screen4 loaded');
            document.getElementById("page4").innerHTML = `
                <div class="container">
                    <p class="screen4__title">LASER &amp; SPA</p>
                    <p class="screen4__subtitle">CÔNG NGHỆ CAO</p>
                </div>
            `;
            document.getElementById("page_4_css").innerHTML = `
                <style>
                    .screen4.loaded {
                        background: url(./assets/images/page4-mobile-bg.jpg) center 0 no-repeat;
                    }
                    .screen4 {
                        min-height: 200px;
                        padding-top: 50px;
                    }
                    .screen4__title {
                        color: #fff;
                        text-align: center;
                        font-size: 32px;
                        font-weight: bold;
                        margin: 0;
                        letter-spacing: 10px;
                    }
                    .screen4__subtitle {
                        color: #fff;
                        text-align: center;
                        font-size: 22px;
                    }
                </style>
            `;

            document.getElementById("page_4_content").setAttribute('class','screen screen10 loaded');
            document.getElementById("page_4_content").innerHTML = `
                <div class="container">
                    <div class="screen10__box">
                        <div class="screen10__right loaded">

                            <div class="screen10__item modal-btn" data-modal="more2">
                                <img width="58" height="54" class="" data-src="./assets/images/page4-icon-1.png" alt="" src="./assets/images/page4-icon-1.png">
                                <div class="screen10__card">
                                    <p>Trị nám/ Tàn nhang</p>
                                    <b>-35%</b>
                                    <a href=""><span>Chi tiết</span></a>
                                </div>
                            </div>
                            <div class="screen10__item modal-btn" data-modal="more2">
                                <img width="58" height="54" class="" data-src="./assets/images/page4-icon-2.png" alt="" src="./assets/images/page4-icon-2.png">
                                <div class="screen10__card">
                                    <p>Phun xăm</p>
                                    <b>-35%</b>
                                    <a class="modal-btn" data-modal="more2"><span>Chi tiết</span></a>
                                </div>
                            </div>
                            <div class="screen10__item modal-btn" data-modal="more2">
                                <img width="58" height="54" class="" data-src="./assets/images/page4-icon-3.png" alt="" src="./assets/images/page4-icon-3.png">
                                <div class="screen10__card">
                                    <p>Trị sẹo</p>
                                    <b>-40%</b>
                                    <a href=""><span>Chi tiết</span></a>
                                </div>
                            </div>
                            <div class="screen10__item modal-btn" data-modal="more2">
                                <img width="58" height="54" class="" data-src="./assets/images/page4-icon-4.png" alt="" src="./assets/images/page4-icon-4.png">
                                <div class="screen10__card">
                                    <p>Trị mụn</p>
                                    <p class="screen10__trimun">Từ 0đ</p>
                                    <a href=""><span>Chi tiết</span></a>
                                </div>
                            </div>
                            <div class="screen10__item modal-btn" data-modal="more2">
                                <img width="58" height="54" class="" data-src="./assets/images/page4-icon-4.png" alt="" src="./assets/images/page4-icon-5.png">
                                <div class="screen10__card">
                                    <p>Trẻ hóa da</p>
                                    <b>-50%</b>
                                    <a href=""><span>Chi tiết</span></a>
                                </div>
                            </div>
                            <div class="screen10__item modal-btn" data-modal="more2">
                                <img width="58" height="54" class="" data-src="./assets/images/page4-icon-4.png" alt="" src="./assets/images/page4-icon-6.png">
                                <div class="screen10__card">
                                    <p>Dịch vụ khác</p>
                                    <b></b>
                                    <a href=""><span>Chi tiết</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="screen10__discount">
                        <button class="button-71 reg-btn" type="button">Nhận ưu đãi</button>
                    </div>

                    <div class="infoModal">
                        <div class="modal" id="more2">
                            <div class="modal-bg"></div>
                            <div class="modal-box animate-pop">
                                <div class="modal-header">
                                    <div class="modal-close">×</div>
                                </div>
                                <div class="modal-body">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            document.getElementById("page_4_content_css").innerHTML = `
                <style>
                    .screen10__right.loaded {
                        width:26rem;
                    }
                </style>
            `;

            document.getElementById("page5").setAttribute('class','screen screen5 loaded');
            document.getElementById("page5").innerHTML = `
                <div class="container">
                    <div class="screen5__column1">
                        <div class="screen5__item">
                            <img width="199" height="226" class="" data-src="./assets/images/page_5_images_3.jpg" alt="TRANG THIẾT BỊ HIỆN ĐẠI" src="./assets/images/page_5_images_3.jpg">
                            <p>
                                Trang thiết bị hiện đại
                            </p>
                        </div>
                    </div>
                    <div class="screen5__list">
                        <div class="screen5__item screen5__item2">
                            <img width="199" height="112" class="" data-src="./assets/images/page_5_images_4.jpg" alt="PHÒNG PT VÔ TRÙNG" src="./assets/images/page_5_images_4.jpg">
                            <p>Phòng PT vô trùng</p>
                        </div>
                        <div class="screen5__item screen5__item2">
                            <img width="199" height="112" class="" data-src="./assets/images/page_5_images_1.jpg" alt="HẬU PHẪU 5*" src="./assets/images/page_5_images_1.jpg">
                            <p>Hậu phẫu 5*</p>
                        </div>
                    </div>
                    <div class="screen5__column1">
                        <div class="screen5__item">
                            <img width="199" height="226" class="" data-src="./assets/images/page_5_images_2.jpg" alt="Chuyên gia hàng đầu" src="./assets/images/page_5_images_2.jpg">
                            <p>
                                Chuyên gia hàng đầu
                            </p>
                        </div>
                    </div>
                </div>
            `;
            document.getElementById("page_5_css").innerHTML = `
                <style>
                    .screen5 {
                        padding: 30px 0;
                        background: url(./assets/images/page5-mobile-bg.jpg) center 0 no-repeat;
                        background-size: cover;
                    }
                    .screen5__column1 {
                        width: 100%;
                    }
                    .screen5__item {
                        position: relative;
                    }
                    .screen5__item img {
                        width: 100%;
                        display: block;
                        height: auto;
                    }
                    .screen5__item p {
                        position: absolute;
                        bottom: 0;
                        width: 100%;
                        padding: 5px 0;
                        color: #fff;
                        font-size: 13px;
                        text-align: center;
                        background-color: rgba(26,87,135,.8);
                        margin: 0;
                    }
                    .screen5__list {
                        display: flex;
                    }
                    .screen5__item2 {
                        width: 50%;
                    }
                </style>
            `;

            document.getElementById("page7").setAttribute('class','screen screen7 loaded');
            document.getElementById("page_7_css").innerHTML =`
                <style>
                    .screen7.loaded {
                        background: url(./assets/images/page7-mobile-bg.jpg) center 0 no-repeat;
                    }
                    .screen7 {
                        min-height: 500px!important;
                        padding-top: 20px!important;
                    }
                </style>
            `;

            document.getElementById("page8").setAttribute('class','screen screen8 loaded');
            document.getElementById("page_8_css").innerHTML =`
                <style>
                    .screen8__box{display:block;}
                    .screen8__contact, .screen8__detail{width:100%!important;}
                </style>
            `;

        }else{
           
            //xử lý slider
            document.getElementById("section_1").innerHTML =`
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">

                        <div class="item active">
                            <img src="<?php echo $banner_slider_pc_1 ?>" alt="Los Angeles" style="width:100%;">
                        </div>

                        <div class="item">
                            <img src="<?php echo $banner_slider_pc_2 ?>" alt="Chicago" style="width:100%;">
                        </div>

                        <div class="item">
                            <img src="<?php echo $banner_slider_pc_3 ?>" alt="New York" style="width:100%;">
                        </div>

                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            `;
            document.getElementById("page_6_slider_1").setAttribute('src','<?php echo $banner_slider_page_6_pc_1 ?>');
            document.getElementById("page_6_slider_2").setAttribute('src','<?php echo $banner_slider_page_6_pc_2 ?>');
            document.getElementById("page_6_slider_3").setAttribute('src','<?php echo $banner_slider_page_6_pc_3 ?>');
            document.getElementById("page_6_slider_4").setAttribute('src','<?php echo $banner_slider_page_6_pc_4 ?>');
            document.getElementById("page_6_slider_5").setAttribute('src','<?php echo $banner_slider_page_6_pc_5 ?>');           

            

            
            

            document.getElementById("page4").setAttribute('class','screen4 loaded');
            document.getElementById("page4").innerHTML = `
                <div class="container">
                    <div class="screen4__img">
                        <img src="./assets/images/page4-bg.jpg" alt="">
                    </div>
                </div>
            `;
            document.getElementById("page_4_css").innerHTML = ``;

            document.getElementById("page_4_content").setAttribute('class','screen10 loaded');
            document.getElementById("page_4_content").innerHTML = `
                <div class="container">
                    <div class="screen10__box">
                        <div class="screen10__left loaded">
                            <img width="285" height="382" class="" data-src="./assets/images/pic8.jpg" alt="" src="./assets/images/pic8.jpg">
                            <img width="285" height="382" class="" data-src="./assets/images/pic7.jpg" alt="" src="./assets/images/pic7.jpg">
                        </div>
                        <div class="screen10__right loaded">

                            <div class="screen10__item modal-btn" data-modal="more2">
                                <img width="58" height="54" class="" data-src="./assets/images/page4-icon-1.png" alt="" src="./assets/images/page4-icon-1.png">
                                <div class="screen10__card">
                                    <p>Trị nám/ Tàn nhang</p>
                                    <b>-35%</b>
                                    <a href=""><span>Chi tiết</span></a>
                                </div>
                            </div>
                            <div class="screen10__item modal-btn" data-modal="more2">
                                <img width="58" height="54" class="" data-src="./assets/images/page4-icon-2.png" alt="" src="./assets/images/page4-icon-2.png">
                                <div class="screen10__card">
                                    <p>Phun xăm</p>
                                    <b>-35%</b>
                                    <a class="modal-btn" data-modal="more2"><span>Chi tiết</span></a>
                                </div>
                            </div>
                            <div class="screen10__item modal-btn" data-modal="more2">
                                <img width="58" height="54" class="" data-src="./assets/images/page4-icon-3.png" alt="" src="./assets/images/page4-icon-3.png">
                                <div class="screen10__card">
                                    <p>Trị sẹo</p>
                                    <b>-40%</b>
                                    <a href=""><span>Chi tiết</span></a>
                                </div>
                            </div>
                            <div class="screen10__item modal-btn" data-modal="more2">
                                <img width="58" height="54" class="" data-src="./assets/images/page4-icon-4.png" alt="" src="./assets/images/page4-icon-4.png">
                                <div class="screen10__card">
                                    <p>Trị mụn</p>
                                    <p class="screen10__trimun">Từ 0đ</p>
                                    <a href=""><span>Chi tiết</span></a>
                                </div>
                            </div>
                            <div class="screen10__item modal-btn" data-modal="more2">
                                <img width="58" height="54" class="" data-src="./assets/images/page4-icon-4.png" alt="" src="./assets/images/page4-icon-5.png">
                                <div class="screen10__card">
                                    <p>Trẻ hóa da</p>
                                    <b>-50%</b>
                                    <a href=""><span>Chi tiết</span></a>
                                </div>
                            </div>
                            <div class="screen10__item modal-btn" data-modal="more2">
                                <img width="58" height="54" class="" data-src="./assets/images/page4-icon-4.png" alt="" src="./assets/images/page4-icon-6.png">
                                <div class="screen10__card">
                                    <p>Dịch vụ khác</p>
                                    <b></b>
                                    <a href=""><span>Chi tiết</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="screen10__discount">
                        <button class="button-71 reg-btn" type="button">Nhận ưu đãi</button>
                    </div>

                    <div class="infoModal">
                        <div class="modal" id="more2">
                            <div class="modal-bg"></div>
                            <div class="modal-box animate-pop">
                                <div class="modal-header">
                                    <div class="modal-close">×</div>
                                </div>
                                <div class="modal-body">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            document.getElementById("page_4_content_css").innerHTML = ``;

            document.getElementById("page5").setAttribute('class','screen5 loaded');
            document.getElementById("page5").innerHTML = `
                <div class="container">
                    <div class="screen5__box loaded">
                        <div class="screen5__left ">
                            <div class="screen5__item">
                                <img width="379" height="431" class="" data-src="./assets/images/page_5_images_1.jpg"
                                    alt="TRANG THIẾT BỊ HIỆN ĐẠI"
                                    src="./assets/images/page_5_images_1.jpg">
                                <p>
                                    Trang thiết bị hiện đại
                                </p>
                            </div>
                        </div>
                        <div class="screen5__right ">
                            <div class="screen5__item screen5__item2">
                                <img width="379" height="214" class=""
                                    data-src="./assets/images/page_5_images_2.jpg"
                                    alt="TƯ VẤN CHÍNH XÁC"
                                    src="./assets/images/page_5_images_2.jpg">
                                <p>Tư vấn chính xác</p>
                            </div>
                            <div class="screen5__item screen5__item2">
                                <img width="379" height="214" class=""
                                    data-src="./assets/images/page_5_images_3.jpg"
                                    alt="XEM TRƯỚC KẾT QUẢ"
                                    src="./assets/images/page_5_images_3.jpg">
                                <p>Xem trước kết quả</p>
                            </div>
                        </div>
                        <div class="screen5__left ">
                            <div class="screen5__item">
                                <img width="379" height="431" class=""
                                    data-src="./assets/images/page_5_images_4.jpg"
                                    alt="Chuyên gia hàng đầu"
                                    src="./assets/images/page_5_images_4.jpg">
                                <p>
                                    Chuyên gia hàng đầu
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            document.getElementById("page_5_css").innerHTML = ``;
            
            document.getElementById("page7").setAttribute('class','screen7 load');
            document.getElementById("page_7_css").innerHTML =``;

            document.getElementById("page8").setAttribute('class','screen8 load');
            document.getElementById("page_8_css").innerHTML =``;

            document.getElementById("page_11_css").innerHTML = ``;

        }

    </script>


<!--js nội dung -->
    <!-- <script type="text/javascript" src="https://benhvienthammykangnam.vn/quangcao247/contact/template/js/js.js?t=112346"></script> -->


    <script>
    let service = [{
            data: `
            <div class="title">
                <p>CẮT MÍ</p>
            </div>
            <div class="main">
                <p>Nội Dung Dịch VỤ 1</p>
            </div>
        `,
        },
        {
            data: `
            <div class="title">
                <p>NÂNG MŨI</p>
            </div>
            <div class="main">
                <p>Nội Dung Dịch VỤ 2</p>
            </div>
        `,
        },
        {
            data: `
        <div class="title">
                <p>CẰM & HÀM MẶT</p>
            </div>
            <div class="main">
                <p>Nội Dung Dịch VỤ 3</p>
              
            </div>
        `,
        },
        {
            data: `
        <div class="title">
                <p>TẠO HÌNH MÔI</p>
            </div>
            <div class="main">
                <p>Nội Dung Dịch VỤ 4</p>
            </div>
        `,
        },
        {
            data: `
        <div class="title">
                <p>GIẢM MỠ</p>
            </div>
            <div class="main">
                <p>Nội Dung Dịch VỤ 5</p>
            </div>
        `,
        },
        {
            data: `
        <div class="title">
                <p>THẨM MỸ V1</p>
            </div>
            <div class="main">
                <p>Nội Dung Dịch VỤ 6</p>
            </div>
        </div>
        `,
        },
    ];
    let screen3__item = document.querySelectorAll(".screen3__item");

    for (let i = 0; i < screen3__item.length; i++) {
        screen3__item[i].addEventListener("click", () => {
            document.querySelector("#more1 .modal-body").innerHTML = service[i].data;
        });
    }

    let product = [{
            data: `
            <div class="title">
                <p>NÁM / TÀN NHANG</p>
            </div>
            <div class="main">
                <p>Nội Dung Dịch VỤ 2-1</p>
            </div>
          `,
        },
        {
            data: `
          <div class="title">
          <p>PHUN XĂM</p>
      </div>
      <div class="main">
        <p>Nội Dung Dịch VỤ 2-2</p>
      </div>
          `,
        },
        {
            data: `
          <div class="title">
          <p>Trị sẹo Scar Nano (gói 3 lần) </p>
      </div>
      <div class="main">
        <p>Nội Dung Dịch VỤ 2-3</p>
      </div>
          `,
        },
        {
            data: `
          <div class="title">
          <p>TRỊ MỤN</p>
      </div>
      <div class="main">
        <p>Nội Dung Dịch VỤ 2-4</p>
      </div>
          `,
        },
        {
            data: `
            <div class="title">
            <p>TRẺ HÓA DA</p>
        </div>
        <div class="main">
            <p>Nội Dung Dịch VỤ 2-5</p>
        </div>
            `,
        },
        {
            data: `
          <div class="title">
          <p>DỊCH VỤ KHÁC</p>
      </div>
      <div class="main">
        <p>Nội Dung Dịch VỤ 2-6</p>
      </div>
          `,
        },
    ];

    let screen10__item = document.querySelectorAll(".screen10__item");

    for (let i = 0; i < screen10__item.length; i++) {
        screen10__item[i].addEventListener("click", () => {
            document.querySelector("#more2 .modal-body").innerHTML = product[i].data;
        });
    }

    let category = [{
            data: `
          <div class="title">
          <p>Cấy mỡ Nanofat</p>
      </div>
      <div class="main">
        <p>Nội Dung Dịch VỤ 3-1</p>
      </div>
          `,
        },
        {
            data: `
          <div class="title">
          <p>Trẻ hóa Mi Young</p>
      </div>
      <div class="main">
        <p>Nội Dung Dịch VỤ 3-2</p>
      </div>
          `,
        },
        {
            data: `
          <div class="title">
          <p>Căng chỉ Mi Young </p>
      </div>
      <div class="main">
        <p>Nội Dung Dịch VỤ 3-3</p>
      </div>
          `,
        },
        {
            data: `
          <div class="title">
          <p>Căng da 3D</p>
      </div>
      <div class="main">
        <p>Nội Dung Dịch VỤ 3-4</p>
      </div>
          `,
        },
        {
            data: `
            <div class="title">
            <p>Trẻ hóa da Thermage FLX</p>
        </div>
        <div class="main">
            <p>Nội Dung Dịch VỤ 3-5</p>
        </div>
            `,
        },
    ];

    let screen11__item = document.querySelectorAll(".screen11__item");

    for (let i = 0; i < screen11__item.length; i++) {
        screen11__item[i].addEventListener("click", () => {
            document.querySelector("#more3 .modal-body").innerHTML = category[i].data;
        });
    }
    </script>

    <script>
    const popName = document.getElementById("pop_name");
    const popCt = document.getElementById("pop_ct");
    const popTime = document.getElementById("pop_time");
    const popImg = document.getElementById("pop_img");

    var auto_refresh2 = setInterval(
        function() {
            showDK();
            var t = randomDK();
            var name_array = ['Nguyễn Oanh', 'Tuyết Dương', 'Tươi Vũ', 'Trang Trịnh', 'Phượng Liễu',
                'Trang Linh', 'Trang Trần', 'Trang Quỳnh', 'Trang Bùi', 'Trần Thúy', 'Trần Thảo', 'Trần Mai',
                'Ánh Trần',
                'Đặng Hằng', 'Hằng Nga', 'Hoa Lê', 'Hoa Trương', 'Kim Thơ', 'Lê Mai', 'Mai Nguyễn',
                'Nguyễn Hoa', 'Oanh Lê',
                'Quỳnh Nhu', 'Thu Hoàng', 'Thủy Tiên', 'Ánh Tuyến', 'Diễm Quỳnh', 'Hằng Nguyễn', 'Hoa Ngân',
                'Huệ Em', 'Kin Xuyến',
                'Lệ Quyên', 'Mai Tình', 'Thanh Hằng', 'Thùy Anh', 'Tiêu Phụng', 'Băng Băng', 'Dung Bùi',
                'Hân Hân', 'Hoàng Anh', 'Hương Diệu',
                'Lâm Phạm', 'Lệ Thu', 'Minh Huệ', 'Nguyễn Thu', 'Phương Trần', 'Thùy Dương', 'Tố Uyên',
                'Trần Hảo', 'Anh Hoa', 'Bee Hoa', 'Giang Hoa',
                'Hoa Hằng', 'Hoàng Hương', 'Hương Giang', 'Lanh Anh', 'Liên Phạm', 'Mộng Tuyền', 'Nhất Nhất',
                'Phú Thoa', 'Thanh Thu', 'Thúy Hà', 'Bùi Nguyệt',
                'Giang Nhi', 'Hoài Nguyễn', 'Hoa Phạm', 'Hương Ly', 'Lan Hương', 'Loan Nguyễn', 'Nga Trương',
                'Nhung Hoàng', 'Quyên Đỗ', 'Thoa Nguyễn', 'Thúy Hương',
                'Chuyên Yến', 'Hằng Anna', 'Hoài Trang', 'Hoa Trang', 'Kiều Oanh', 'Lan Xuân', 'Ly Ly',
                'Ngọc Ánh', 'Nhung Trang', 'Quỳnh Hoa', 'Thu Hiền', 'Thúy Nguyễn'
            ];
            var pic_array = ['nguyen-oanh', 'tuyet-duong', 'tuoi-vu', 'trang-trinh', 'phuong-lieu',
                'trang-linh', 'trang-tran', 'trang-quynh', 'trang-bui', 'tran-thuy', 'tran-thao', 'tran-mai',
                'anh-tran',
                'dang-hang', 'hang-nga', 'hoa-le', 'hoa-truong', 'kim-tho', 'le-mai', 'mai-nguyen',
                'nguyen-hoa', 'oanh-le',
                'quynh-nhu', 'thu-hoang', 'thuy-tien', 'anh-tuyen', 'diem-quynh', 'hang-nguyen', 'hoa-ngan',
                'hue-em', 'kin-xuyen',
                'le-quyen', 'mai-tinh', 'thanh-hang', 'thuy-anh', 'tieu-phung', 'bang-bang', 'dung-bui',
                'han-han', 'hoang-anh', 'huong-dieu',
                'lam-pham', 'le-thu', 'minh-hue', 'nguyen-thu', 'phuong-tran', 'thuy-duong', 'to-uyen',
                'tran-hao', 'anh-hoa', 'bee-hoa', 'giang-hoa',
                'hoa-hang', 'hoang-huong', 'huong-giang', 'lan-anh', 'lien-pham', 'mong-tuyen', 'nhat-nhat',
                'phu-thoa', 'thanh-thu', 'thuy-ha', 'bui-nguyet',
                'giang-nhi', 'hoai-nguyen', 'hoa-pham', 'huong-ly', 'lan-huong', 'loan-nguyen', 'nga-truong',
                'nhung-hoang', 'quyen-do', 'thoa-nguyen', 'thuy-huong',
                'chuyen-yen', 'hang-anna', 'hoai-trang', 'hoa-trang', 'kieu-oanh', 'lan-xuan', 'ly-ly',
                'ngoc-anh', 'nhung-trang', 'quynh-hoa', 'thu-hien', 'thuy-nguyen'
            ];

            var t1 = name_array[t];
            var t2 = pic_array[t];

            popName.innerHTML = t1;
            var t2 = './assets/images/clone-images/' + t2 + '.jpg';
            popImg.setAttribute("src", t2);
            popImg.setAttribute("alt", t1);

            var ct = randomDK1();
            popCt.innerHTML = ct;

            var p = randomDK2();
            popTime.innerHTML = p;

        }, 4000);

    var customReg = document.getElementById("popup_person_1_0_0");

    function showDK() {
        customReg.style.opacity = customReg.style.opacity == "1" ? "0" : "1";
    }

    function randomDK() {
        var t = Math.floor(Math.random() * 86);
        return t;
        console.log(t);
    }

    function randomDK1() {
        const random = arr => arr[Math.floor(Math.random() * arr.length)];

        var ct = random([
            'Đã đăng ký tư vấn', 
            'Đã đăng ký tư vấn', 
            'Đã đăng ký tư vấn', 
            'Đã đăng ký tư vấn', 
            'Đã đăng ký tư vấn', 
            'Đã đăng ký tư vấn', 
        ]);
        return ct;
        console.log(ct);
    }

    function randomDK2() {
        const random = arr => arr[Math.floor(Math.random() * arr.length)];

        var p = random([
            '5 phút trước',
            '6 phút trước',
            '7 phút trước',
            '8 phút trước',
            '9 phút trước',
            '12 phút trước',
            '14 phút trước',
            '15 phút trước',
            '16 phút trước',
            '17 phút trước',
            '18 phút trước',
            '19 phút trước',
            '20 phút trước',
        ]);
        return p;
        console.log(p);
    }
    </script>
    <script>
    const callModal = `
            <div class="pop_callkn_1_2_0" id="pop-call">
                <div class="pop_callkn_1_2_0__box">
                    <div class="pop_callkn_1_2_0__close" id="call-close">×</div>
                    <div class="pop_callkn_1_2_0__logo">
                        <img width="300" height="110" src="./assets/images/logo.svg" alt="">
                    </div>
                    <div class="pop_callkn_1_2_0__form">
                        <form action="form.php" method="post" />
                            <div class="pop_callkn_1_2_0__inputGroup">
                                <div style="display:none">
                                    <input type="text" placeholder="Họ và tên (*)" value="Yêu Cầu Gọi Lại" id="iname" name="input_name">
                                </div>
                                <input name="input_phone" type="textbox" placeholder="Nhập số điện thoại của bạn*:">
                                <div class="pop_callkn_1_2_0__click">
                                    <input type="submit" value="NHẬN TƯ VẤN NGAY">
                                </div>
                                <div class="pop_callkn_1_2_0__contact">
                                    <p class="pop_callkn_1_2_0__or mb mt20">Hoặc </p>
                                </div>
                            </div>
                            <div class="pop_callkn_1_2_0__des">
                                <div class="pop_callkn_1_2_0__phone pc ">
                                    <p><img src="./assets/images/call.png" alt=""> Tư vấn trực tiếp 24/7: <span>  <?php echo $hotline ?></span></p>
                                </div>
                                <a class="pop_callkn_1_2_0__more mb" href="tel:<?php echo $hotline ?>">Liên hệ <img src="./assets/images/call_form.png" alt=""> <span><?php echo $hotline ?></span></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>`

    const callBtn = document.getElementsByClassName('call-btn');
    for (let i = 0; i < callBtn.length; i++) {
        callBtn[i].addEventListener('click', () => {
            document.getElementsByTagName('body')[0].insertAdjacentHTML("beforeend", callModal)
            document.getElementById('call-close').addEventListener('click', () => {
                document.getElementById('pop-call').remove()
            })
            window.onclick = function(e) {
                if (e.target == document.getElementById('pop-call')) {
                    document.getElementById('pop-call').remove()
                }
            }
        })
    }
    </script>
    <script>
    const regModal = `
        <div class="pop_regkn_1_3_0" id="pop-reg">
            <div class="pop_regkn_1_3_0__box" id="reg-box">
            <div class="pop_regkn_1_3_0__close" id="reg-close">×</div>
            <div class="pop_regkn_1_3_0__logo">
                <img width="300" height="110" src="./assets/images/logo.svg" alt="">
            </div>
            <div class="pop_regkn_1_3_0__des">
                <p>Để lại thông tin nhận tư vấn & ưu đãi</p>
            </div>
            
                <form class="pop_regkn_1_3_0__inputGroup" method="post" action="form.php">
                    <input name="input_name" type="text" id="formName" required placeholder="Họ tên: ">
                    <input name="input_phone" type="text" id="formPhone" required placeholder="Số điện thoại: ">
                    <div class="pop_regkn_1_3_0__clicknow">
                        <input type="submit" value="ĐĂNG KÝ NGAY">
                    </div>
                </form>
            </div>
            </div>`
    const regBtn = document.getElementsByClassName('reg-btn');
    for (let i = 0; i < regBtn.length; i++) {
        regBtn[i].addEventListener('click', () => {
            document.getElementsByTagName('body')[0].insertAdjacentHTML("beforeend", regModal)
            document.getElementById('reg-close').addEventListener('click', () => {
                document.getElementById('pop-reg').remove()
            })
            window.onclick = function(e) {
                if (e.target == document.getElementById('pop-reg')) {
                    document.getElementById('pop-reg').remove()
                }
            }
        })
    }
    </script>
    <script>
    var screen6_slider = tns({
        container: '.screen6__slider',
        items: 1,
        slideBy: 'page',
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        lazyload: true,
        gutter: 10,
        // lazyloadSelector: '.tns-lazy',
        autoHeight: true,
        navPosition: 'bottom',
        controlsPosition: 'bottom',
        gutter: 10,
        slideBy: 1,
        controls: true,
        loop: false,
    });
    </script>
    <script>
    addClass('.header_1_1_0__menu', '.header_1_1_0__main', 'active');
    addClass('.header_1_1_0__menu', '.header_1_1_0__bg', 'active');

    removeClass('.header_1_1_0__bg', '.header_1_1_0__main', 'active');
    removeClass('.header_1_1_0__bg', '.header_1_1_0__bg', 'active');
    removeClass('.header_1_1_0__box a', '.header_1_1_0__main', 'active');
    removeClass('.header_1_1_0__box a', '.header_1_1_0__bg', 'active');
    document.addEventListener("scroll", function() {
        myLazy('img.lazy', 'src');
        myLazy('source.lazy', 'srcset');
        myLazy('.lazy-bg', 'img-bg');
        myLazy('.load', 'loaded');
        myLazy('.slide_run', 'slide');
        onScroll('.header_1_1_0__list a', 'section', 'active');
    });
    LazyShowScreen('img.lazy', 'src')

    scrollClick('.header_1_1_0__list a, a[href="#pageReg"]');

    function myLazy(sec, attr) {
        const section_loads = document.querySelectorAll(sec);
        let winTop = window.innerHeight;

        for (let i = 0; i < section_loads.length; i++) {
            let pos_top = section_loads[i].getBoundingClientRect().top;
            let pos_bottom = section_loads[i].getBoundingClientRect().bottom;
            if (pos_top <= winTop && pos_bottom >= 0) {
                switch (attr) {
                    case 'src':
                        section_loads[i].src = section_loads[i].dataset.src;
                        section_loads[i].classList.remove('lazy');
                        break;
                    case 'srcset':
                        section_loads[i].srcset = section_loads[i].dataset.srcset;
                        section_loads[i].classList.remove('lazy');
                        break;
                    case 'img-bg':
                        section_loads[i].classList.remove('lazy-bg');
                        section_loads[i].classList.add('img-bg');
                        break;
                    case 'loaded':
                        section_loads[i].classList.remove('load');
                        section_loads[i].classList.add('loaded');
                        break;
                    case 'slide':
                        section_loads[i].classList.add('slide');
                        break;
                    default:
                        console.log(`Sorry, we are out of ${attr}.`);
                }

            }
        }
    }

    function LazyShowScreen(sec, attr) {
        const section_loads = document.querySelectorAll(sec);
        let win_height = screen.height;

        for (let i = 0; i < section_loads.length; i++) {
            if (section_loads[i].getBoundingClientRect().top < win_height) {
                switch (attr) {
                    case 'loaded':
                        section_loads[i].classList.add('loaded');
                        break;
                    case 'src':
                        section_loads[i].src = section_loads[i].dataset.src;
                        section_loads[i].classList.remove('lazy');
                        break;
                    case 'srcset':
                        section_loads[i].srcset = section_loads[i].dataset.srcset;
                        section_loads[i].classList.remove('lazy');
                        break;
                    case 'img-bg':
                        section_loads[i].classList.remove('lazy-bg');
                        section_loads[i].classList.add('img-bg');
                        break;
                    case 'slide':
                        section_loads[i].classList.remove('slide');
                        section_loads[i].classList.add('slide');
                        break;
                    default:
                        console.log(`Sorry, we are out of ${attr}.`);
                }
            }
        }
    }
    </script>
    <!-- validateform -->
    <script>
    const validateForm = (screen) => {
        const input = {
            name: document.querySelector(`.${screen} #formName`),
            phone: document.querySelector(`.${screen} #formPhone`),
            service: document.querySelector(`.${screen} #formService`)
        }
        const hiddenInput = {
            name: document.querySelector(`.${screen} #iname`),
            phone: document.querySelector(`.${screen} #imob`),
            service: document.querySelector(`.${screen} #itext`)
        }
        if (input.name.value === '') {
            input.name.style.border = '1px solid red'
            alert('Vui lòng nhập tên')
            return
        }
        if (input.phone.value === '') {
            input.phone.style.border = '1px solid red'
            alert('Vui lòng nhập số điện thoại')
            return;
        }
        if (input.service.value === '') {
            input.service.style.border = '1px solid red'
            alert('Vui lòng chọn dịch vụ')
            return;
        }
        hiddenInput.name.value = input.name.value
        hiddenInput.phone.value = input.phone.value
        hiddenInput.service.value = input.service.value
    }
    </script>
<!--end js nội dung -->