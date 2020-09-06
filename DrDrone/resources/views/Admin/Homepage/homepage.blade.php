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

                    <div id="gmaps-markers" class="gmaps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2038.4688021205175!2d35.56288196251865!3d38.70337936600557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152b6d59c1b5b34f%3A0xbbda4a5de343c491!2sTalas%2C%20Kayseri!5e0!3m2!1str!2str!4v1599211193992!5m2!1str!2str" width="1650" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>

                </div>
            </div>
        </div><!-- end col -->
    </div>
@endsection

@section('script')
@endsection
