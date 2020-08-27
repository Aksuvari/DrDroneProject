@extends('master')
@section('title')Drone Projesi
@endsection
@section('css')
@endsection
@section('goto_page')
    Anasayfa
@endsection

@section('page_content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-20">
                <div class="card-body">

                    <!-- <h4 class="mt-0 header-title">Markers</h4>
                     <p class="text-muted m-b-30 ">Example of google maps.</p> -->

                    <div id="gmaps-markers" class="gmaps"></div>

                </div>
            </div>
        </div><!-- end col -->
    </div>
@endsection

@section('script')
@endsection
