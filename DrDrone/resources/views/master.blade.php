<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title> @yield('page_title') </title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />

    @include('Admin.Partials.header')
    @yield('css')
</head>


<body>


@include('Admin.Partials.navbar')
<div class="wrapper">
    <div class="container-fluid">

        <div class="content">
            @yield('page_content')
        </div>
    </div> <!-- end container-fluid -->
</div>
@include('Admin.Partials.footer')
@yield('script')
</body>
</html>
