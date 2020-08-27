@extends('master')
@section('title') Proje Ekleme
@endsection
@section('css')

@endsection
@section('goto_page')
    /Proje Ekleme
@endsection
@section('page_content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-20">
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                {{$erros}}
                            @endforeach
                        </div>
                    @endif
                    <form action="{{route('projectAdd')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Proje adı</label>
                            <input type="text" class="form-control" id="project_name" name="project_name" required />
                        </div>

                        <div class="form-group">
                            <label>Proje Fotoğrafı</label>
                            <input type="file" name="image" id="image" class="form-control" required />
                        </div>
                        <div class="col-lg-3 col-md-6 m-b-30">
                            <!--   <p class="text-muted">Onaylandı!</p> -->
                            <button type="submit" class="btn btn-primary waves-effect waves-light" id="sa-success">Ekle</button>
                        </div>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
@section('script')

@endsection
