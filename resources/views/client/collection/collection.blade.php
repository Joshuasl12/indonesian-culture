@extends('layout.layoutclient')

@section('content')
    <div class="nama-judul">
        <h2 class="judul">{{$subTitle}}</h2>
    </div>

    @foreach ($data as $item)
        <div class="row my-4 row-gap-3" style="margin: 0 auto;">
            <div class="col-md-4">
                <div class="card">
                    <a class="nav-link active" aria-current="page" href="{{ route('collection.details', $item->id) }}">
                        <img src="{{ URL::asset('/file/' . @$item->image) }}" alt="Image" class="card-img-top" height="300px">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->nama }},</h5>
                            <p class="card-text">{{ $item->province->nama_provinsi }}</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
@endsection