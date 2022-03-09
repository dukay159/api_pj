@include('layouts.head')

<body>
    <!--header-top-starts-->
    <div class="header-top">
        <div class="container">
            <div class="head-main">
                <h1 style="text-align: center;">Danh muc bai viet</h1>
            </div>
        </div>
    </div>
    <!--start-header-->
    @include('layouts.header')
    <!--end-header-->
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
</body>

</html>