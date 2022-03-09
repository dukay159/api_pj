@include('layouts.head')

<body>
    <!--header-top-starts-->
    <div class="header-top">
        <div class="container">
            <div class="head-main">
                <h1 style="text-align: center;">Update TITLE</h1>
            </div>
        </div>
    </div>
        <!--start-header-->
        @include('layouts.header')
        <!--end-header-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <form autocomplete="off" method="POST" action="{{route('category.update', [$category->id])}}">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label><br>
                            <input type="text" value="{{$category->title}}" class="form-control" name="title"><br>
                            <input type="submit" name="create_title" class="btn btn-primary mt-2" value="Update Title">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>