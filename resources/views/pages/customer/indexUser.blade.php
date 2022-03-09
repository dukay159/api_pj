@include('layouts.head')
<body>
    <!--header-top-starts-->
    <div class="header-top">
        <div class="container">
            <div class="head-main">
                <h1 style="text-align: center;">USER LIST</h1>
            </div>
        </div>
    </div>
    @include('layouts.header')
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

        <div style="margin: 10px;" class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">Email</th>
                                <th scope="col">Company</th>
                                <th scope="col"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 0;
                            @endphp
                            @foreach($customers as $p)
                            @php
                            $i++;
                            //$urlEdit = route('customer.show', ['customer' => $p->id]);
                            //dd($p);
                            $aaa = route('customer.show', ['customer' => $p->id]);
                            @endphp
                            <tr>
                                <th scope="row">{{$i}}</th>
                                <th scope="row">{{$p->name}}</th>
                                <th scope="row">{{$p->phone}}</th>
                                <th scope="row">{{$p->address}}</th>
                                <th scope="row">{{$p->email}}</th>
                                <th scope="row">{{$p->company}}</th>

                                <td>
                                    <form action="{{ route('customer.destroy', ['customer' => $p->id]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input class="btn btn-danger mb-2 btn-sm" type="submit" value="Delete">
                                    </form>
                                    <br>
                                    <a class="btn btn-warning btn-sm" href="{{ route('customer.show', ['customer' => $p->id]) }}">Edit</a>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div style="margin: 5px;">
                    {{ $customers->appends(request()->all())->links() }}
                </div>
                
            </div>
        </div>
    </div>
</body>

</html>