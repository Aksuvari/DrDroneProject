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
<script>

    $("#dateajax").change(function (event){
        event.preventDefault();
        var date=$('#dateajax').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "{{ route('dateWeather') }}",
            method: 'POST',
            data: {date},
            success: function(result){
                console.log('başardık ');
                jQuery('.alert').show();
                jQuery('.alert').html(result.success);
            }});
    });
    /*jQuery(document).ready(function(){

        jQuery('dateajax').click(function(e){
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: "{{ url('/grocery/post') }}",//verilecek
                method: 'post',
                data: {
                    temp: jQuery('#temp').val(),
                    humidity: jQuery('#humidity').val(),
                    icon: jQuery('#icon').val()
                },
                success: function(result){
                    jQuery('.alert').show();
                    jQuery('.alert').html(result.success);
                }});
        });
    });*/

</script>
@yield('script')
</body>
</html>
