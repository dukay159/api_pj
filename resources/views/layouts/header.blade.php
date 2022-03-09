    <!--header-top-end-->
    <!--start-header-->
    <div class="header">
        <div class="container">
            <div class="head">
                <div class="navigation">
                    <span class="menu"></span>
                    <ul class="navig">
                        <li><a href="{url('/')}}">Home</a></li>
                        <li><a href="{{route('customer.create')}}">User Post</a></li>
                        <li><a href="{{route('customer.index')}}">User List</a></li>
                        <li><a href="{{route('category.create')}}">Post</a></li>
                        <li><a href="{{route('category.index')}}">Danh muc</a></li>
                    </ul>
                </div>
                <div class="header-right">
                    <!-- search -->
                    <form action="" method="GET">
                        <div class="search-bar">
                            <input name="key" placeholder="Search....">
                            <button type="submit" value="Search" name="search">Search</button>
                        </div>
                    </form>
                    <!-- end search -->
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- script-for-menu -->
    <script>
        $("span.menu").click(function() {
            $(" ul.navig").slideToggle("slow", function() {});
        });
    </script>
    <!-- script-for-menu -->