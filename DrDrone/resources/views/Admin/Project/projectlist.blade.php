@extends('master')
@section('title') Proje Ekleme
@endsection
@section('css') @endsection
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
                                    <div class="col-sm-6 col-md-3 m-t-30">
                                        <div class="text-center">

                                            <!-- Large modal -->
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#deneme{{$projects->id}}">Fotoğraf Detayı</button>
                                        </div>
                                        <div class="modal fade bs-example-modal-lg" id="deneme{{$projects->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0" id="myLargeModalLabel"> </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="card m-b-30">
                                                            <div class="card-body">

                                                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                                    <ol class="carousel-indicators">
                                                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                                    </ol>

                                                                    <div class="carousel-inner" role="listbox">
                                                                        <div class="carousel-item active">
                                                                            <img class="d-block img-fluid" src="{{$projects->image}}"  width="200" alt="First slide">
                                                                        </div>

                                                                    </div>
                                                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                        <span class="sr-only">Previous</span>
                                                                    </a>
                                                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                        <span class="sr-only">Next</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                </td>
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

                                    <div class="col-sm-6 col-md-3 m-t-30">
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
@endsection
