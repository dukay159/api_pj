@include('layouts.head')

<body>
    <!--header-top-starts-->
    <div class="header-top">
        <div class="container">
            <div class="head-main">
                <h1 style="text-align: center;">UPDATE USER</h1>
                <!-- <a href="index.html"><img src="{{asset('images/logo-1.png')}}" alt="" /></a> -->
            </div>
        </div>
    </div>
    <!--start-header-->
    @include('layouts.header')
    <!--end-header-->
    <!-- CREATE USER-->
    <div class="container">
        <div class="col-md-8">
            <div class="form h-100">
                <h3>Edit Information</h3>
                <form class="mb-5" autocomplete="off" method="POST" action="{{ route('customer.update', ['customer' => $customers->id]) }}">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group mb-5">
                            <label for="" class="col-form-label">Name *</label>
                            <input type="text" class="form-control" name="name" value="{{ $customers->name }}">
                        </div>
                        <div class="col-md-6 form-group mb-5">
                            <label for="" class="col-form-label">Email *</label>
                            <input type="text" class="form-control" name="email" value="{{ $customers->email }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group mb-5">
                            <label for="" class="col-form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" value="{{ $customers->phone }}">
                        </div>
                        <div class="col-md-6 form-group mb-5">
                            <label for="" class="col-form-label">Company</label>
                            <input type="text" class="form-control" name="company" value="{{ $customers->company }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group mb-5">
                            <label for="" class="col-form-label">Address</label>
                            <textarea class="form-control" name="address" cols="30" rows="4" value="{{ $customers->address }}" style="resize: none;"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <input type="submit" value="Update" class="btn btn-primary rounded-0 py-2 px-4">
                            <span class="submitting"></span>
                        </div>
                    </div>
                </form>
                <div id="form-message-warning mt-4"></div>
            </div>
        </div>
    </div>
</body>

</html>