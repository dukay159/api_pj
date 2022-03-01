<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Coffee Break Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <title>Danh mục bài viết</title>

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
                <h1 style="text-align: center;">Danh muc bai viet</h1>
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
    <div class="container">
        @if(Session::has('success'))
        <div class="alert alert-success">
            <p>{{Session::get('success')}}</p>
        </div>
        @endif
        @if(Session::has('failure'))
        <div class="alert alert-danger">
            <p>{{Session::get('failure')}}</p>
        </div>
        @endif
        <label>Search</label>
        <div class="form-g">
            <input type="text" name="search" class="form-control">
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tiêu đề</th>
                                <th scope="col">Quản lý</th>
                            </tr>
                        </thead>
                        <tbody id="listCategory">
                            @php
                            $i = 0;
                            @endphp
                            @foreach($category as $categories)
                            @php
                            $i++;
                            @endphp
                            <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{$categories->title}}</td>
                                <td>
                                    <form action="{{route('category.destroy',[$categories->id])}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input class="btn btn-danger mb-2 btn-sm" type="submit" value="Delete">
                                    </form>
                                    <br>
                            
                                    <a class="btn btn-warning btn-sm" href="{{route('category.show',[$categories->id])}}">Edit</a>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- main start -->
    <!--footer-starts-->

    <!--footer-end-->
</body>
        <script>
            $(document).ready(function () {
                $(document).on('keyup', '#keyword', function () {
                    var keyword = $(this).val();

                    $.ajax({
                        type: "get",
                        url: "/search",
                        data: {
                            keyword: keyword
                        },
                        dataType: "json",
                        success: function (response) {
                            $('#listCategory').html(response);
                        }
                    });
                });
            });
        </script>
</html>