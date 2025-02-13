<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Checkout Page - Ustora Demo</title>

        <!-- Google Fonts -->
        <link
            href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600'
            rel='stylesheet' type='text/css'>
        <link
            href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300'
            rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100'
            rel='stylesheet' type='text/css'>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <script
            src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>

        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="user-menu">
                        <ul>
                            <li>
                                <!--menu dropdown-->
                                <div class="dropdown">
                                    <?php if (isset($_SESSION['ss_client'])) {
                                    } else {
                                        echo '<a style="text-decoration: none;" href="?controller=dangnhap"><i class="fa fa-user"></i>&ensp;Đăng nhập</a>';
                                    } ?>
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <?php
                                        if (isset($_SESSION['ss_client'])) {
                                            echo '<a style="text-decoration: none;" href="#"><img src="img/user.png" width="25px" height="20px" alt>&ensp;' . $_SESSION['ss_client1'];
                                        }
                                        ?>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu">
                                        <a style="text-decoration: none;" href="V_profile.html" class="dropdown-item"><i class="fa-regular fa-address-card"></i>&ensp;Trang
                                            cá nhân</a>
                                        <a style="text-decoration: none;" href="V_donhang.html" class="dropdown-item"><i class="fa-solid fa-layer-group"></i>&ensp;Xem
                                            đơn hàng</a>
                                        <a style="text-decoration: none;" href="#" class="dropdown-item"><i class="fa-solid fa-gear"></i>&ensp;Cài
                                            đặt</a>
                                        <a style="text-decoration: none;" href="?controller=dangxuat" class="dropdown-item"><i class="fa-solid fa-right-from-bracket"></i>&ensp;Đăng
                                            xuất</a>
                                    </div>
                                </div>
                            </li>
                            <li><a style="text-decoration: none;" href="#"><i class="fa fa-heart"></i>&ensp;Yêu
                                    thích</a></li>
                            <li><a style="text-decoration: none;" href="?controller=giohang"><i class="fa-sharp fa-solid fa-cart-shopping"></i>&ensp;Giỏ
                                    hàng</a></li>
                        </ul>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="header-right">
                            <ul class="list-unstyled list-inline">
                                <li>
                                    <div><span
                                            class="key">Mệnh giá : </span><span
                                            class="value">VND</span></div>
                                </li>

                                <li class="dropdown dropdown-small">
                                    <div><span
                                            class="key">Ngôn ngữ : </span><span
                                            class="value">Vietnamse</span></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End header area -->

        <div class="site-branding-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="logo">
                            <h1><a href="./"><img style="width: 70px; border-radius: 50%;"
                                src="img/logo_annhanh.jpg"></a></h1>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="shopping-item">
                            <a href="?controller=giohang">Giỏ hàng
                                <i class="fa fa-shopping-cart"></i> <span
                                    class="product-count">5</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End site branding area -->

        <div class="mainmenu-area">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle"
                            data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="?controller=trangchu">Trang chủ</a></li>
                            <li><a href="?controller=cuahang">Cửa hàng</a></li>
                            <li class="active"><a href="?controller=giohang"><i
                                        class="fa-sharp fa-solid fa-cart-shopping"></i>
                                    Giỏ hàng</a></li>
                            <li><a href="#">Giới thiệu</a></li>
                            <li><a href="#">Tin tức</a></li>
                            <li><a
                                    href="https://www.facebook.com/profile.php?id=100020891342691">Liên
                                    hệ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- End mainmenu area -->

        <div class="product-big-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-bit-title text-center">
                            <h2>Thanh Toán</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-product-area">
            <div class="zigzag-bottom"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">

                        <div class="single-sidebar">
                            <h2 class="sidebar-title">Các sản phẩm</h2>
                            <div class="thubmnail-recent">
                                <img src="img/pizza_raucu.jpg"
                                    class="recent-thumb" alt>
                                <h2><a style="text-decoration: none;" href="#">Pizza rau củ</a></h2>
                                <div class="product-sidebar-price">
                                    <ins>60,000vnd</ins> <del>80,000vnd</del>
                                </div>
                            </div>
                            <div class="thubmnail-recent">
                                <img src="img/tra-sua-matcha.jpg"
                                    class="recent-thumb" alt>
                                <h2><a style="text-decoration: none;" href="#">Trà sữa matcha</a></h2>
                                <div class="product-sidebar-price">
                                    <ins>25,000vnd</ins> <del>40,000vnd</del>
                                </div>
                            </div>
                        </div>

                        <div class="single-sidebar">
                            <h2 class="sidebar-title">Bài đăng gần đây</h2>
                            <ul>
                                <li><a style="text-decoration: none;" href="#">Đồ ăn nhanh đang nổi hot</a></li>
                                <li><a style="text-decoration: none;" href="#">Công thức làm pizza</a></li>
                                <li><a style="text-decoration: none;" href="#">Cách ướp sườn BBQ đúng cách</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="product-content-right">
                            <div class="woocommerce">
                                <div class="woocommerce-info">Phản hồi với chúng
                                    tôi? <a style="text-decoration: none;"  class="showlogin"
                                        data-toggle="collapse"
                                        href="https://www.facebook.com/profile.php?id=100020891342691"
                                        aria-expanded="false"
                                        aria-controls="login-form-wrap"><i
                                            class="fa-brands fa-facebook"></i>
                                        Facebbok</a>
                                </div>

                                <div class="woocommerce-info">Bạn đã có mã giảm
                                    giá? <a style="text-decoration: none;"  class="showcoupon"
                                        data-toggle="collapse"
                                        href="#coupon-collapse-wrap"
                                        aria-expanded="false"
                                        aria-controls="coupon-collapse-wrap">Nhấn
                                        vào đây để nhập</a>
                                </div>

                                <form id="coupon-collapse-wrap" method="post"
                                    class="checkout_coupon collapse">

                                    <p class="form-row form-row-first">
                                        <input type="text" value
                                            id="coupon_code"
                                            placeholder="Coupon code"
                                            class="input-text"
                                            name="coupon_code">
                                    </p>

                                    <p class="form-row form-row-last">
                                        <input type="submit"
                                            value="Apply Coupon"
                                            name="apply_coupon" class="button">
                                    </p>

                                    <div class="clear"></div>
                                </form>

                                <form enctype="multipart/form-data" action="#"
                                    class="checkout" method="post"
                                    name="checkout">

                                    <div id="customer_details" class="col2-set">
                                            <div
                                                class="woocommerce-billing-fields">
                                                <h3 style="text-align: center;">Chi tiết thanh toán</h3>
                                                <p id="billing_first_name_field"
                                                    class="form-row form-row-first validate-required">
                                                    <label class
                                                        for="billing_first_name">Họ
                                                        và tên <abbr
                                                            title="required"
                                                            class="required">*</abbr>
                                                    </label>
                                                    <input type="text" value
                                                        placeholder="Nhập họ và tên..."
                                                        id="billing_first_name"
                                                        name="billing_first_name"
                                                        class="input-text ">
                                                </p>

                                                <label class
                                                for="billing_first_name">Giới tính <abbr
                                                    title="required"
                                                    class="required">*</abbr>
                                                </label>    
                                                                <label
                                                                    class="btn btn-outline-decondary">Nam
                                                                    <input type="radio"
                                                                        name="fav_language"
                                                                        value="Nam">
                                                                </label>
                                                            
                                                            
                                                                <label
                                                                    class="btn btn-outline-decondary">Nữ
                                                                    <input type="radio"
                                                                        name="fav_language"
                                                                        value="Nữ">
                                                                </label>
 
                                                <p id="billing_company_field"
                                                    class="form-row form-row-wide">
                                                    <label class
                                                        for="billing_company">Số
                                                        diện thoại <abbr
                                                            title="required"
                                                            class="required">*</abbr></label>
                                                    <input type="text" value
                                                        placeholder="Nhập Số điện thoại..."
                                                        id="billing_company"
                                                        name="billing_company"
                                                        class="input-text ">
                                                </p>

                                                <p id="billing_company_field"
                                                    class="form-row form-row-wide">
                                                    <label class
                                                        for="billing_company">Email
                                                        <abbr title="required"
                                                            class="required">*</abbr></label>
                                                    <input type="text" value
                                                        placeholder="Nhập email..."
                                                        id="billing_company"
                                                        name="billing_company"
                                                        class="input-text ">
                                                </p>

                                                <p id="billing_address_1_field"
                                                    class="form-row form-row-wide address-field validate-required">
                                                    <label class
                                                        for="billing_address_1">Tỉnh
                                                        / Thành phố <abbr
                                                            title="required"
                                                            class="required">*</abbr>
                                                    </label>
                                                    <input type="text" value
                                                        placeholder="Nhập tỉnh/thành phố..."
                                                        id="billing_address_1"
                                                        name="billing_address_1"
                                                        class="input-text ">
                                                </p>

                                                <p id="billing_city_field"
                                                    class="form-row form-row-wide address-field validate-required"
                                                    data-o_class="form-row form-row-wide address-field validate-required">
                                                    <label class
                                                        for="billing_city">Quận
                                                        / huyện<abbr
                                                            title="required"
                                                            class="required">*</abbr>
                                                    </label>
                                                    <input type="text" value
                                                        placeholder="Nhập Quận / huyện..."
                                                        id="billing_city"
                                                        name="billing_city"
                                                        class="input-text ">
                                                </p>

                                                <p id="billing_state_field"
                                                    class="form-row form-row-first address-field validate-state"
                                                    data-o_class="form-row form-row-first address-field validate-state">
                                                    <label class
                                                        for="billing_state">Xã /
                                                        Phường</label>
                                                    <input type="text"
                                                        id="billing_state"
                                                        name="billing_state"
                                                        placeholder="Nhập Xã / Phường..."
                                                        value
                                                        class="input-text ">
                                                </p>
                                                <p id="billing_postcode_field"
                                                    class="form-row form-row-last address-field validate-required validate-postcode"
                                                    data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                                                    <label class
                                                        for="billing_postcode">Thôn
                                                        / Xóm / Số nhà <abbr
                                                            title="required"
                                                            class="required">*</abbr>
                                                    </label>
                                                    <input type="text" value
                                                        placeholder="Nhập cụ thể..."
                                                        id="billing_postcode"
                                                        name="billing_postcode"
                                                        class="input-text ">
                                                </p>

                                                <div class="clear"></div>

                                                <p id="order_comments_field"
                                                    class="form-row notes">
                                                    <label class
                                                        for="order_comments">Ghi
                                                        chú</label>
                                                    <textarea cols="5" rows="2"
                                                        placeholder="Nhập không quá 20 ký tự."
                                                        id="order_comments"
                                                        class="input-text "
                                                        name="order_comments"></textarea>
                                                </p>

                                            </div>
                                        </div>
                                    </div>

                                    <h3 id="order_review_heading">Đơn hàng của
                                        bạn</h3>

                                    <div id="order_review"
                                        style="position: relative;">
                                        <table class="shop_table">
                                            <thead>
                                                <tr>
                                                    <th class="product-name">Sản
                                                        phẩm</th>
                                                    <th class="product-total">Tổng
                                                        cộng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                        Tổng sản phẩm <strong
                                                            class="product-quantity">×
                                                            5</strong> </td>
                                                    <td class="product-total">
                                                        <span class="amount">£15.00</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>

                                                <tr class="shipping">
                                                    <th>Phương thức giao hàng</th>
                                                    <td>

                                                        Miễn phí vận chuyển
                                                        <input type="hidden"
                                                            class="shipping_method"
                                                            value="free_shipping"
                                                            id="shipping_method_0"
                                                            data-index="0"
                                                            name="shipping_method[0]">
                                                    </td>
                                                </tr>

                                                <tr class="order-total">
                                                    <th>Tổng đơn hàng</th>
                                                    <td><strong><span
                                                                class="amount">£15.00</span></strong>
                                                    </td>
                                                </tr>

                                            </tfoot>
                                        </table>

                                        <div id="payment">
                                            <ul class="payment_methods methods">
                                                <li class="payment_method_bacs">
                                                    <input type="radio"
                                                        data-order_button_text
                                                        checked="checked"
                                                        value="bacs"
                                                        name="payment_method"
                                                        class="input-radio"
                                                        id="payment_method_bacs">
                                                    <label
                                                        for="payment_method_bacs">Thanh
                                                        toán bằng tiền mặt
                                                    </label>
                                                    <div
                                                        class="payment_box payment_method_bacs">
                                                        <p>Nhận hàng và đưa tiền
                                                            cho nhân viên giao
                                                            hàng.</p>
                                                    </div>
                                                </li>
                                                <li class="payment_method_bacs">
                                                    <input type="radio"
                                                        data-order_button_text
                                                        checked="checked"
                                                        value="bacs"
                                                        name="payment_method"
                                                        class="input-radio"
                                                        id="payment_method_bacs">
                                                    <label
                                                        for="payment_method_bacs">Thanh
                                                        toán bằng Bankking
                                                    </label>
                                                    <div
                                                        class="payment_box payment_method_bacs">
                                                        <p>Số tài khoản:
                                                            100876507576</p>
                                                        <p>Chủ tài khoản: NGUYỄN
                                                            ĐỨC HOÀNG</p>
                                                        <p>Ngân hàng: VietinBank</p>
                                                    </div>
                                                </li>
                                                <li
                                                    class="payment_method_paypal">
                                                    <input type="radio"
                                                        data-order_button_text="Proceed to PayPal"
                                                        value="paypal"
                                                        name="payment_method"
                                                        class="input-radio"
                                                        id="payment_method_paypal">
                                                    <label
                                                        for="payment_method_paypal">Thanh
                                                        toán qua thẻ <img
                                                            alt="PayPal Acceptance Mark"
                                                            src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png"><a
                                                            title="What is PayPal?"
                                                            onclick="javascript:window.open('https://www.paypal.com/gb/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"
                                                            class="about_paypal"
                                                            href="https://www.paypal.com/gb/webapps/mpp/paypal-popup">Thanh
                                                            toán qua thẻ là gì?</a>
                                                    </label>
                                                </li>
                                            </ul>

                                            <div class="form-row place-order">
                                                <button type="submit" name="btn_thanhtoan" class="btn btn-info">Thanh Toán</button>
                                            </div>

                                            <div class="clear"></div>

                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-top-area">
            <div class="zigzag-bottom"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-about-us">
                            <h2><img style="width: 70px; border-radius: 50%;"
                                    src="img/logo_annhanh.jpg"></h2>
                            <p>
                                Hãy thưởng thức hương vị tuyệt vời của đồ ăn nhanh tại nhà hàng chúng tôi! Với menu đa dạng và phong phú, chúng tôi cam kết mang đến cho bạn những món ngon đầy dinh dưỡng và đáp ứng nhanh chóng nhu cầu của bạn.
                                 Chế biến từ nguyên liệu tươi ngon, đội ngũ đầu bếp chuyên nghiệp đã sẵn sàng phục vụ bạn món ăn vừa miệng và sạch sẽ. Hãy ghé thăm nhà hàng của chúng tôi ngay hôm nay để trải nghiệm hương vị độc đáo,
                                 dịch vụ tận tâm và không gian thoải mái, thỏa mãn đam mê ẩm thực của bạn.</p>
                            <div class="footer-social">
                                <a
                                    href="https://www.facebook.com/profile.php?id=100020891342691"
                                    target="_blank"><i
                                        class="fa-brands fa-facebook"></i></a>
                                <a href="#" target="_blank"><i
                                        class="fa-brands fa-twitter"></i></a>
                                <a href="#" target="_blank"><i
                                        class="fa-brands fa-youtube"></i></a>
                                <a href="#" target="_blank"><i
                                        class="fa-brands fa-tiktok"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="footer-menu">
                            <h2 class="footer-wid-title">Thông tin và chính
                                sách
                            </h2>
                            <ul>
                                <li><a style="text-decoration: none;" href="V_profile.html">Tài khoản của tôi</a></li>
                                <li><a style="text-decoration: none;" href="#">Lịch sử mua hàng</a></li>
                                <li><a style="text-decoration: none;" href="#">Tra cứu điểm tiêu dùng</a></li>
                                <li><a style="text-decoration: none;" href="#">Liên hệ nhà cung cấp</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="footer-menu">
                            <h2 class="footer-wid-title">Dịch vụ và thông
                                tin
                                khác</h2>
                            <ul>
                                <li><a style="text-decoration: none;" href="#">Liên hệ hợp tác kinh doanh</a></li>
                                <li><a style="text-decoration: none;" href="#">Tuyển dụng nhân viên</a></li>
                                <li><a style="text-decoration: none;" href="#">Ưu đãi khi mua hàng</a></li>
                                <li><a style="text-decoration: none;" href="#">Nhận mã giảm giá</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="footer-newsletter">
                            <h2 class="footer-wid-title">Bản tin</h2>
                            <p>Đăng ký nhận bản tin và ưu đãi độc quyền của
                                chúng tôi.Bạn sẽ không thấy ở đâu có ưu đãi
                                này
                                nữa!</p>
                            <div class="newsletter-form">
                                <form action="#">
                                    <input type="email"
                                        placeholder="Nhập email của bạn...">
                                    <input type="submit" value="Xác nhận">
                                </form>
                            </div><br>
                            <div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End footer top area -->

        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="copyright">
                            <p>Bản quyền của <a style="text-decoration: none;" href="https://www.facebook.com/profile.php?id=100020891342691">hoàng</a>
                                &emsp; &copy; 2023&emsp;Nghiêm
                                cấm sao chép dưới mọi hình thức.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="footer-card-icon">
                            <i class="fa-brands fa-cc-visa"></i>
                            <i class="fa-brands fa-cc-paypal"></i>
                            <i class="fa-brands fa-cc-mastercard"></i>
                            <i class="fa-solid fa-wallet"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End footer bottom area -->

        <!-- Latest jQuery form server -->
        <script src="https://code.jquery.com/jquery.min.js"></script>

        <!-- Bootstrap JS form CDN -->
        <script
            src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <!-- jQuery sticky menu -->
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.sticky.js"></script>

        <!-- jQuery easing -->
        <script src="js/jquery.easing.1.3.min.js"></script>

        <!-- Main Script -->
        <script src="js/main.js"></script>
    </body>
</html>