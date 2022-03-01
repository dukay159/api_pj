<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Coffee Break Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <title>User Post</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!--start-smoth-scrolling-->
</head>

<body>
    <!--header-top-starts-->
    <div class="header-top">
        <div class="container">
            <div class="head-main">
                <h1 style="text-align: center;">CREATE USER</h1>
                <!-- <a href="index.html"><img src="{{asset('images/logo-1.png')}}" alt="" /></a> -->
            </div>
        </div>
    </div>
    <!--header-top-end-->
    <!--start-header-->
    <div class="header">
        <div class="container">
            <div class="head">
                <div class="navigation">
                    <span class="menu"></span>
                    <ul class="navig">
                        <li><a href="{{url('/')}}" class="active">Home</a></li>
						<li><a href="{{route('customer.create')}}">User Post</a></li>
						<li><a href="{{route('customer.index')}}">User List</a></li>
						<li><a href="{{route('category.create')}}">Post</a></li>
						<li><a href="{{route('category.index')}}">Danh muc</a></li>
                    </ul>
                </div>
                <div class="header-right">
                    
                    <ul>
                        <li><a href="#"><span class="fb"> </span></a></li>
                        <li><a href="#"><span class="pin"> </span></a></li>
                        <li><a href="#"><span class="rss"> </span></a></li>
                        <li><a href="#"><span class="drbl"> </span></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- script-for-menu -->
    <!-- script-for-menu -->
    <script>
        $("span.menu").click(function() {
            $(" ul.navig").slideToggle("slow", function() {});
        });
    </script>
    <!-- script-for-menu -->
    <!-- CREATE USER-->
    <div class="container">
            <div class="col-md-8">
                <div class="form h-100">
                    <h3>Fill in information</h3>
                    <form class="mb-5" autocomplete="off" method="POST" action="{{route('customer.store')}}">
                        @csrf 
                        <div class="row">
                            <div class="col-md-6 form-group mb-5">
                                <label for="" class="col-form-label">Name *</label>
                                <input type="text" class="form-control" name="name_customer" id="name_customer" placeholder="Your name">
                            </div>
                            <div class="col-md-6 form-group mb-5">
                                <label for="" class="col-form-label">Email *</label>
                                <input type="text" class="form-control" name="email_customer" id="email" placeholder="Your email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group mb-5">
                                <label for="" class="col-form-label">Phone</label>
                                <input type="text" class="form-control" name="phone_customer" id="phone_customer" placeholder="Phone #">
                            </div>
                            <div class="col-md-6 form-group mb-5">
                                <label for="" class="col-form-label">Company</label>
                                <input type="text" class="form-control" name="city_customer" id="company" placeholder="Company  name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group mb-5">
                                <label for="" class="col-form-label">Address</label>
                                <textarea class="form-control" name="address_customer" id="address" cols="30" rows="4" placeholder="Your address" style="resize: none;"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="submit" value="Create" class="btn btn-primary rounded-0 py-2 px-4">
                                <span class="submitting"></span>
                            </div>
                        </div>
                    </form>
                    <div id="form-message-warning mt-4"></div>
                </div>
            </div>
    </div>

    <!-- END CREATE USER-->

    <!-- main start -->
    <!--footer-starts-->
    <div class="footer">
        <div class="container">
            <div class="footer-text">
                <p>© 2015 Coffee Break. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
            </div>
        </div>
    </div>
    <!--footer-end-->
</body>

</html>