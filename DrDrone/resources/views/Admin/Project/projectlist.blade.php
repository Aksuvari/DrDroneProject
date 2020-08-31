@extends('master')
@section('title') Proje Ekleme
@endsection
@section('css')
@endsection
<link rel="shortcut icon" href="{{asset('Frontend/assets/images/favicon.ico')}}">
<link href="{{asset('Frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('Frontend/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('Frontend/assets/css/style.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('Plugins/plugins/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css">
@section('goto_page')
    /Proje Listesi
@endsection
@section('page_content')

    <div class="row">
        <div class="col-12">
            <div class="card m-b-20">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Proje Listesi</h4>


                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Proje Adı</th>
                            <th>Proje Fotoğrafı</th>
                            <th>Proje Detayı</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($project as $projects)
                            <tr>
                                <td>{{$projects->project_name}}</td>
                                <td>

                                       <div class="col-6">

                                           <a class="image-popup-no-margins" href="{{$projects->image}}">
                                               <img class="img-fluid" alt="" src="{{$projects->image}}" width="100" height="120">
                                           </a>

                                       </div>



                                <td>
                                    <div class="col-sm-6 col-md-3 m-t-30">
                                        <div class=" text-center">

                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">Analiz Detayı</button>
                                        </div>

                                        <!-- sample modal content -->
                                        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0" id="myModalLabel">Analiz Sonuçları</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <p>Toprak nem analiz sonucları</p>
                                                        <p>Zehir Analizi sonuçları</p>
                                                        <p>Böcek Analizi sonuçları</p>

                                                    </div>

                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                    </div>


                                </td>

                            </tr>
                        @endforeach
                        </tbody>

                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
@section('script')
    <script src="{{asset('Frontend/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('Frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('Frontend/assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('Frontend/assets/js/waves.min.js')}}"></script>
    <script src="{{asset('Plugins/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('Plugins/plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('Frontend/assets/pages/lightbox.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('Frontend/assets/js/app.js')}}"></script>

@endsection
