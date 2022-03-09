@include('layouts.head')
<body>
    <!--header-top-starts-->
    <div class="header-top">
        <div class="container">
            <div class="head-main">
                <h1 style="text-align: center;">CREATE TITLE</h1>
            </div>
        </div>
    </div>
    <!--header-top-end-->
    <!--start-header-->
        @include('layouts.header')
    <!--end-header-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <form autocomplete="off" method="POST" action="{{route('category.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label><br>
                            <input type="text" placeholder="Title...." class="form-control" name="title"><br>
                            <input type="submit" name="create_title" class="btn btn-primary mt-2" value="Create Title">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>