@include('layouts.head')

<body>
    <!--header-top-starts-->
    <div class="header-top">
        <div class="container">
            <div class="head-main">
                <h1 style="text-align: center;">CREATE USER</h1>
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
                <h3>Fill in information</h3>
                <form class="mb-5" autocomplete="off" method="POST" action="{{route('customer.store')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group mb-5">
                            <label for="" class="col-form-label">Name *</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                        </div>
                        <div class="col-md-6 form-group mb-5">
                            <label for="" class="col-form-label">Email *</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Your email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group mb-5">
                            <label for="" class="col-form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone #">
                        </div>
                        <div class="col-md-6 form-group mb-5">
                            <label for="" class="col-form-label">Company</label>
                            <input type="text" class="form-control" name="company" id="company" placeholder="Company  name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group mb-5">
                            <label for="" class="col-form-label">Address</label>
                            <textarea class="form-control" name="address" id="address" cols="30" rows="4" placeholder="Your address" style="resize: none;"></textarea>
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

</body>

</html>